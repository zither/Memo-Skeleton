<?php

error_reporting(E_ALL);

define("ROOT", dirname(__DIR__));
define("APP", ROOT . "/app");
define("CONFIG_PATH", ROOT . "/config/development.ini");

require ROOT . "/vendor/autoload.php";
