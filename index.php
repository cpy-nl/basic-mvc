<?php
require_once 'Routes.php';

function autoloader($class) {
  if(file_exists('./classes/' . $class . '.php')) {
    require_once './classes/' . $class . '.php';
  } else if (file_exists('./Controllers/' . $class . '.php')) {
    require_once './Controllers/' . $class . '.php';
  }
}
spl_autoload_register('autoloader');﻿

?>
