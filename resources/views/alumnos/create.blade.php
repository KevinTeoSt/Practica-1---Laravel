<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Additional CSS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Laravel Practice No.1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarScroll">
                <ul class="navbar-nav justify-content-end collapse navbar-collapse me-auto my-2 my-lg-0 navbar-nav-scroll" id="navbarScroll">
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary" href="{{ url('/alumnos') }}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <main>

        <div class="py-5 text-center">
            <img src="https://cdn.pixabay.com/photo/2012/05/07/01/54/owl-47526__480.png" alt="Más de 100 vectores de Alumno y Ojo gratis" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb" data-noaft="1" style="width: 183px; height: 161.179px; margin: 0px;">
            <h2>Student Registration</h2>
            <p class="lead">All fields are required.</p>
        </div>

        <div class="row g-2">
            <div class="col-md-5 col-lg-8">
                <h4 class="mb-1">Student Information</h4>

                <form action="{{url('/alumnos')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">


                        <div class="col-sm-6">
                            <label for="FirstName" class="form-label" >First name</label>
                            <input type="text" class="form-control" name="FirstName" id="FirstName"  required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <label for="SecondName" class="form-label"  >Second name</label>
                            <input type="text" class="form-control" name="SecondName" id="SecondName"  required>
                            <div class="invalid-feedback">
                                Valid Second name is required.
                            </div>
                        </div>



                        <div class="col-12">
                            <label for="LastName" class="form-label" >Last Name</label>
                            <input type="text" class="form-control" name=LastName id="LastName"  required>
                            <div class="invalid-feedback">
                                Your lastname is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="DateOfBirth" class="form-label" >Date Of Birth</label>
                            <input type="text" class="form-control" name=DateOfBirth id="DateOfBirth"  required>
                            <div class="invalid-feedback">
                                Your Dateofbirth is required.
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="Address" class="form-label" >Address</label>
                            <input type="text" class="form-control" name=Address id="Address" required>
                            <div class="invalid-feedback">
                                Your Address is required.
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="Email" class="form-label" >Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" name="Email" id="Email"  placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="Dpi" class="form-label" >DPI</label>
                            <input type="text" class="form-control" name="Dpi" id="Dpi"  required>
                            <div class="invalid-feedback">
                                Your DPI is required.
                            </div>
                        </div>


                        <div class="col-6">
                            <label for="Cel" class="form-label" >Cel.</label>
                            <input type="text" class="form-control" name="Cel" id="Cel"  required>
                            <div class="invalid-feedback">
                                Your Cel is required.
                            </div>
                        </div>

                    <!-- <div class="col-12">
                            <label for="Foto" class="form-label" ></label>
                            <input type="file" class="form-control" name="Foto" id="Foto"  >
                            <div class="invalid-feedback">
                                Your Cel is required.
                            </div>
                        </div>-->

                        <input href="{{url('alumnos/list')}}" class="btn btn-primary mb-5" type="submit" value="Save">

                    </div>
                </form>

            </div>
        </div>
    </main>

</div>


</body>
<div class="card text-center">

    <div class="card-footer text-muted">
        Kevin Emanuel Esquivel Teo; 0909-18-4551
    </div>
</div>
</html>
