<?php
    $result=$this->master->selectBy("estudios_datos",array('numero_documento',$_GET['data']));
    $_SESSION['user_update']=$_GET['data'];
?>
<h1>Modificar</h1>
<form class="frmStudent" action="guardar-modificacion-estudios" method="post">

    <div class="form-group">
        <label for="institucion">Nombre de la institucion: </label>
        <input type="text" id="institucion" name="data[]" value="<?php echo $result['nombre_institucion'] ?>" required>
    </div>
    <div class="form-group">
        <label for="nivel">Nivel de escolarizacion:</label>
        <select id="nivel" name="data[]" required>
        	<?php if ($result['nivel']=="primaria") {?>
	          <option value="primaria" selected>Primaria</option>
	          <option value="secundaria">Secundaria</option>
        	<?php }else{ ?>
        		 <option value="primaria">Primaria</option>
	          <option value="secundaria" selected>Secundaria</option>
        	<?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="grado">Grado que cursa:</label>
        <input type="text" name="data[]" id="grado" value="<?php echo $result['grado'] ?>">
    </div>
    <div class="form-group">
        <label for="jornada">Jornada:</label>
       <input type="text" name="data[]" id="jornada" value="<?php echo $result['jornada'] ?>">
    </div>

    <div class="form-group">
        <label for="otros">Otros estudios:</label>
        <select id="otros" name="data[]" required>
         <?php if ($result['otros_estudios']=="si") {?>
	          <option value="si" selected>Si</option>
	          <option value="no">No</option>
        	<?php }else{ ?>
        		<option value="si" >Si</option>
	          <option value="no" selected>No</option>
        	<?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="queestudia">Que estudia:</label>
        <input type="text" id="queestudia" name="data[]" value="<?php echo $result['que_estudia'] ?>" required>
    </div>
    <div class="form-group">
        <label for="deporte">Deporte favorito:</label>
        <input type="text" id="deporte" name="data[]"  value="<?php echo $result['deporte_favorito'] ?>" required>
    </div>
    <div class="form-group">
        <label for="libre">Aficcion de los tiempos libre:</label>
        <textarea name="data[]" rows="8" cols="80" id="libre" required><?php echo $result['aficion_tiempo_libre'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="perfil">Perfil en Facebook</label>
        <input type="text" id="perfil" name="data[]" value="<?php echo $result['perfil_facebook'] ?>" required>
    </div>
    <div class="form-group">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="data[]"  value="<?php echo $result['correo'] ?>" required>
    </div>
    <div class="form-group">
        <button class="btn save">Modificar</button>
    </div>
</form>
