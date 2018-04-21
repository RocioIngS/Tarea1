<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RecintoEstilo;
use App\Operaciones;

class ejercicio1Controller extends Controller
{
    function calcular(){
        $operaciones = new Operaciones();
        $recintoEstilos=RecintoEstilo::all();//Para obtener los datos de la tabla
        //Parametros que vienen por post
        $caec = request('caec');
        $eaor= request('eaor');
        
        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $bandera=0;
        foreach ($recintoEstilos as $recintoEstilo_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio1($caec, $eaor, $recintoEstilo_actual);
            if($bandera==0){
                
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$recintoEstilo_actual;
                $bandera=1;
            }            
            if($distancia_actual==0){
                $resultado=$registro_mas_cercano->estilo
                ;
                return view('formularios.ejercicio_1', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$recintoEstilo_actual;
            }
        }
        
        $resultado=$registro_mas_cercano->estilo;
        return view('formularios.ejercicio_1', compact('resultado'));
    }     
}
