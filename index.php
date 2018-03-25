<?php 
// Start Session
session_start();

//Configuração

require('config.php');

//Páginas
require('classes/Bootstrap.php');
require('classes/Messages.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/blog.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/blog.php');
require('models/user.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}