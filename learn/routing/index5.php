<?php

require 'vendor/autoload.php';

Flight::route('GET /index5.php', function(){
  echo "I received A get request";	   
});

Flight::route('POST /index5.php', function(){
  echo "I received a POST request";		    
});

Flight::start();