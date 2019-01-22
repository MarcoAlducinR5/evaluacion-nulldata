@include('header')
<h1>Registro de Empleados</h1>

<hr>

<label for="">Ingrese los datos a realizar...</label>
<div class="row mt-6">
    <form action="{{ url( "/registro/resultado") }}" method="POST">
        {{csrf_field()}}
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
            <p>
                <input type="text" name="skills1" id="skills1">
                <select name="calificarSkill1" id="calificarSkill1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>
            <p>
                <input type="text" name="skills2" id="skills2">
                <select name="calificarSkill2" id="calificarSkill2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>
            <p>
                <input type="text" name="skills3" id="skills3">
                <select name="calificarSkill3" id="calificarSkill3">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>
            <p>
                <input type="text" name="skills4" id="skills4">
                <select name="calificarSkill4" id="calificarSkill4">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>
            <p>
                <input type="text" name="skills5" id="skills5">
                <select name="calificarSkill5" id="calificarSkill5">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>
            <p>
                <input type="text" name="skills6" id="skills6">
                <select name="calificarSkill6" id="calificarSkill6">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>
        </div>
        <p><button type="submit">Registrar Empleado</button></p>
    </form>
    <!--<a href="{{ url()->previous() }}">Regresar</a>-->
    <a href="{{ action('EvaluacionController@index') }}">Regresar</a>
</div>

@include('footer')