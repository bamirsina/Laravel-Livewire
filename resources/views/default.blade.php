<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    @livewireStyles
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <link href="{{ asset('wizard.css') }}" rel="stylesheet" id="bootstrap-css">
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.show') }}">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>
<body>

<div class="container">

    <div class="card">
        <div class="card-header">
            Laravel
        </div>
        <div class="card-body">
            <livewire:wizard />
        </div>
    </div>
</div>
        </div>
    </div>
</nav>
</body>
</div>


@livewireScripts

</html>
