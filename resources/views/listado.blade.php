@include('header')
    <h1>Lista de Empleados</h1>

    <hr>

    <table border="1">
        <thead>
            <tr>
                <td>#</td>
                <td>Nombre</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        @forelse( $empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->name }}</td>
                <td><a href="{{ url( "/detalles/{$empleado->id}") }}"> Ver</a> </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No hay empleados registrados.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <br>

    <!--<p><a href="{{ url()->previous() }}">Regresar</a></p>-->
    <p><a href="{{ action('EvaluacionController@index') }}">Regresar</a></p>

@include('footer')