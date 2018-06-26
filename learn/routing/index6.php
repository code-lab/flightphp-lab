<?php

require_once 'vendor/autoload.php';

function hello(){
  echo "Hello there";	 
}

Flight::route('GET|POST /index6.php', 'hello');
Flight::start();