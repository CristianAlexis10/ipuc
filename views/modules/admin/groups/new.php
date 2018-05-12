<h1>REGISTRAR GRUPO</h1>
<form class="frmStudent" action="guardar-grupo" method="post">
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="data[]" id="name" required>
    </div>
    <div class="form-group">
        <label for="min">Edad Minima:</label>
        <input type="number" name="data[]" id="min" required>
    </div>
    <div class="form-group">
        <label for="max">Edad Maxima:</label>
        <input type="number" name="data[]" id="max" required>
    </div>
    <div class="form-group">
        <label for="tipo_grupo">Tipo De Grupo:</label>
        <select  id="tipo_grupo" name="data[]" required>
            <?php
                $result = $this->master->selectAll("tipo_grupos");
                foreach ($result as $row) {?>
                <option value="<?php echo $row['id_tipo']; ?>"><?php echo $row['nombre'];?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <button class="btn save">Registrar</button>
    </div>
</form>
