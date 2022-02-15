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

<body class="">

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

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link active" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<center>

    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <a class="btn btn-success" href="{{url('alumnos/create')}}">Register new student</a>
        </div>
    </div>
</center>



<div class="card">
    <div class="card-header">
        Students
    </div>
    <div class="card-body me-5">
        <table class="table mx-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">First Name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">DPI</th>
                <th scope="col">Phone</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </tr>
            </thead>

            <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->id}}</td>
                    <td>
                        <img src="{{ asset('storage').'/'.$alumno->Foto}}" alt="" style="width: 125px; height: 135px">
                    </td>
                    <td>{{$alumno->FirstName}}</td>
                    <td>{{$alumno->SecondName}}</td>
                    <td>{{$alumno->LastName}}</td>
                    <td>{{$alumno->DateOfBirth}}</td>
                    <td>{{$alumno->Address}}</td>
                    <td>{{$alumno->Email}}</td>
                    <td>{{$alumno->Dpi}}</td>
                    <td>{{$alumno->Cel}}</td>
                    <td>

                        <a class="btn btn-warning" href="{{ url('/alumnos/'.$alumno->id.'/edit') }}">
                            Correct
                        </a>
                    </td>
                    <td>
                        <form action="{{ url('/alumnos/'.$alumno->id) }}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this Student?')">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
</div>



</body>
</html>




