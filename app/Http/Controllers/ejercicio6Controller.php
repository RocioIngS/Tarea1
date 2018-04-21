<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Redes;
use App\Operaciones;

class ejercicio6Controller extends Controller
{
    function calcular(){
        $operaciones = new Operaciones();
        $redes=Redes::all();//Para obtener los datos de la tabla
        //Parametros que viene n po post
        $confiabilidad_form = request('confiabilidad');
        $cantidad_enlaces_form = request('cantidad_enlaces');
        $capacidad_form = request('capacidad');
        $costo_enlaces_form = request('costo_enlaces');
        $red_mas_cercana="";
        $distancia_mas_cercana="";
        $contador=0;
        foreach ($redes as $red_actual){
            $distancia_actual=$operaciones->CalcularEuclidesRedes($confiabilidad_form, $cantidad_enlaces_form, $capacidad_form, $costo_enlaces_form, $red_actual);//Calcular la distancia e ir almacenando la de menor distancia
            if($contador==0){
               
                $distancia_mas_cercana=$distancia_actual;
                $red_mas_cercana=$red_actual;
                $contador=1;
            }            
            if($distancia_actual==0){
                $resultado=$red_mas_cercana->class;
                return view('formularios.ejercicio_6', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $red_mas_cercana=$red_actual;
            }
        }
       
        $resultado=$red_mas_cercana->class;
        return view('formularios.ejercicio_6', compact('resultado'));
    }   
    //
}
