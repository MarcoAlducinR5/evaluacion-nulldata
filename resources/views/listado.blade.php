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
            <tr>
                <td></td>
                <td></td>
                <td><a href="{{ url( "/detalles/1") }}"> Ver</a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/2") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/3") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/4") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/5") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/6") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/7") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/8") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/9") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/10") }}"> Ver </a> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <a href="{{ url( "/detalles/11") }}"> Ver </a> </td>
            </tr>
        </tbody>
    </table>

    <br>

    <!--<p><a href="{{ url()->previous() }}">Regresar</a></p>-->
    <p><a href="{{ action('EvaluacionController@index') }}">Regresar</a></p>

@include('footer')