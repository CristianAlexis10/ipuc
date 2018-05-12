<h1>FORMULARIO DE INSCRIPCION</h1>
<form class="frmStudent" action="guardar-alumno" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nombre Completo:</label>
        <input type="text" name="data[]" id="name" required>
    </div>
    <div class="form-group">
        <label for="tipo_doc">Tipo De Documento:</label>
        <select  id="tipo_doc" name="data[]" required>
            <?php
                $result = $this->master->selectAll("tipo_documento");
                foreach ($result as $row) {?>
                <option value="<?php echo $row['id_tipo_documento']; ?>"><?php echo $row['nombre'];?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="ti">Numero de Documento:</label>
        <input type="text" name="data[]" id="ti" required>
    </div>
    <div class="form-group">
        <label for="naci">Lugar de nacimiento:</label>
        <input type="text" name="data[]" id="naci" required>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" name="data[]" id="fecha" required>
    </div>
    <div class="form-group">
        <label for="genero">Genero:</label>
        <select  id="genero" name="data[]" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
    </div>
    <div class="form-group">
        <label for="dir">Direccion de residencia:</label>
        <input type="text" name="data[]" id="dir" required>
    </div>
    <div class="form-group">
        <label for="residencia">Numero Telefonico:</label>
        <input type="text" name="data[]" id="residencia" required>
    </div>
    <div class="form-group">
        <label for="foto:">Foto:</label>
        <input type="file" name="file" id="foto" >
    </div>
    <div class="form-group">
        <button class="btn save">Siguiente</button>
    </div>
</form>
