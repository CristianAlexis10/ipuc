<h1>FORMULARIO DE INSCRIPCION</h1>
<form class="frmStudent" action="guardar-estudios" method="post">

    <div class="form-group">
        <label for="institucion">Nombre de la institucion: </label>
        <input type="text" id="institucion" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="nivel">Nivel de escolarizacion:</label>
        <select id="nivel" name="data[]" required>
          <option value="primaria">Primaria</option>
          <option value="secundaria">Secundaria</option>
        </select>
    </div>
    <div class="form-group">
        <label for="grado">Grado que cursa:</label>
        <select id="grado" name="data[]" required>
          <option value="p">Prescolar</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jornada">Jornada:</label>
        <select id="jornada" name="data[]" required>
          <option value="mañana">Mañana</option>
          <option value="tarde">Tarde</option>
          <option value="noche">Noche</option>
        </select>
    </div>

    <div class="form-group">
        <label for="otros">Otros estudios:</label>
        <select id="otros" name="data[]" required>
          <option value="si">Si</option>
          <option value="no">No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="queestudia">Que estudia:</label>
        <input type="text" id="queestudia" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="deporte">Deporte favorito:</label>
        <input type="text" id="deporte" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="libre">Aficcion de los tiempos libre:</label>
        <textarea name="data[]" rows="8" cols="80" id="libre" required></textarea>
    </div>
    <div class="form-group">
        <label for="perfil">Perfil en Facebook</label>
        <input type="text" id="perfil" name="data[]" required>
    </div>
    <div class="form-group">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="data[]"  required>
    </div>
    <div class="form-group">
        <button class="btn save">Siguiente</button>
    </div>
</form>
