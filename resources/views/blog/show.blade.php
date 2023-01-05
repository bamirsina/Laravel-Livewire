<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Laravel</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
                </ul>
            </div>
        </div>
    </nav>
</head>
<body>

@foreach($data as $project)

            <table class="styled-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Description</th>
                <th>Stock</th>
            </tr>
            </thead>
                <tbody>
                <tr class="active-row">
                    <td>{{ $project["name"] }}</td>
                    <td>{{ $project["amount"] }}</td>
                    <td>{{ $project["status"] }}</td>
                    <td>{{ $project["description"] }}</td>
                    <td>{{ $project["stock"] }}</td>
                </tr>
                </tbody>
            </table>

@endforeach
</body>
</html>
