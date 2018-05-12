<?php

public static $validRoutes = array();

class Route {
  public static function set($route, $function) {
    self::$validRoutes[] = $route;
    if($_GET['url'] == $route) {
      $function->__invoke();
    }
  }
}

 ?>
