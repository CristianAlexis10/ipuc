<?php
Class ViewsController{
  // pagina de inicio
    function main(){
        require_once "views/modules/login/index.php";
    }
    // administrador
    function admin(){
      // validar si existe un  usuario y si  tiene el rol 1 (admin)
      if (isset($_SESSION['user']['rol']) && $_SESSION['user']['rol']==1) {
        require_once "views/include/admin/scope.header.php";
        require_once "views/include/admin/scope.menu.php";
        require_once "views/modules/admin/dashboard.php";
        require_once "views/include/admin/scope.footer.php";
      }else{
        //si no existe un usuario  lo redireccionara al inicio
        unset($_SESSION['user']);
        header("Location:inicio");
      }
    }

}
?>
