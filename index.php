<?php

function autoloader($class) {

  $file = "classes/" . $class . ".php";

    //check if file is OK, else throw exception
  try {
      if (file_exists($file)) {
          require_once $file;
      } else {
          throw new Exception("Requested Class file not found.");
      }
  }
  catch(Exception $e) {
      echo $e->getMessage();
  }
}

// SPL autoload register with exception throwing enabled
spl_autoload_register('autoloader', TRUE);

?>
