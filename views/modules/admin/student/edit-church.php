<?php
    $result=$this->master->selectBy("iglesia_datos",array('numero_documento',$_GET['data']));
    $_SESSION['user_update']=$_GET['data'];
?>
<h1>Modificar</h1>
<form class="frmStudent" action="guardar-modificacion-iglesia" method="post">
    <div class="form-group">
        <label for="madre">Madre Miembre del IPUC?:</label>
        <select id="madre" name="data[]" required>
        	<?php if($result['madre_miembro_ipuc']==1){?>
	          <option value="1" selected>Si</option>
	          <option value="0">No</option>
	 <?php }else{?>
	          <option value="1" >Si</option>
	          <option value="0" selected>No</option>
	<?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="padre">Padre Miembre del IPUC?:</label>
        <select id="padre" name="data[]" required>
         <?php if($result['padre_miembro_ipuc']==1){?>
	          <option value="1" selected>Si</option>
	          <option value="0">No</option>
	 <?php }else{?>
	          <option value="1" >Si</option>
	          <option value="0" selected>No</option>
	<?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="confiar">Cofiar a su hijo al cuidado en esta Aréa?:</label>
        <select id="confiar" name="data[]" required>
          <?php if($result['confiar_hijo_voluntad']==1){?>
	          <option value="1" selected>Si</option>
	          <option value="0">No</option>
	 <?php }else{?>
	          <option value="1" >Si</option>
	          <option value="0" selected>No</option>
	<?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="madre">Asistirá cuando se convoque por causa de su hijo?:</label>
        <select id="madre" name="data[]" required>
          <?php if($result['asistir_convoque_hijo']==1){?>
	          <option value="1" selected>Si</option>
	          <option value="0">No</option>
	 <?php }else{?>
	          <option value="1" >Si</option>
	          <option value="0" selected>No</option>
	<?php } ?>
        </select>
    </div><!-- 
    <div class="form-group">
        <label for="madre">Asistirá cuando se convoque por causa de su hijo?:</label>
        <select id="madre" name="data[]" required>
          <option value="1">Si</option>
          <option value="0">No</option>
        </select>
    </div> -->
    <div class="form-group">
        <label for="servicio">En relación a Dios, Que servio le agrada?:</label>
        <input type="text" name="data[]" id="servicio" value="<?php echo $result['servicio_agrada']?>">
    </div>
    <div class="form-group">
        <label for="obs">Observaciones: </label>
        <textarea name="data[]" rows="8" cols="80" id="obs" required><?php echo $result['observaciones']?></textarea>
    </div>


    <div class="form-group">
        <button class="btn save">Siguiente</button>
    </div>
</form>
