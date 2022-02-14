<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/signin.css')}}" >
</head>

<body class="text-center">

        <!-- Session Status -->
    <main class="form-signin  mb-4" :status="session('status')" >




            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <img src="https://umg.edu.gt/miumg/sesion_files/logo_white.png" alt="Mi UMG | Universidad Mariano Gálvez de Guatemala" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb" data-noaft="1" style="width: 280px; height: 196.308px; margin: 0px;"> <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                     <!-- Email Address -->

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" :value="old('email')" required autofocus>
                        <label for="email" :value="__('Email')">Email address</label>
                    </div>

                    <!-- Password -->
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                               required autocomplete="current-password">
                        <label for="password" :value="__('Password')">Password</label>
                    </div>
                    <!-- Remember Me -->
                    <div class="block mt-1">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">{{ __('Log in') }}</button>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif


                    </div>

                <a class="mt-5 mb-3 text-muted" href="/">Back</a>
            </form>

    </main>

</body>
</html>




