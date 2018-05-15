<?php

class Route {
  public static $validRoutes = array();
  public static function set($route, $function) {
    self::$validRoutes[] = $route;
    // if($_GET['url'] == $route) {
    if(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL) == $route) {
      $function->__invoke();
    }
  }
}

 ?>
