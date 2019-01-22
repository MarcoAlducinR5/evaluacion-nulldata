@include('header')
<h1>Registro de Empleados</h1>

<hr>

<h3>¡Exito!</h3>
<label for="">Los datos del empleado se han registrado satisfactoriamente</label>

<p><a href="{{ action('EvaluacionController@index') }}">Regresar</a></p>

@include('footer')