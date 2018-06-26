<?php

require_once "vendor/autoload.php";

Flight::map('hello', function($name){return "Hello, $name!";});
Flight::before('hello', function(&$params, &$output){$params[0] = 'Fred';});
Flight::after('hello', function(&$params, &$output){$output .= " Have a nice day!";});
echo Flight::hello('Alamin');