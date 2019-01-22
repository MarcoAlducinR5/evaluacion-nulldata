@include('header')
    <h1>Listado de Empleados</h1>

    <hr>

    <div class="row mt-3">
        <div class="col-8">
            <label for="">Seleccione la opcion a realizar...</label>
            <ul>
                <li> <a href="{{ url( "/registro") }}">Registro</a></li>
                <li> <a href="{{ url( "/listado") }}">Lista</a></li>
            </ul>
        </div>
        <div class="col-4">
        </div>
    </div>

@include('footer')