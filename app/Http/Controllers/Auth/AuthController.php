<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $data = $this->all($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    public function default()
    {
        if(Auth::check()){
            return view('default');
        }
        return redirect("login");
    }
    public function wizards()
    {
        if(Auth::check()){
            return view('livewire.wizard');
        }
        return redirect("login");

    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function show()
    {
        if(Auth::check()) {

            $data = Product::all();

            return view('blog.show')->with([
                'data' => $data

            ]);
        }
            return redirect("login");
        }



//    public function all(array $data)
//    {
//        return Product::all([
//            'name' => $data['name'],
//            'amount' => $data['amount'],
//            'description' => $data['description'],
//            'status' => $data['status'],
//            'stock' => $data['stock'],
//        ]);
//    }
//    public function show()
//    {
//        return view('blog.show');
//    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
    public function edit(Post $post)
    {
        return view('blog.edit', ['post' => $post]);
    }
}

