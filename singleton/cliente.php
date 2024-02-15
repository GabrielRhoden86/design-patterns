<?php
require "Singleton.php";

$instance = Singleton::getInstance();
$instance2 = Singleton::getInstance();
//$instance3 = clone $instance2; não será possivel gerar uma nova instância pois metodo clone é private


//retorna true pois o valor é da mesma instância
var_dump($instance == $instance2);
//retorna: true
var_dump($instance, $instance2);
// retorno mesma instancia #1:
// object(Singleton)#1 (0) {
// }
// object(Singleton)#1 (0) {
// }

