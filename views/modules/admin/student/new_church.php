<h1>FORMULARIO DE INSCRIPCION</h1>
<form class="frmStudent" action="guardar-iglesia" method="post">
    <div class="form-group">
        <label for="madre">Madre Miembre del IPUC?:</label>
        <select id="madre" name="data[1]" required>
          <option value="1">Si</option>
          <option value="0">No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="padre">Padre Miembre del IPUC?:</label>
        <select id="padre" name="data[]" required>
          <option value="1">Si</option>
          <option value="0">No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="confiar">Cofiar a su hijo al cuidado en esta Aréa?:</label>
        <select id="confiar" name="data[]" required>
          <option value="1">Si</option>
          <option value="0">No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="madre">Asistirá cuando se convoque por causa de su hijo?:</label>
        <select id="madre" name="data[]" required>
          <option value="1">Si</option>
          <option value="0">No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="madre">Asistirá cuando se convoque por causa de su hijo?:</label>
        <select id="madre" name="data[]" required>
          <option value="1">Si</option>
          <option value="0">No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="servicio">En relación a Dios, Que servio le agrada?:</label>
        <select id="servicio" name="data[]" required>
          <option value="cantar">Cantar</option>
          <option value="predicar">Predicar</option>
          <option value="dramas">Participar en Dramas</option>
          <option value="dibujar">Dibujar</option>
        </select>
    </div>
    <div class="form-group">
        <label for="obs">Observaciones: </label>
        <textarea name="data[]" rows="8" cols="80" id="obs" required></textarea>
    </div>


    <div class="form-group">
        <button class="btn save">Siguiente</button>
    </div>
</form>
