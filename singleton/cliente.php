<?php
require "Singleton.php";

$instance = Singleton::getInstance();
$instance2 = Singleton::getInstance();
//$instance3 = clone $instance2; não será possivel gerar uma nova instância pois metodo clone é private

//retorna true pois o valor é da mesma instância
var_dump($instance == $instance2);
//retorna: true
var_dump($instance, $instance2);
// Retorno mesma instancia #1:
// object(PDO)#1 
// object(PDO)#1

// Obter a instância do PDO
$instance = Singleton::getInstance();

// Preparar a consulta SQL
$query = 'SELECT * FROM `profissionais`';

// Preparar e executar a consulta
$statement = $instance->prepare($query);
$statement->execute();

// Obter e exibir os resultados
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    // Processar os dados de cada linha (por exemplo, exibir os dados)
    echo "ID: {$row['Num. Registro']} - Nome: {$row['Nome']} - Email: {$row['E-Mail']} \n";
}
