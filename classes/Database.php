<?php
class Database {

  public static $host = "";
  public static $db - "";
  public static $username = "";
  public static $password = "";

  private static function connect() {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=utf8", self::$username, self::$password);
    return $pdo;
  }
  public static function query($query,$params = arrary()) {
    $statement = self::connect()->prepare($query);
    $statement->execute($params);
    if(explode(' ',$query[0] == 'SELECT')) {
      $data = $statement->fetchAll();
      return $data;
    }
  }
}
