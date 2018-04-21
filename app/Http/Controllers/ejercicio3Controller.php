<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\EstiloSexoPromedioRecinto;
use App\Operaciones;

class ejercicio3Controller extends Controller
{
    function calcular(){
        $operaciones = new Operaciones();
        $estiloSexoPromedioRecinto=EstiloSexoPromedioRecinto::all();//Para obtener los datos de la tabla
        //Parámetros uqe vienen por post
        $estilo = request('estilo');
        $promedio = request('promedio');
        $recinto = request('recinto');
        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $bandera=0;
        foreach ($estiloSexoPromedioRecinto as $estiloSexoPromedioRecinto_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio3($estilo, $promedio, $recinto, $estiloSexoPromedioRecinto_actual);//Calcular la distancia e ir almacenando la de menor distancia
            if($bandera==0){
                //debe hacerlo solamente la primer vez
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$estiloSexoPromedioRecinto_actual;
                $bandera=1;
            }            
            if($distancia_actual==0){
                $resultado=$registro_mas_cercano->sexo;
                return view('formularios.ejercicio_3', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$estiloSexoPromedioRecinto_actual;
            }
        }
       
        $resultado=$registro_mas_cercano->sexo;
        return view('formularios.ejercicio_3', compact('resultado'));
    }    //
}
