<?php
// requerir el modelo de usuario
require_once "model/user.model.php";
Class UserController{
  private $user;
  function __CONSTRUCT(){
    // instancear el modelo
    $this->user=new UserModel();
  }
  // perfil
    function profile(){
       // validar si existe un  usuario y si  tiene el rol 1 (admin)
      if (isset($_SESSION['user']['rol']) && $_SESSION['user']['rol']==1) {
        require_once "views/include/admin/scope.header.php";
        require_once "views/modules/admin/profile.php";
        require_once "views/include/admin/scope.footer.php";
        // validar si existe un  usuario y si  tiene el rol 2 (estudiante)
      }elseif(isset($_SESSION['user']['rol']) && $_SESSION['user']['rol']==2 ){
        require_once "views/include/student/scope.header.php";
        require_once "views/modules/student/profile.php";
        require_once "views/include/student/scope.footer.php";
        // validar si existe un  usuario y si  tiene el rol 3 (docente)
      }elseif(isset($_SESSION['user']['rol']) && $_SESSION['user']['rol']==3 ){
        require_once "views/include/teacher/scope.header.php";
        require_once "views/modules/teacher/profile.php";
        require_once "views/include/teacher/scope.footer.php";
      }else{
        //si no existe un usuario  lo redireccionara al inicio
        unset($_SESSION['user']);
        header("Location:inicio");
      }
    }

}
?>
