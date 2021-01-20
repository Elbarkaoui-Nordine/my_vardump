<?php

function my_vardump($value, $tab = 0){
  
    echo str_repeat("  ", $tab);
    switch (gettype($value)) {
        case 'string':
            echo 'string('.strlen($value).') "'.$value.'"';
            break;
        case 'boolean':
            $string = $value ? 'true' : 'false';
            echo 'bool('.$string.')';
            break;
        case 'integer':
            echo "int($value)";
            break;
        case 'double':
            echo "float($value)";
            break;
        case 'array':
            display_array($value ,$tab);
            break;
        default:
            echo 'valeur inconnue';
    }
    
}
$array = [['2', ['3','4']],'3'];
my_vardump($array);
var_dump($array);
//affiche 

function display_array($array, $tab){
    echo 'array('.count($array).") {\n";
        for( $i = 0; $i < count($array) ; $i++){
            echo str_repeat("  ", $tab+1);
            echo "[$i]=>\n";
            my_vardump($array[$i], $tab+1);
            echo "\n";
        }
    echo str_repeat("  ", $tab);
    echo $tab == 0 ? "}\n" : "}" ;
}