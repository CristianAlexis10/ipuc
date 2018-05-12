<?php
// requerir  el modelo de autentificacion
require_once "model/auth.model.php";
class AuthController{
  private $auth;
  function __CONSTRUCT(){
    // instancear el modelo
    $this->auth= new AuthModel();
  }
  // validar usuario
  function validateUserCC(){
    // consultar  los datos del usuario por cedula
    $result = $this->auth->readByCC($_POST['data']);
    if ($result!=array()) {
      // si existe el usuario crea variables de session
      $_SESSION['auth_user']=$result['usu_codigo'];
      $_SESSION['usu_cedula']=$_POST['data'];
      echo json_encode(true);
    }else{
      // si no exite elimina variables de session
      unset($_SESSION['auth_user']);
      echo json_encode(false);
    }
  }
  // validar contraseña
  function validatePass(){
    // consultar la contraseña real
    $contra = $this->auth->validatePass($_SESSION['auth_user']);
    // traer todos los datos del usuario
    $result = $this->auth->readByCC($_SESSION['usu_cedula']);
    // validar si la contraseña ingresada y la real coinciden
    if (password_verify($_POST['data'],$contra['acc_contra'])) {
      // si existe crear todas las variables de session
      $_SESSION['user']['id']=$result['usu_codigo'];
      $_SESSION['user']['cc']=$result['usu_cedula'];
      $_SESSION['user']['name']=$result['usu_primer_nombre'];
      $_SESSION['user']['last_name']=$result['usu_primer_apellido'];
      $_SESSION['user']['rol']=$result['rol_id'];
      unset($_SESSION['auth_user']);
      // saber que rol tiene el usuario
      if ($result['rol_id']==1) {
        $rol = 1;
      }else if ($result['rol_id']==2) {
        $rol = 2;
      }else if($result['rol_id']==3) {
        $rol = 3;
      }
      // devolver el rol 
      echo json_encode($rol);
    }else{
      // si la contraseña es incorrecta
      echo json_encode("Contraseña incorrecta.");
    }
  }
}
?>
