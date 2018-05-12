    <div class="wrap--btns" id="btn--index">
        <button type="button" name="registrar"><a href="registar-grupo">Registrar Grupo</a></button><button type="button" name="registrar"><a href="tipos-grupos">Tipos de Grupos</a></button>
    </div>
    <?php
    	if (isset($_SESSION['message'])) {
    		echo $_SESSION['message'];
    		unset($_SESSION['message']);
    	}
    	if (isset($_SESSION['message_error'])) {
    		echo $_SESSION['message_error'];
    		unset($_SESSION['message_error']);
    	}
    ?>
    <div class="wrap--table">
	    <table id="dataGrid">
	            <thead>
	                	<tr>
	                    <th>Nombre</th>
	                  	<th>Edad Min</th>
	                    <th>Edad Max</th>
	                    <th>Ver mas</th>
	                	</tr>
	           </thead>
	            <tbody>
	            	<?php
	            	$result = $this->readAll();
	            	foreach ($result as $row) {?>
	            		  <tr>
			                       <td><?php echo $row['nombre']?></td>
			                      <td><?php echo $row['edad_min']?></td>
			                      <td><?php echo $row['edad_max']?></td>
					<td>
           
            <a href="ver-detalles-grupo-<?php echo $row['id_grupo']?>">
              <i class="fa fa-external-link" aria-hidden="true"></i></a>
              <a href="eliminar-grupo-<?php echo $row['id_grupo']?>">
                <i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
	                  		</tr>
	            	<?php } ?>

	            </tbody>
	      </table>
    </div>
