<?php
//match
function nombrepais($pais) : string {
    return match($pais) {
        "MX" => "México",
        "COL" => "Colombia",
        "EUA" => "Estados Unidos Americanos",
        default => "Lo siento, no conozco ese país"
    };
}

echo nombrepais("MX") . PHP_EOL;
echo '<br>';
//funciones variables
function saludar($nombre){
    echo 'hola '.$nombre;
}

$fun = 'saludar';
$fun('Danny');
//paso por referencia
$cat = "meow";

function make_a_cat_bark(&$cat_dog){
    $cat_dog = "woof";
}

echo "<br>";
make_a_cat_bark($cat);
echo $cat;

//aergumentos 
function sumar($valores =array(5,6,7)){
    return array_sum($valores);

}

echo "<br>";
echo sumar();
echo "<br>";
echo sumar(array(67,56,56));
echo "<br>";
class claseRamdon{}

function recibeunaclase($class = new claseRamdon){
 return $class::class;
}
echo recibeunaclase();

echo "<br>";
//named argument
function saludame($nombre,$apellido,$edad){
echo " tu nombre es $nombre y el apellido es $apellido y la edad es $edad";

}
saludame(
    nombre:"Danny",
    edad:34,
    apellido:"Gonzalez"

);
echo "<br>";
//funciomes anonimas

$numeros = [2,4,5,6,7,8];
$numeros_por_dos = array_map(function($current){
    return $current *2;
},$numeros);

print_r($numeros_por_dos);
echo "<br>";
$valor = 23;
$aumentaelvalor=function()use($valor){
    echo $valor;
};
echo "<br>";

//arrow functions
$valor = 23;
$aumentaelvalorpor2=fn($valor)=>$valor*2;

echo "<br>";

$edades=[5,6,45,34,23,43];
$mayoresdeedad= array_filter($edades,function($current){
    return $current >=18;
});
print_r($mayoresdeedad);

//funciones con parametros declarados
function sumardosvalores(int $a,int $b){
    return $a*$b;
}

//declarar devolucion
function resta(int $c,int $d):int{
    return $c-$d;
}


function bark(){
    return "woof";
}

$function ="bark";
echo $function();

