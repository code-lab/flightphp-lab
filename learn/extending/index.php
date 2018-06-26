<?php

require_once 'vendor/autoload.php';

// Map your method
Flight::map('hello', function($name){
    echo "hello $name!";
});

// Call your custom method
Flight::hello('Bob');

class User {
      public function __construct(){
        echo "Hello";
      }
}

// Register your class
Flight::register('user', 'User');

// Get an instance of your class
$user = Flight::user();