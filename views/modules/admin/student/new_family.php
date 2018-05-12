<h1>FORMULARIO DE INSCRIPCION</h1>
<form class="frmStudent" action="guardar-familia" method="post">

    <div class="form-group">
        <label for="padre">Nombre del padre:</label>
        <input type="text" name="data[]" id="padre" required>
    </div>
    <div class="form-group">
        <label for="telpa">Telefono del Padre:</label>
        <input type="number" name="data[]" id="telpa" required>
    </div>
    <div class="form-group">
        <label for="madre">Nombre de la Madre:</label>
        <input type="text" name="data[]" id="madre" required>
    </div>
    <div class="form-group">
        <label for="telma">Telefono de la Madre:</label>
        <input type="number" name="data[]" id="telma" required>
    </div>
    <div class="form-group">
        <label for="hijo">¿Hijo unico?</label>
        <select name="data[]" id="hijo" required >
          <option value="1">Si</option>
          <option value="2">No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="numeroher">Numero de hermanos:</label>
        <input type="number" name="data[]" id="numeroher" required>
    </div>
    <div class="form-group">
        <label for="lugarentre">Lugar que ocupa entre ellos:</label>
        <input type="number" name="data[]" id="lugarentre">
    </div>
    <div class="form-group">
        <button class="btn save">Siguiente</button>
    </div>
</form>
