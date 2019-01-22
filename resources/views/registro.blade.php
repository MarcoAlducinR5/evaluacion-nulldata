@include('header')
<h1>Registro de Empleados</h1>

<hr>

<label for="">Ingrese los datos a realizar...</label>
<div class="row mt-3">
    <form action="{{ url( "/registro/resultado") }}" method="get">
        <div class="col-sm-6">
            <label for="">Nombre:</label>
            <p><input type="text" name="nombreEmp" id="nombreEmp"></p>
            <label for="">Correo electronico:</label>
            <p><input type="email" name="emailEmp" id="emailEmp"></p>
            <label for="">Puesto:</label>
            <p><input type="text" name="puestoEmp" id="puestoEmp"></p>
        </div>
        <div class="col-sm-6">
            <label for="">Fecha de Nacimiento:</label>
            <p><input type="date" name="fechaNacEmp" id="fechaNacEmp"></p>
            <label for="">Domicilio:</label>
            <p><textarea name="domicilioEmp" id="domicilioEmp" cols="30" rows="10"></textarea></p>
            <label for="">Skills:</label>
            <select name="skillEmp" id="skillEmp" multiple>
                <option value="innovar">Desarrollo de ideas y capacidad para innovar</option>
                <option value="rigor">Productividad y capacidad para trabajar con rigor</option>
                <option value="analitico">Capacidad analítica, pensamiento crítico</option>
                <option value="tecnologias">Dominios de las nuevas Tecnologías (TIC)</option>
                <option value="comunicacion">Capacidad de comunicación</option>
                <option value="compromiso">Identificación y compromiso con la compañía</option>
                <option value="equipo">Trabajo en equipo</option>
                <option value="estres">Capacidad para gestionar el estrés</option>
                <option value="adaptacion">Adaptación o flexibilidad</option>
                <option value="logro">Orientación al logro</option>
                <option value="problemas">Identificación de oportunidades y resolución de problemas</option>
            </select>
        </div>
        <p><input type="submit" value="Registrar"></p>
    </form>
    <!--<a href="{{ url()->previous() }}">Regresar</a>-->
    <a href="{{ action('EvaluacionController@index') }}">Regresar</a>
</div>

@include('footer')