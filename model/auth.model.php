<?php
class AuthModel{
  private $pdo;
  function __CONSTRUCT(){
    // intentar conectar a la base de datos
    try {
      $this->pdo=ConexionDB::openDB();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
  // consultar por cedula
  function  readByCC($data){
    try {
        $sql="SELECT  * FROM usuario WHERE usu_cedula=?";
        $query=$this->pdo->prepare($sql);
        $query->execute(array($data));
        $result = $query->fetch(PDO::FETCH_BOTH);
    } catch (Exception $e) {
        $result = $e->getMessage();
    }
    return $result;
  }
  // consultar  la contraseña real
  function validatePass($data){
    try {
      $sql = "SELECT * FROM acceso WHERE usu_codigo = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data));
      $result = $query->fetch(PDO::FETCH_BOTH);
    } catch (Exception $e) {
      $result= $e->getMessage();
    }
    return $result;
  }
}
?>
