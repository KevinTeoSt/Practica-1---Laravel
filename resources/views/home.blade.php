<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Registro de Alumnos</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Additional CSS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Laravel Practice No.1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarScroll">
                <ul class="navbar-nav justify-content-end collapse navbar-collapse me-auto my-2 my-lg-0 navbar-nav-scroll" id="navbarScroll">
                    @if (Route::has('login'))

                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <img src="https://sites.google.com/site/umgmba1ciclo2017/_/rsrc/1485460129243/home/umg.png" alt="Logo UMG | Listening lessons, Blackboard learn, Instagram followers" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb" data-noaft="1" style="width: 500px; height: 150px; margin: 0px;">

    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-6 fw-normal">Welcome to the student registration system</h1>
        <p class="lead fw-normal">Then in the upper bar you can register as a teacher for student registration or you can log in.</p>
        @if (Route::has('login'))

            @auth
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                </li>
            @else

                    <a class="btn btn-outline-secondary" href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))

                @endif
            @endauth
        @endif
    </div>
</div>
<div class="card text-center">

    <div class="card-footer text-muted">
        Kevin Emanuel Esquivel Teo; 0909-18-4551
    </div>
</div>
</body>
</html>
