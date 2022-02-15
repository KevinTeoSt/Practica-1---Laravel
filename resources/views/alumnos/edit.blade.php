
<!-- No sirve para enviar a traves del boton toda la info a nuestro controlador de update-->
<form action="{{ url('/alumnos/'.$alumnos->id) }}" method="post" enctype="multipart/form-data">

    <!-- Control de seguridad-->
@csrf
<!--PATCH NOS SIRVE PARA HACER UN UPDATE-->
{{method_field('PATCH')}}

<!-- Asi llamamos a edit.blade a esta parte-->
@include('alumnos.form')
</form>

