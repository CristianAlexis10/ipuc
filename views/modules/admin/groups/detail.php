<?php
$result = $this->readBy($_GET['data']);
$inner = $this->master->innerjoinBy(array('grupos','tipo_grupos'),array('id_tipo','id_tipo'),array('id_grupo',$_GET['data']));
?>
<div class="wrap--info">
	<ul>
		<li class="item"><p>Nombre: <?php echo $result['nombre']?></p></li>
		<li class="item"><p>Edad Minima: <?php echo $result['edad_min']?></p></li>
		<li class="item"><p>Edad Maxima: <?php echo $result['edad_max']?></p></li>
		<li class="item"><p>Tipo de Grupo: <?php echo $inner['nombre']?></p></li>
		<li class="item"><p></p></li>
	</ul>
</div>

<div class="wrap--btns">
	<ul>
		<li class="item"><a href="modificar-grupo-<?php echo $_GET['data'] ?>">Modificar</a></li>
		<li class="item"><a href="ver-grupo-<?php echo $_GET['data'] ?>">Ver Alumnos</a></li>
	</ul>
</div>