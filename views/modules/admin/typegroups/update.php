
<?php
    $result = $this->readBy($_GET['data']);
    $_SESSION['update_type_group']=$_GET['data'];
?>
<h1>MODIFICAR TIPO GRUPO</h1>
<form class="frmStudent" action="guardar-modi-grupo-tipo" method="post">
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="data[]" id="name" value="<?php echo $result['nombre'] ?>" required>
    </div>
    <div class="form-group">
        <label for="des">Descripcón:</label>
        <textarea name="data[]" id="des"><?php echo $result['descripcion'] ?></textarea>
    </div> 
    <div class="form-group">
        <button class="btn save">Modificar</button>
    </div>
</form>
