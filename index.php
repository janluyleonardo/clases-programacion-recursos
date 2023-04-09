<?php
echo "<h1>hola bienvenido al ejercicio de la clase de programacion</h1>";
echo "<h1>Ejemplo 1 array asociativo</h1>";
$array = array(
    "valor a"   => "andres arevalo",
    "valor b"  => 34000,
    "valor c"  => true,
    "valor d" => "d",
);
var_dump($array);//pintar en pantalla
echo "<h1>------------------------------------------------------</h1>";
echo "<h1>Ejemplo 2 for predeteminado por una variable</h1>";
$repetir = 25;//valor n
for($i=0; $i<=$repetir;$i++){
    echo "<br>valor de i=>".$i." en el valor de repetir: ".$repetir;
}
echo "<h1>------------------------------------------------------</h1>";
echo "<h1>Ejemplo 3 array simple de valores</h1>";
$array = array('perro', 'gato', 'avestruz');
$array_num = count($array);
for ($i = 2; $i < $array_num; ++$i){
    print "<br> iteracion: ". $i . $array[$i];
}
$i = 2;
while($i <= $array_num){
    echo "<br><h1>entro en el while</h1>";
    $i = $i + 1;
}
echo "<h1>------------------------------------------------------</h1>";
echo "<h1>Ejemplo 4 foreach simple que recorre los valores del array</h1>";
$arrayA = array('marrano', 'gorilla', 'tiburon');
foreach ($arrayA as $val) {
    //iteraciones
    print $val."<br>";
}
echo "<h1>------------------------------------------------------</h1>";
echo "<h1>Ejemplo 5 foreach key - value que recorre los valores del array</h1>";
$arrayB = array('manzana', 'pera', 'naranja','manzana', 'pera', 'naranja');
foreach($arrayB as $key => $val) {
    print "$key = $val <br>";
}
echo "<h1>------------------------------------------------------</h1>";

define("CONSTANTE", "Hola mundo.");
define("Constante", "Hola andres arevalo.");
echo CONSTANTE."<br>"; // muestra "Hola mundo."
echo Constante; // muestra "Constant" y se emite un aviso.

const CONSTANTEUNO = 'tercer constante';

echo CONSTANTEUNO;

$varab = "variable";

echo "<h1><br>".$varab."<br></h1>";

$varab = " cambien el valor";

echo "<h1><br>".$varab."<br></h1>";