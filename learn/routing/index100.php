<?php

require 'vendor/autoload.php';

Flight::route('/', function(){
  echo "Hello There";
});

Flight::route('/index.php', function(){
  echo "Hello There";
});



Flight::start();