<?php
ini_set('display_errors',0);
session_start();
//echo 'HTTP_HOST:'.$_SERVER['HTTP_HOST'].'<br/>';
//echo 'REQUEST_URI:'.$_SERVER['REQUEST_URI'].'<br/>';
require_once 'dbFactory.php';
/*Get the Request URL and retrieve the Controller and Action*/
$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$urlParams = explode('/', $requestUrl);
//print_r($urlParams);

/*Call the Model*/
$modelName = strtolower($urlParams[4]).'Model';
require_once 'Model/'.$modelName.'.php';

/*Call the Controller*/
$controllerName = strtolower($urlParams[4]).'Controller';
$actionString=  explode("?", $urlParams[5]);
$actionName = ucfirst($actionString[0]).'Action';
/*Assign the controller and action to GLOBAL*/
$GLOBALS['ScriptController']=$urlParams[4];
$GLOBALS['Scriptaction']=$actionString[0];

require_once 'Controller/'.$controllerName.'.php';

/*Call the Action Function inside Controller*/
$controller = new $controllerName;
$controller->$actionName();



/*Include the View*/
include 'View/'.$urlParams[4].'/'.$actionString[0].'.php';


?>