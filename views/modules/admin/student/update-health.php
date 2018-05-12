<?php
    $result=$this->master->selectBy("salud_datos",array('numero_documento',$_GET['data']));
    $_SESSION['user_update']=$_GET['data'];
?>
<h1>Modificar</h1>
<form class="frmStudent" action="guardar-modificacion-salud" method="post">

    <div class="form-group">
        <label for="vacunas">Numero del Carnet de vacunas: </label>
        <input type="number" id="vacunas" name="data[]" value="<?php echo $result['numero_carnet_vacunas'] ?>" required>
    </div>
    <div class="form-group">
        <label for="peso">Peso: </label>
        <input type="number" id="peso" name="data[]" value="<?php echo $result['peso'] ?>"required>
    </div>
    <div class="form-group">
        <label for="estatura">Estatura: </label>
        <input type="number" id="estatura" name="data[]"  value="<?php echo $result['estatura'] ?>" required>
    </div>
    <div class="form-group">
        <label for="sangre">Tipo de sangre:</label>
        <input type="text" id="sangre" name="data[]"  value="<?php echo $result['tipo_sangre'] ?>" required>
    </div>
    <div class="form-group">
        <label for="alergia">Alergia a Medicamentos: </label>
        <input type="text" id="alergia" name="data[]" value="<?php echo $result['alergia_medicamento'] ?>" required>
    </div>
    <div class="form-group">
        <label for="alergia">Alimentos que no consume: </label>
        <input type="text" id="alergia" name="data[]" value="<?php echo $result['alimentos_no_comer'] ?>" required>
    </div>
    <div class="form-group">
        <label for="condicion">Condición Especial</label>
        <select id="condicion" name="data[]" required>
        	<?php if($result['condicion_especial']==1){?>
	          <option value="1" selected>Si</option>
	          <option value="2">No</option>
	 <?php }else{?>
	          <option value="1" >Si</option>
	          <option value="2" selected>No</option>
	<?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="jornada">Cual?:</label>
        <input type="text" name="data[]" value="<?php echo $result['condicion_cual'] ?>" >
    </div>

    <div class="form-group">
        <label for="cuidados">Cuidados Sugeridos:</label>
        <input type="text" id="cuidados" name="data[]" value="<?php echo $result['cuidados_sugeridos'] ?>">
    </div>

    <div class="form-group">
        <button class="btn save">Modificar</button>
    </div>
</form>
