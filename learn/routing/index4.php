<?php

require 'vendor/autoload.php';

class Greeting {

      public function __construct($name){
      	     $this->name = $name;
      }
      
      public function hello(){
      	     echo "Hello {$this->name}";
      }
}

$greeting = new Greeting("Alamin");
Flight::route('/index4.php', array($greeting, 'hello'));
Flight::start();