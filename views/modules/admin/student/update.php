<?php
    $result=$this->readBy($_GET['data']);
    $_SESSION['user_update']=$_GET['data'];
?>
<h1>Modificar</h1>
<form class="frmStudent" action="guardar-modificacion-alumno" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nombre Completo:</label>
        <input type="text" name="data[]" id="name" value="<?php echo $result['nombre_completo']?>" required>
    </div>
    <div class="form-group">
        <label for="tipo_doc">Tipo De Documento:</label>
        <select  id="tipo_doc" name="data[]" required>
            <?php
                $tipo_doc = $this->master->selectAll("tipo_documento");
                foreach ($tipo_doc as $row) {
                    if ($tipo_doc['id_tipo_documento']==$result['id_tipo_documento']) {?>
                        <option value="<?php echo $row['id_tipo_documento']; ?>" selected><?php echo $row['nombre'];?></option>
                    <?php }else{?>

                <option value="<?php echo $row['id_tipo_documento']; ?>"><?php echo $row['nombre'];?></option>
                    <?php }?>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="ti">Numero de Documento:</label>
        <input type="text" name="data[]" id="ti"  value="<?php echo $result['numero_documento']?>" required>
    </div>
    <div class="form-group">
        <label for="naci">Lugar de nacimiento:</label>
        <input type="text" name="data[]" id="naci" value="<?php echo $result['lugar_nacimiento']?>" required>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" name="data[]" id="fecha" value="<?php echo $result['fecha_nacimiento']?>" required>
    </div>
    <div class="form-group">
        <label for="genero">Genero:</label>
        <select  id="genero" name="data[]" required>
            <?php 
                if ($result['genero']=="masculino") {?>
                    <option value="masculino" selected>Masculino</option>
                    <option value="femenino" >Femenino</option>
                <?php }else{?>
                    <option value="femenino" selected>Femenino</option>
                    <option value="masculino" >Masculino</option>
                <?php }?>
        </select>
    </div>
    <div class="form-group">
        <label for="dir">Direccion de residencia:</label>
        <input type="text" name="data[]" id="dir" value="<?php echo $result['direccion']?>" required>
    </div>
    <div class="form-group">
        <label for="residencia">Numero Telefonico:</label>
        <input type="text" name="data[]" id="residencia" value="<?php echo $result['telefono']?>" required>
    </div><!-- 
    <div class="form-group">
        <label for="foto:">Foto:</label>
        <input type="file" name="file" id="foto" >
    </div> -->
    <div class="form-group">
        <button class="btn save">Modificar</button>
    </div>
</form>
