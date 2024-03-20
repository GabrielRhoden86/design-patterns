<?php 
declare(strict_types=1);

            #Essa classe poderia se chamar conection por exemplo
final class Singleton{

                 #(?) indica que o tipo da variável é nullable, ou seja, pode receber um valor 
    private static ?PDO $instance;

    private function __construct(){

    }

    private function __clone(){

    }

    public function __wakeup()
    {
        
    }

    public static function getInstance():PDO{
        if(!isset(self::$instance)){
       self::$instance = new PDO("mysql:host=localhost;port=3307;dbname=fila-laravel","root", "");
    }
    return self::$instance;
  }
  
}

