<?php
$inner = $this->master->innerJoinAllBy3(array('grupos','alumnosxgrupo','alumnos'),array('id_grupo','id_grupo','numero_documento'),array('grupos.id_grupo',$_GET['data']));

?>
    <div class="wrap--table">
	    <table id="dataGrid">
	            <thead>
	                	<tr>
	                    <th>Nombre Del Grupo</th>
	                  	<th>Nombre Alumno</th>
	                  	<th>Documento</th>
	                	</tr>
	           </thead>
	            <tbody>
	            	<?php
	            	$result = $this->master->selectAllBy("alumnosxgrupo",array('id_grupo',$_GET['data']));
	            	foreach ($inner as $row) {?>
	            		  <tr>
			                       <td><?php echo $row['nombre']?></td>
			                      <td><?php echo $row['nombre_completo']?></td>
			                      <td><?php echo $row['numero_documento']?></td>
	                  		</tr>
	            	<?php } ?>

	            </tbody>
	      </table>
    </div>
