


<?php


include_once '../config/config.php';  //initializing config
include_once '../config/db.php'; //joining DataBase
include_once '../library/mainFunctions.php'; // including main functions


//ini_set('display_errors', TRUE);
//define which controller will be using
$controllerName = isset($_GET['controller'])? ucfirst($_GET['controller']) : 'Index';
//define which function will be using

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName , $actionName);


 ?>
