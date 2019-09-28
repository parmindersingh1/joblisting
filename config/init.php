<?php
// Start Session
session_start();

//Config File
require_once 'config.php';

//Include Helpers
require_once 'helpers/system_helper.php';

//Autoload classes
spl_autoload_register(function ($class) {
    require_once 'lib/' . $class . '.php';
});
