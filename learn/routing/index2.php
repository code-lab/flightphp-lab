<?php

require "vendor/autoload.php";

function hello(){
  echo "Sayem vi ki obostha?";
}


Flight::route(
  '/index2.php',
  'hello'
);

Flight::start();