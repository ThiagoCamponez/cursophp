<?php 
    include('exemplo.class.php'); // Importando a classe cliente    

    $cliente1 = new cliente(); //Instanciando o objeto cliente!
    $cliente1->cpf = "123.456.789-00"; //Atribuindo um valor no atributo cpf
    $cliente1->nome = "João da Silva"; //Atribuindo um valor no atributo nome
    echo "O cliente: {$cliente1->nome}, cpf {$cliente1->cpf} deseja marcar uma consulta...<hr>";
    $cliente1->marcar();
    echo "<hr>";
    $cliente1->pagar();
    

?>