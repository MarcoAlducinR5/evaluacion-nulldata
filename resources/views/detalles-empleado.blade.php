@include('header')
<h1>Informacion del Empleado {{ $id }}</h1>

<hr>



<!--<a href="{{ //url()->previous() }}">Regresar</a>-->
<a href="{{ action('EvaluacionController@listado') }}">Regresar</a>

@include('footer')