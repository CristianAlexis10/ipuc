    <div class="wrap--btns" id="btn--index">
        <button type="button" name="registrar"><a href="registar-tipo-grupo">Registrar Nuevo Tipo</a></button>
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
	                    <th>Descripción</th>
	                    <th>Ver mas</th>
	                	</tr>
	           </thead>
	            <tbody>
	            	<?php
	            	$result = $this->readAll();
	            	foreach ($result as $row) {?>
	            		  <tr>
			                       <td><?php echo $row['nombre']?></td>
			                       <td><?php echo $row['descripcion']?></td>
			                      
					<td>
           
            <a href="ver-detalles-tipo-grupo-<?php echo $row['id_tipo']?>">
              <i class="fa fa-external-link" aria-hidden="true"></i></a>
              <a href="eliminar-tipo-grupo-<?php echo $row['id_tipo']?>">
                <i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
	                  		</tr>
	            	<?php } ?>

	            </tbody>
	      </table>
    </div>
