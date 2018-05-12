    <div class="wrap--btns" id="btn--index">
        <button type="button" name="registrar"><a href="registar-alumno">Registrar Alumno</a></button>
    </div>
    <?php
    	if (isset($_SESSION['message'])) {
    		echo $_SESSION['message'];
    		unset($_SESSION['message']);
    	}
    	if (isset($_SESSION['message_error'])) {
    		echo $_SESSION['message_error'];
    		unset($_SESSION['message_error']);
    	}if (isset($_SESSION['group_insert'])) {?>
    		<a href="ver-grupo-<?php echo $_SESSION['group_insert']?>">Ver Grupo Asignado</a>
    	<?php
    		unset($_SESSION['group_insert']);
    	}
    ?>
    <div class="wrap--table">
	    <table id="dataGrid">
	            <thead>
	                	<tr>
	                    <th>Nombre</th>
	                  	<th>Numero de Documento</th>
	                    <th>Dirección</th>
	                    <th>Telefono</th>
	                    <th>Ver mas</th>
	                	</tr>
	           </thead>
	            <tbody>
	            	<?php
	            	$result = $this->readAll();
	            	foreach ($result as $row) {?>
	            		  <tr>
			                       <td><?php echo $row['nombre_completo']?></td>
			                      <td><?php echo $row['numero_documento']?></td>
			                      <td><?php echo $row['direccion']?></td>
					<td><?php echo $row['telefono']?></td>
					<td>
           
            <a href="ver-detalles-<?php echo $row['numero_documento']?>">
              <i class="fa fa-external-link" aria-hidden="true"></i></a>
              <a href="eliminar-alumno-<?php echo $row['numero_documento']?>">
                <i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
	                  		</tr>
	            	<?php } ?>

	            </tbody>
	      </table>
    </div>
