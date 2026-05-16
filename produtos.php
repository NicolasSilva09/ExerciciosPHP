<?php 
$preco = [100,50,20,90,200,50,70,150];
$contador= 1;

foreach ($preco as $preco){
    $result = $preco >=100 ?"caro" : "barato";
    echo "O produto $contador custa $preco e ele é $result<br>";
    $contador++;
}

?>