<?php

require_once 'vendor/autoload.php';

Flight::route('/index7.php/[0-9]+', function (){echo "great!";});
Flight::start();