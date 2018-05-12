
<div class="modules detail">
	<div class="tabs" id="tabs">
		<ul>
			<li class="item"><a href="#tabs-1">Datos del Alumno</a></li>
			<li class="item"><a href="#tabs-2">Datos de la Familia</a></li>
			<li class="item"><a href="#tabs-3">Datos de la Salud</a></li>
			<li class="item"><a href="#tabs-4">Datos de la Iglesia </a></li>
			<li class="item"><a href="#tabs-5">Datos sobre Estudios</a></li>
		</ul>

	<div id="tabs-1">
		<?php
			$result = $this->readBy($_GET['data']);
		?>
			<p class="item"><p>Nombre: </p><?php echo $result['nombre_completo']?></p>
			<p class="item"><p>Numero de  Documento: </p><?php echo $result['numero_documento']?></p>
			<p class="item"><p>Lugar De nacimiento: </p><?php echo $result['lugar_nacimiento']?></p>
			<p class="item"><p>Fecha de nacimiento: </p><?php echo $result['fecha_nacimiento']?></p>
			<p class="item"><p>Sexo: </p><?php echo $result['genero']?></p>
			<p class="item"><p>Dirección: </p><?php echo $result['direccion']?></p>
			<p class="item"><p>Telefono: </p><?php echo $result['telefono']?></p>

			<div class="wrap--btns">
				<ul>
					<li class="item"><a href="modificar-alumno-<?php echo $_GET['data'] ?>">Modificar</a></li>
				</ul>
			</div>

	</div>
	<div id="tabs-2">
		<?php
			$result = $this->master->selectBy("datos_familia",array('numero_documento',$_GET['data']));
		?>

			<p class="item"><p>Nombre Del Padre: </p><?php echo $result['nombre_padre']?></p>
			<p class="item"><p>Telefono del Padre: </p><?php echo $result['telefono_padre']?></p>
			<p class="item"><p>Nombre De la Madre: </p><?php echo $result['nombre_madre']?></p>
			<p class="item"><p>Telefono de la Madre: </p><?php echo $result['telefono_madre']?></p>
			<p class="item"><p>Hijo unico?: </p>
				<?php 
				if ($result['hijo_unico']==1) {
					echo "Si";
				}else{
					echo "No";
				}

				?>
			</p>
			<p class="item"><p>Numero de hermanos: </p><?php echo $result['numero_hermanos']?></p>
			<p class="item"><p>Lugar entre Ellos: </p><?php echo $result['lugar_entre_ellos']?></p>

			<div class="wrap--btns">
				<ul>
					<li class="item"><a href="modificar-alumno-familia-<?php echo $_GET['data'] ?>">Modificar</a></li>
				</ul>
			</div>

	</div>
	<div id="tabs-3">
		<?php
			$result = $this->master->selectBy("salud_datos",array('numero_documento',$_GET['data']));
		?>

			<a class="item"><p>Numero del carnet de vacunas: </p><?php echo $result['numero_carnet_vacunas']?></a>
			<a class="item"><p>Peso: </p><?php echo $result['peso']?></a>
			<a class="item"><p>Estatura: </p><?php echo $result['estatura']?></a>
			<a class="item"><p>Tipo de sangre: </p><?php echo $result['tipo_sangre']?></a>
			<a class="item"><p>Alergia a medicamentos: </p><?php echo $result['alergia_medicamento']?></a>
			<a class="item"><p>Alimentos que no puede consumir: </p><?php echo $result['alimentos_no_comer']?></a>
			<a class="item"><p>Condicion Especial?: </p>
				<?php 
				if ($result['condicion_especial']==1) {
					echo "Si";
				}else{
					echo "No";
				}
				?>
			
			</a>
			<a class="item"><p>cual?: </p><?php echo $result['condicion_cual']?></a>
			<a class="item"><p>Cuidados Sugeridos: </p><?php echo $result['cuidados_sugeridos']?></a>
			<div class="wrap--btns">
				<ul>
					<li class="item"><a href="modificar-alumno-salud-<?php echo $_GET['data'] ?>">Modificar</a></li>
				</ul>
			</div>

	</div>
	<div id="tabs-4">
			<?php
			$result = $this->master->selectBy("iglesia_datos",array('numero_documento',$_GET['data']));
		?>

			<a class="item"><p>Madre Miembro De IPUC: </p><?php 
				if ($result['madre_miembro_ipuc']==1) {
					echo "Si";
				}else{
					echo "No";
				}
				?></a>
			<a class="item"><p>Padre Miembro De IPUC: </p><?php 
				if ($result['padre_miembro_ipuc']==1) {
					echo "Si";
				}else{
					echo "No";
				}
				?>

			</a>
			<a class="item"><p>Hijo a voluntad: </p><?php 
				if ($result['confiar_hijo_voluntad']==1) {
					echo "Si";
				}else{
					echo "No";
				}
				?></a>
			<a class="item"><p>Asistira cuando se convoque: </p><?php 
				if ($result['asistir_convoque_hijo']==1) {
					echo "Si";
				}else{
					echo "No";
				}
				?></a>
			<a class="item"><p>Observaciones: </p><?php echo $result['observaciones']?></a>
			<a class="item"><p>Fecha Inscripción: </p><?php echo $result['fecha_inscripcion']?></a>
			
			<div class="wrap--btns">
				<ul>
					<li class="item"><a href="modificar-alumno-iglesia-<?php echo $_GET['data'] ?>">Modificar</a></li>
				</ul>
			</div>
	</div>
	<div id="tabs-5">
		<?php
			$result = $this->master->selectBy("estudios_datos",array('numero_documento',$_GET['data']));
		?>

			<a class="item"><p>Nombre De La Institución: </p><?php echo $result['nombre_institucion']?></a>
			<a class="item"><p>Nivel: </p><?php echo $result['nivel']?></a>
			<a class="item"><p>Grado: </p><?php echo $result['grado']?></a>
			<a class="item"><p>Jornada: </p><?php echo $result['jornada']?></a>
			<a class="item"><p>Otros Estudios: </p><?php echo $result['otros_estudios']?></a>
			<a class="item"><p>Que estudia: </p><?php echo $result['que_estudia']?></a>
			<a class="item"><p>Afición en su tiempo libre: </p><?php echo $result['aficion_tiempo_libre']?></a>
			<a class="item"><p>Perfil Facebook: </p><?php echo $result['perfil_facebook']?></a>
			<a class="item"><p>Correo: </p><?php echo $result['correo']?></a>
			<div class="wrap--btns">
				<ul>
					<li class="item"><a href="modificar-alumno-estudios-<?php echo $_GET['data'] ?>">Modificar</a></li>
				</ul>
			</div>
	</div>
</div>
</div>
