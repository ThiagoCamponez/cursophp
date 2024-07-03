<?php 

    include('Class1.php');

    $Pessoa1 = new Class1("Thiago Camponêz", 33);

    echo $Pessoa1-> getNome() . " tem " . $Pessoa1->getIdade() . " anos";
?>