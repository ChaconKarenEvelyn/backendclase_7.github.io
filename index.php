<?php

//Ejercicio 1-a
$array = ["2 <br>", "4 <br>", "6 <br>", "8 <br>", "10<br>", "12<br>", "14<br>", "16<br>", "18<br>", "20<br>"];
print_r($array);
echo "<br>";
echo "<br>";

//Ejercicio 1-b
$array2 = ["Pedro", "Ana", "34", "1"];
print_r($array2);
echo "<br>";
echo "<br>";

//Ejercicio 1-c
$arrayasociativo = [
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayo 3703",
    "Teléfono" => "1122334455",
];
var_dump($arrayasociativo);
echo "<br>";
echo "<br>";

//Ejercicio 1-d
$array4 = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
foreach($array4 as $indice => $ciudad){
  echo "<br> $ciudad . La ciudad con el índice $indice tiene el nombre $ciudad";
}
  echo "<br>";
  echo "<br>";

//Ejercicio 1-e
$arrayasociativo2 = [
    "MD" => "Madrid", 
    "BCL" => "Barcelona",
    "LD" => "Londres", 
    "NY" => "New York", 
    "LA" => "Los Ángeles",
    "CCG" => "Chicago",
];
echo $arrayasociativo2["MD"];
echo " - El índice de Madrid es MD. <br>";
echo $arrayasociativo2["BCL"];
echo " - El índice de Barcelona es BCL.<br> ";
echo $arrayasociativo2["LD"];
echo " - El índice de Londres es LD. <br>";
echo $arrayasociativo2["NY"];
echo " - El índice de New York es NY.<br> ";
echo $arrayasociativo2["LA"];
echo " - El índice de Los Angeles es LA.<br> ";
echo $arrayasociativo2["CCG"];
echo " - El índice de Chicago es CCG.<br> ";
?>