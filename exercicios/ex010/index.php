<?php 

class Pai {

    public $nome = "";
    public $sobrenome = "";
    public $idade = 0;

    private function falar() {
        return "Olá Mundo!";
    }
    public function dormir() {
        return "Dormindo";
    }

    public function falaremPublico() {
        return $this->falar();
    }
}

class Filha extends Pai {

    public $anoLetivo = "";
    public $brincadeira = "";

    public function estudar() {
        return "Estudando ";
    }
}

$Pai = new Pai();
$Pai->nome = "Thiago";
$Pai->sobrenome = "Camponêz";
$Pai->idade = 33;

$Filha1 = new Filha();
$Filha1->nome = "Manuelly";
$Filha1->sobrenome = "Camponêz";
$Filha1->idade = 11;
$Filha1->anoLetivo = "5º ano";
$Filha1->brincadeira = "Andar de Bicicleta";

echo "$Pai->nome $Pai->sobrenome tem $Pai->idade anos e está " . $Pai->dormir(). " mas também gosta de dizer " . $Pai->falaremPublico() . "<hr>";
echo "$Filha1->nome $Filha1->sobrenome tem $Filha1->idade anos e está ". $Filha1->estudar() . "$Filha1->anoLetivo, também está " . $Filha1->dormir() . " mas também gosta de " . $Filha1->brincadeira . " e dizer " . $Filha1->falaremPublico() . "<hr>";
?>