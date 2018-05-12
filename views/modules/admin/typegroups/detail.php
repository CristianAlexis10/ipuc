<?php
$result = $this->readBy($_GET['data']);
?>
<div class="wrap--info">
	<ul>
		<li class="item"><p>Nombre: <?php echo $result['nombre']?></p></li>
		<li class="item"><p>Descripción: <?php echo $result['descripcion']?></p></li>
		
	</ul>
</div>

<div class="wrap--btns" id="btn--index">
        <button type="button" name="registrar"><a href="modificar-grupo-tipo-<?php echo $_GET['data'] ?>">Modificar</a></button>
    </div>