<?php
    namespace App;
    class Operaciones
    {
        
        public function CalcularEuclidesRedes($confiabilidad, $cantidad_enlaces, $capacidad, $costo_enlaces, $red_actual){
            $arreglo=$this->convertir_redes_numero($red_actual);
            $resultado = sqrt( pow(($confiabilidad-$arreglo[0]),2) +pow(($cantidad_enlaces - $arreglo[1]),2) + pow(($capacidad-$arreglo[2]),2)+pow(($costo_enlaces-$arreglo[3]),2));
            return $resultado;
        }
        private function convertir_redes_numero($red){
            $arreglo_red = array(4);
            $arreglo_red[0]=$red->reliability;
            $arreglo_red[1]=$red->links_quantity;
            switch ($red->capacity) {
                case 'Low':
                    $arreglo_red[2]=1;
                    break;
                case 'Medium':
                    $arreglo_red[2]=2;
                    break;
                case 'High':
                    $arreglo_red[2]=3;
                    break;
            }
            switch ($red->cost) {
                case 'Low':
                    $arreglo_red[3]=1;
                    break;
                case 'Medium':
                    $arreglo_red[3]=2;
                    break;
                case 'High':
                    $arreglo_red[3]=3;
                    break;
            }
            return $arreglo_red;
        }

    public function CalcularEuclidesEjercicio1($caec, $eaor, $recintoEstilo_actual){

        $resultado = sqrt( pow(($caec-$recintoEstilo_actual->ca_ec),2) +pow(($eaor - $recintoEstilo_actual->ea_or),2));
        
        return $resultado;
        
        }

        
    public function CalcularEuclidesEjercicio2($estilo, $promedio, $sexo, $EstiloSexoPromedioRecinto_actual){

    $arreglo=$this->convertir_estiloSexoPromedioRecinto_numero($EstiloSexoPromedioRecinto_actual);
    
    $resultado = sqrt( pow(($estilo-$arreglo[2]),2) +pow(((double)$promedio - (double) $EstiloSexoPromedioRecinto_actual->promedio),2) + pow(($sexo-$arreglo[0]),2));
    
    return $resultado;
    
    }


    
    
    private function convertir_estiloSexoPromedioRecinto_numero($EstiloSexoPromedioRecinto_actual){
    
    $arreglo = array(0, 0, 0);
    
    switch ($EstiloSexoPromedioRecinto_actual->sexo) {
    
    case 'M':
    
    $arreglo[0]=1;
    
    break;
    
    
    
    case 'F':
    
    $arreglo[0]=2;
    
    break;
    
    }
    
    switch ($EstiloSexoPromedioRecinto_actual->recinto) {
    
    case 'Paraiso':
    
    $arreglo[1]=1;
    
    break;
    
    
    
    case 'Turrialba':
    
    $arreglo[1]=2;
    
    break;
    
    }
    
    switch ($EstiloSexoPromedioRecinto_actual->estilo) {
    
    case 'DIVERGENTE':
    
    $arreglo[2]=1;
    
    break;
    
    
    
    case 'CONVERGENTE':
    
    $arreglo[2]=2;
    
    break;
    
    
    
    case 'ASIMILADOR':
    
    $arreglo[2]=3;
    
    break;
    
    
    
    case 'ACOMODADOR':
    
    $arreglo[2]=4;
    
    break;
    
    }
    
    return $arreglo;
    
    }
    
    
public function CalcularEuclidesEjercicio3($estilo, $promedio, $recinto, $estiloSexoPromedioRecinto_actual){

    $arreglo=$this->convertir_estiloSexoPromedioRecinto_numero($estiloSexoPromedioRecinto_actual);
    
    $resultado = sqrt( pow(($estilo-$arreglo[2]),2) +pow(((double)$promedio - (double) $estiloSexoPromedioRecinto_actual->promedio),2) + pow(($recinto-$arreglo[1]),2));
    
    return $resultado;
    
    }

    public function CalcularEuclidesEjercicio4($recinto, $promedio, $sexo, $estiloSexoPromedioRecinto_actual){
        $arreglo=$this->convertir_estiloSexoPromedioRecinto_numero($estiloSexoPromedioRecinto_actual);
        $resultado = sqrt( pow(($recinto-$arreglo[1]),2) + pow(((double)$promedio - (double) $estiloSexoPromedioRecinto_actual->promedio),2)+pow(($sexo-$arreglo[0]),2));
        return $resultado;
    }

    
public function CalcularEuclidesEjercicio5($edad, $sexo, $autoevaluacion, $cantidad_repitiendo, $disciplina, $experiencia_computadoras, $experiencia_tecnologia_web, $experiencia_sitio_web, $profesor_actual){
    $arreglo=$this->convertir_profesores_numero($profesor_actual);
    $resultado = sqrt( pow(($edad-$arreglo[0]),2) + pow(($sexo-$arreglo[1]),2)
    + pow(($autoevaluacion-$arreglo[2]),2) + pow(($cantidad_repitiendo-$arreglo[3]),2)
    + pow(($disciplina-$arreglo[4]),2) + pow(($experiencia_computadoras-$arreglo[5]),2)
    + pow(($experiencia_tecnologia_web-$arreglo[6]),2) + pow(($experiencia_sitio_web-$arreglo[7]),2));
    return $resultado;
    }

    
private function convertir_profesores_numero($profesor){

    $arreglo = array(0, 0, 0, 0, 0, 0, 0, 0);
    
    $arreglo[0]=$profesor->a;
    
    switch ($profesor->b) {
    
    case 'M':
    
    $arreglo[1]=1;
    
    break;
    
    
    
    case 'F':
    
    $arreglo[2]=2;
    
    break;
    
    
    
    case 'NA':
    
    $arreglo[3]=3;
    
    break;
    
    }
    
    switch ($profesor->c) {
    
    case 'B':
    
    $arreglo[2]=1;
    
    break;
    
    
    
    case 'I':
    
    $arreglo[2]=2;
    
    break;
    
    
    
    case 'A':
    
    $arreglo[2]=3;
    
    break;
    
    }
    
    $arreglo[3]=$profesor->d;
    
    switch ($profesor->e) {
    
    case 'DM':
    
    $arreglo[4]=1;
    
    break;
    
    
    
    case 'ND':
    
    $arreglo[4]=2;
    
    break;
    
    
    
    case 'O':
    
    $arreglo[4]=3;
    
    break;
    
    }
    
    switch ($profesor->f) {
    
    case 'L':
    
    $arreglo[5]=1;
    
    break;
    
    
    
    case 'A':
    
    $arreglo[5]=2;
    
    break;
    
    
    
    case 'H':
    
    $arreglo[5]=3;
    
    break;
    
    }
    
    switch ($profesor->g) {
    
    case 'N':
    
    $arreglo[6]=1;
    
    break;
    
    
    
    case 'S':
    
    $arreglo[6]=2;
    
    break;
    
    
    
    case 'O':
    
    $arreglo[6]=3;
    
    break;
    
    }
    
    switch ($profesor->h) {
    
    case 'N':
    
    $arreglo[7]=1;
    
    break;
    
    
    
    case 'S':
    
    $arreglo[7]=2;
    
    break;
    
    
    
    case 'O':
    
    $arreglo[7]=3;
    
    break;
    
    }
    
    return $arreglo;
    
    }
    
    
    
    
    }

        


?>