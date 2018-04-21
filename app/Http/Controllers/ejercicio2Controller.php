<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\EstiloSexoPromedioRecinto;
use App\Operaciones;

class ejercicio2Controller extends Controller
{
    function calcular(){
        $operaciones = new Operaciones();
        $estiloSexoPromedioRecinto=EstiloSexoPromedioRecinto::all();//Para obtener los datos de la tabla
        //Parámetros que vienen  por post
        $estilo = request('estilo');
        $promedio = request('promedio');
        $sexo = request('sexo');
        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $bandera=0;
        foreach ($estiloSexoPromedioRecinto as $EstiloSexoPromedioRecinto_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio2($estilo, $promedio, $sexo, $EstiloSexoPromedioRecinto_actual);//Almacena la distancia menor
            if($bandera==0){
               
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$EstiloSexoPromedioRecinto_actual;
                $bandera=1;
            }            
            if($distancia_actual==0){
                $resultado=$registro_mas_cercano->recinto;
                return view('formularios.ejercicio_2', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$EstiloSexoPromedioRecinto_actual;
            }
        }
        
        $resultado=$registro_mas_cercano->recinto;
        return view('formularios.ejercicio_2', compact('resultado'));
    }      //
}
