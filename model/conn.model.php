<?php
class ConexionDB {
  private static $host = "localhost";
  private static $dbname =  "iglesia";
  private static $dbuser  = "root";
  private static $dbpass = "";
  private static $dbstatus = null;
  public static function openDB(){
      try {
          self::$dbstatus = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname,self::$dbuser,self::$dbpass);
          self::$dbstatus->exec("SET CHARACTER utf8");
          return self::$dbstatus;
      } catch (Exception $e) {
        die($e->getMessage());
      }
  }
  public static function closeDB(){
    self::$dbstatu = null;
  }
}
?>
