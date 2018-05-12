<?php
    $result=$this->master->selectBy("datos_familia",array('numero_documento',$_GET['data']));
    $_SESSION['user_update']=$_GET['data'];
?>
<h1>Modificar</h1>
<form class="frmStudent" action="guardar-modificacion-familia" method="post">

    <div class="form-group">
        <label for="padre">Nombre del padre:</label>
        <input type="text" name="data[]" id="padre" value="<?php echo $result['nombre_padre']?>" required>
    </div>
    <div class="form-group">
        <label for="telpa">Telefono del Padre:</label>
        <input type="number" name="data[]" id="telpa"  value="<?php echo $result['telefono_padre']?>"  required>
    </div>
    <div class="form-group">
        <label for="madre">Nombre de la Madre:</label>
        <input type="text" name="data[]" id="madre" value="<?php echo $result['nombre_madre']?>" required>
    </div>
    <div class="form-group">
        <label for="telma">Telefono de la Madre:</label>
        <input type="number" name="data[]" id="telma" value="<?php echo $result['telefono_madre']?>"  required>
    </div>
    <div class="form-group">
        <label for="hijo">¿Hijo unico?</label>
        <select name="data[]" id="hijo" required >
            <?php  if($result['hijo_unico']==1){?>
              <option value="1" selected>Si</option>
              <option value="2">No</option>
            <?php }else{?>
              <option value="1" >Si</option>
              <option value="2" selected >No</option>
              <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="numeroher">Numero de hermanos:</label>
        <input type="number" name="data[]" id="numeroher" value="<?php echo $result['numero_hermanos']?>" required>
    </div>
    <div class="form-group">
        <label for="lugarentre">Lugar que ocupa entre ellos:</label>
        <input type="number" name="data[]" id="lugarentre" value="<?php echo $result['lugar_entre_ellos']?>" required>
    </div>
    <div class="form-group">
        <button class="btn save">Modificar</button>
    </div>
</form>

