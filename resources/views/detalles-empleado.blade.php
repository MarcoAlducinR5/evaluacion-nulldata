@include('header')
<h1>Informacion del Empleado {{ $id }}</h1>

<hr>

<div class="col-sm-6">
    <p><label for="">Nombre: {{ $empleado->name }}</label></p>
    <p><label for="">Correo electronico: {{ $empleado->email }}</label></p>
    <p><label for="">Puesto: {{ $empleado->puesto }}</label></p>
</div>
<div class="col-sm-6">
    <p><label for="">Fecha de Nacimiento: {{ $empleado->fechaNac }}</label></p>
    <p><label for="">Domicilio: {{ $empleado->domicilio }}</label></p>
    <p><label for="">Skills: {{ $empleado->skill }}</label></p>
</div>


<!--<a href="{{ url()->previous() }}">Regresar</a>-->
<a href="{{ action('EvaluacionController@listado') }}">Regresar</a>

@include('footer')