<?php
class UserModel{
  private $pdo;
  function __CONSTRUCT(){
    // intentar conectar a la base de datos
    try {
      $this->pdo =  ConexionDB::openDB();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
  // consultar por id de usuario
  function readByID($data){
    try {
      $sql="SELECT * FROM usuario WHERE usu_codigo = ? ";
      $query=$this->pdo->prepare($sql);
      $query->execute(array($data));
      $result = $query->fetch(PDO::FETCH_BOTH);
    } catch (Exception $e) {
      $result = $e->getMessage();
    }
    return $result;
  }
}
?>
