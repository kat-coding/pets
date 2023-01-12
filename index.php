<?php
//Turn on error recording,will turn on for every page because every page goes through controller
ini_set('display_errors', 1);
error_reporting(E_ALL);
//require autoload file, lists all classes needed
//this was created by composer
require_once("vendor/autoload.php");

//Create an instance of the base class of fat-free
// :: invoke static method
$f3 = Base::instance();
//instantiating base class and assigning to $f3 variable
//define default route "home page"
// -> invoke instance method
//this won't allow clients to directly access the php files, gives 404 error
$f3->route('GET /', function (){
    echo '<h1>Pet Home</h1>';

});
$f3->run();
