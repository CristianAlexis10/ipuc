<?php
	$result = $this->user->readByID($_SESSION['user']['id']);
	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
?>
<div class="modules">
	<form action="modificar-perfil" name="frmProfile" method="post">
	<div class="form-group">
	        <label for="nombre">Nombre:</label>
	        <input type="text" name="data[]" id="nombre"  value="<?php echo $result['usu_primer_nombre'] ?>" required>
   	 </div>
   	<div class="form-group">
	        <label for="naci">Fecha De Nacimiento:</label>
	        <input type="text" name="data[]" id="naci"  value="<?php echo $result['fecha_nacimiento'] ?>" required>
   	 </div>
   	 <div class="form-group">
	        <label for="dir">Dirección:</label>
	        <input type="text" name="data[]" id="dir"  value="<?php echo $result['direccion'] ?>" required>
   	 </div>
   	 <div class="form-group">
	        <label for="barrio">Barrio:</label>
	        <input type="text" name="data[]" id="barrio"  value="<?php echo $result['barrio'] ?>" required>
   	 </div>
   	 <div class="form-group">
	        <label for="telefono">Telefono:</label>
	        <input type="text" name="data[]" id="telefono"  value="<?php echo $result['telefono'] ?>" required>
   	 </div>
   	 <div class="form-group">
	        <label for="cel">Celular:</label>
	        <input type="text" name="data[]" id="cel"  value="<?php echo $result['celular'] ?>" required>
   	 </div>
   	 <div class="form-group">
	        <label for="correo">Correo:</label>
	        <input type="text" name="data[]" id="correo"  value="<?php echo $result['correo'] ?>" required>
   	 </div>
	<div class="form-group">
	        <button class="btn save">Modificar</button>
	 </div>
	</form>
</div>
