<h1>REGISTRAR TIPO GRUPO</h1>
<form class="frmStudent" action="guardar-tipo-grupo" method="post">
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="data[]" id="name" required>
    </div>
    <div class="form-group">
        <label for="des">Descripcón:</label>
        <textarea name="data[]" id="des"></textarea>
    </div> 
    <div class="form-group">
        <button class="btn save">Registrar</button>
    </div>
</form>
