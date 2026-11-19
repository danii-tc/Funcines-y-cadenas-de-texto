<?php 
    function contar_caracteres($c) { 
        return strlen($c); 
    }
    function cadena_mayus($c) { 
        return strtoupper($c); 
    }
    function cadena_minus($c) { 
        return strtolower($c); 
    }
    function invertir_cadena($c) { 
        $c = str_replace(' ', '', $c);
        return strrev($c);
    }
    function palindromo($c) {
        $c = strtolower($c);
        $c = str_replace(' ', '', $c);
        if(strrev($c)==$c){
            return "Si es palindromo";
        }
        else{
            return "No es palindromo";
        } 
    }
    function contar_vocales($c) { 
        $c=strtolower($c);
        $l=strlen($c);
        $v=['a', 'e', 'i', 'o', 'u'];
        $cv=0;
        for($i=0; $i<$l; $i++){
            if(in_array($c[$i], $v)){
                $cv++;
            }
        }
        return $cv;
    }
?> 