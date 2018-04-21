@extends('common.site_master')
@section('title', 'Ejercicio 5')
@section('content')
    <h1>Ejercicio 5</h1>
    <form method="POST" action="/ejercicio_5/consultar">
    {{ csrf_field() }}
        <div class="form-group">
            <h3>Información Demográfica</h3>
            <label for="edad">Edad:</label>
            <input name="edad" type="number"></input><br>
            <label for="sexo">Sexo:</label>
            <select name="sexo">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
            </select>
        </div>
        <div class="form-group">
            <h3>Antecedentes</h3>
            <label for="autoevaluacion">Autoevaluación de la habilidad con la materia del curso:</label>
            <select name="autoevaluacion">
                <option value="1">Principiante</option>
                <option value="2">Intermedio</option>
                <option value="3">Avanzado</option>
            </select><br>
            <label for="experiencia">Experiencia:</label>
            <select name="experiencia">
                <option value="1">Principiante</option>
                <option value="2">Intermedio</option>
                <option value="3">Avanzado</option>
            </select><br>
            <label for="cantidad_repitiendo">Cantidad de veces como profesor:</label>
            <input name="cantidad_repitiendo" type="number"></input><br>
            <label for="disciplina">Disciplina:</label>
            <select name="disciplina">
                <option value="2">ND</option>
                <option value="1">DM</option>
                <option value="3">O</option>
            </select><br>
            <label for="experiencia_computadoras">Experiencia con computadoras:</label>
            <select name="experiencia_computadoras">
                <option value="2">A</option>
                <option value="3">H</option>
                <option value="1">L</option>
            </select><br>
            <label for="experiencia_tecnologia_web">Experiencia implementando tecnologías Web en sus lecciones:</label>
            <select name="experiencia_tecnologia_web">
                <option value="1">N</option>
                <option value="3">O</option>
                <option value="2">S</option>
            </select><br>
            <label for="experiencia_sitios_web">Experiencia utilizando sitios Web:</label>
            <select name="experiencia_sitios_web">
                <option value="1">N</option>
                <option value="2">S</option>
                <option value="3">O</option>
            </select>
            <input type="submit" value="Consultar"></input>
        </div>
    </form>
    <form name="resultado">
            Resultado:<input name="txt_resultado" value="@if (!empty($resultado)){{ $resultado }}@endif">
</form>
@endsection