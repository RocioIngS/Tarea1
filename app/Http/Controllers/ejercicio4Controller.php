<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\EstiloSexoPromedioRecinto;
use App\Operaciones;

class ejercicio4Controller extends Controller
{
    function calcular(){
        $operaciones = new Operaciones();
        $estiloSexoPromedioRecintos=EstiloSexoPromedioRecinto::all();//Obtener datos de la tabla
        //Parametros que vienen por post
        $recinto = request('recinto');
        $promedio = request('promedio');
        $sexo = request('sexo');
        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $bandera=0;
        foreach ($estiloSexoPromedioRecintos as $estiloSexoPromedioRecinto_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio4($recinto, $promedio, $sexo, $estiloSexoPromedioRecinto_actual);
            if($bandera==0){
              
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$estiloSexoPromedioRecinto_actual;
                $bandera=1;
            }            
            if($distancia_actual==0){
                $resultado=$registro_mas_cercano->estilo;
                return view('formularios.ejercicio_4', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$estiloSexoPromedioRecinto_actual;
            }
        }
        $resultado=$registro_mas_cercano->estilo;
        return view('formularios.ejercicio_4', compact('resultado'));
    }
}
