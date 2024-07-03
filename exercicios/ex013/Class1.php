<?php 
    
    namespace Sessao1;
    use Sessao2\Class2;
    class Class1{

        public function __construct(){
            new Class2();
            echo 'Classe 1 foi instanciada!';
        }
    }

?>