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
        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <img src="https://sites.google.com/site/umgmba1ciclo2017/_/rsrc/1485460129243/home/umg.png" alt="Logo UMG | Listening lessons, Blackboard learn, Instagram followers" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb" data-noaft="1" style="width: 500px; height: 150px; margin: 0px;">
                    <h2>Welcome</h2>
                    <p class="lead">To the registration system, please complete the fields.</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="col-md-7 col-lg-8">
                            <h4 class="mb-3">User information</h4>

                                <div class="row g-3">

                                    <!-- Name -->
                                     <div class="col-12">
                                        <label for="name" :value="__('Name')" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" id="name" placeholder="Username" name="name" :value="old('name')" required>
                                            <div class="invalid-feedback">
                                                Your username is required.
                                            </div>
                                        </div>
                                     </div>


                                    <!-- Email Address -->
                                    <div class="col-12">
                                        <label for="email" class="form-label" :value="__('Email')">Email</label>
                                        <input type="email" class="form-control" id="email"  placeholder="you@example.com" name="email" :value="old('email')" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>


                                    <!-- Password -->
                                    <div class="col-12">
                                        <label for="password" :value="__('Password')" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               required autocomplete="new-password">
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-12">
                                        <label for="password_confirmation" :value="__('Confirm Password')" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                    </div>

                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <button class="w-100 btn btn-primary btn-lg" type="submit">{{ __('Register') }}</button>
                                </div>
<br>
<br>

                        </div>
                </form>
            </main>
        </div>

    </body>
</html>

