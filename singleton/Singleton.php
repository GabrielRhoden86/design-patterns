<?php 
declare(strict_types=1);

            #Essa classe poderia se chamar conection por exemplo
final class Singleton{

                 #(?) indica que o tipo da variável é nullable, ou seja, pode receber um valor 
    private static ?Singleton $instance;

    private function __construct(){

    }

    private function __clone(){

    }

    public function __wakeup()
    {
        
    }

    public static function getInstance():Singleton{

        if(!isset(self::$instance)){
       self::$instance = new Singleton();
    }
    return self::$instance;
  }
  
}

