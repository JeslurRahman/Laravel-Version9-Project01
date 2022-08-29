<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Custom Auth Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #0dcaf0;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">JR Products</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Profile</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/') }}">Logout</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="row">
        <div style="color: #750e05; text-align:left;">
            <p><h3>Welcome Mr. {{ Auth::user()->name }} </h3> </p>
        </div>
        <hr>
    </div>
    </div>
    @yield('content')

    <div style=" text-align:center; padding-top:15vh;">
        <h4>Click Me</h4>
        <h1>
            <a class="nav-link" href="{{ route('index') }}">Go to Dashboard</a>
        </h1>

    </div>
</body>
</html>
