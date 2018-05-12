<h1>FORMULARIO DE INSCRIPCION</h1>
<form class="frmStudent" action="guardar-salud" method="post">

    <div class="form-group">
        <label for="vacunas">Numero del Carnet de vacunas: </label>
        <input type="number" id="vacunas" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="peso">Peso: </label>
        <input type="number" id="peso" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="estatura">Estatura: </label>
        <input type="number" id="estatura" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="sangre">Tipo de sangre:</label>
        <select id="sangre" name="data[]" required>
          <option value="Op">O+</option>
          <option value="On">O-</option>
          <option value="On">A-</option>
          <option value="ab">AB</option>
        </select>
    </div>
    <div class="form-group">
        <label for="alergia">Alergia a Medicamentos: </label>
        <input type="text" id="alergia" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="alergia">Alimentos que no consume: </label>
        <input type="text" id="alergia" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="condicion">Condición Especial</label>
        <select id="condicion" name="data[]" required>
          <option value="1">Si</option>
          <option value="2">No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jornada">Cual?:</label>
        <input type="text" name="data[]" >
    </div>

    <div class="form-group">
        <label for="cuidados">Cuidados Sugeridos:</label>
        <input type="text" id="cuidados" name="data[]">
    </div>

    <div class="form-group">
        <button class="btn save">Siguiente</button>
    </div>
</form>
