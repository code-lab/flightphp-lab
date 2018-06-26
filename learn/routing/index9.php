<?php

require_once 'vendor/autoload.php';
Flight::route('/index8.php/@name/@id', function($name, $id){
  echo "Hello , $name, ($id)";
});
Flight::route('/index9.php(/@year(/@month(/@day)))', function($year, $month, $day){
    echo $year . "=>" . $month . "=>" . $day;
    if (isset($year)) echo $year;
    if (isset($month)) echo $month;
    if (isset($day)) echo $day;
    // This will match the following URLS:
    // /blog/2012/12/10
    // /blog/2012/12
    // /blog/2012
    // /blog
});
Flight::start();