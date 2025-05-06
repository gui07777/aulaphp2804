<?php

$nome = "Torantina Macedo";
$idade = 28;
$altura = 1.69;
$peso = 98.5;
$isVacinada = false;

echo "nome: $nome \n
idade: $idade \n
altura: $altura \n
peso: $peso \n
Vacinada? $isVacinada";

if($idade >= 18){
    echo "$nome, é maior de idade e possui $idade anos";
}else{
    echo "$nome, é menor de idade e possui $idade anos";
}

echo "<br>\nLAÇOS<br>\n";

for($i = 1; $i <= 100; $i++){
    echo "$i <br>\n";
}
?>