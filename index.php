<?php

session_start();

require('config.php');

require('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');

require ('controllers/home.php');
require ('controllers/users.php');
require ('controllers/addresses.php');

require ('models/home.php');
require ('models/user.php');
require ('models/address.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller) {
    $controller->executeAction();
}