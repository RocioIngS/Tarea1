<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profesores;
use App\Operaciones;

class ejercicio5Controller extends Controller
{
    function calcular(){
        $operaciones = new Operaciones();
        $profesores=Profesores::all();//Para obtener los datos de la tabla
        //Parámetros que vienen por post
        $edad = request('edad');
        $sexo = request('sexo');
        $autoevaluacion = request('autoevaluacion');
        $cantidad_repitiendo= request('cantidad_repitiendo');
        $disciplina = request('disciplina');
        $experiencia_computadoras = request('experiencia_computadoras');
        $experiencia_tecnologia_web = request('experiencia_tecnologia_web');
        $experiencia_sitios_web= request('experiencia_sitios_web');    
        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $bandera=0;
        foreach ($profesores as $profesores_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio5($edad,  $sexo, $autoevaluacion, $cantidad_repitiendo,  $disciplina, $experiencia_computadoras, $experiencia_tecnologia_web, $experiencia_sitios_web, $profesores_actual);//Calcular la distancia e ir almacenando la de menor distancia
            if($bandera==0){
               
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$profesores_actual;
                $bandera=1;
            }            
            if($distancia_actual==0){
                $resultado=$red_mas_cercana->class;
                return view('formularios.ejercicio_5', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$profesores_actual;
            }
        }
        
        $resultado=$registro_mas_cercano->class;
        return view('formularios.ejercicio_5', compact('resultado'));
    }    //
}
