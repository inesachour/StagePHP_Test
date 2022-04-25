<?php 
class DBConnection{
  private static $dbname = "teststage";
  private static $user = "root";
  private static $pwd = "ines";
  private static $host = "localhost";
  private static $cnx = null;

  private function __construct(){
    try{
      self::$cnx = new PDO(
        "mysql:host=".self::$host.
        ";dbname=".self::$dbname, 
        self::$user, 
        self::$pwd
      );
      
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

  public static function getInstance(){
    if(!self::$cnx){
      new DBConnection();
      return (self::$cnx);
    }
    return self::$cnx;
  }
}
?>