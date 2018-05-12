<?php
$result = $this->readBy($_GET['data']);
$_SESSION['update_group']=$_GET['data'];
$inner = $this->master->innerjoinBy(array('grupos','tipo_grupos'),array('id_tipo','id_tipo'),array('id_grupo',$_GET['data']));
?>
<h1>MODIFICAR GRUPO</h1>
<form class="frmStudent" action="guardar-modificacion-grupo" method="post">
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="data[]" id="name" value="<?php echo $result['nombre']?>" required>
    </div>
    <div class="form-group">
        <label for="min">Edad Minima:</label>
        <input type="number" name="data[]" id="min" value="<?php echo $result['edad_min']?>" required>
    </div>
    <div class="form-group">
        <label for="max">Edad Maxima:</label>
        <input type="number" name="data[]" id="max" value="<?php echo $result['edad_max']?>" required>
    </div>
    <div class="form-group">
        <label for="tipo_grupo">Tipo De Grupo:</label>
        <select  id="tipo_grupo" name="data[]" required>
            <?php
                $tipos = $this->master->selectAll("tipo_grupos");
                foreach ($tipos as $row) {
                    if ($result['id_tipo']==$row['id_tipo']) {?>
                      <option value="<?php echo $row['id_tipo']; ?>" selected ><?php echo $row['nombre'];?></option>
                      <?php
                    }else{
                    ?>
                    <option value="<?php echo $row['id_tipo']; ?>"><?php echo $row['nombre'];?></option>
                <?php
                  }  }
                ?>
        </select>
    </div>
    <div class="form-group">
        <button class="btn save">Modificar</button>
    </div>
</form>
