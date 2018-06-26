<?php

require_once 'vendor/autoload.php';
Flight::route('/index8.php/@name/@id', function($name, $id){
  echo "Hello , $name, ($id)";
});
Flight::start();