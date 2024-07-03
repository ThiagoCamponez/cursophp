<?php 
class Pessoa {
    public $nome = "Jubileu";
    public $idade = "22";
    public $peso = "80kg";

    public function andar(){
        echo "Estou andando";
    }

    public function falar(){
        echo "Estou falando";
    }
}

$pessoa0001 = new Pessoa;
$pessoa0001->andar();
echo "<br>";
$pessoa0001->falar();

?>