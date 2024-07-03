<?php 

    include('Interface1.php'); // Importando a interface

    class Teste implements Interface1{

        public function falarAlgumaCoisa($falar){

            echo $falar;
        }
    }

    $falar = new Teste;
    $falar->falarAlgumaCoisa("Ola Mundo!");

?>