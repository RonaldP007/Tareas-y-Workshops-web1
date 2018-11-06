<div class="col-xs-12">
	<h1>Editar Cliente</h1>
	<form method="post" action="<?php echo base_url() ?>index.php/clientes/guardarCambios">
        <input name="id" type="hidden" value="<?php echo $cliente->id ?>">
	
        <label for="codigo">Nombre:</label>
        <input class="form-control" name="nombre" required type="text"  placeholder="Escribe el nombre">
        
        <label for="codigo">Apellido:</label>
        <input class="form-control" name="apellido" required type="text"  placeholder="Escribe el apellido">
       
        <label for="codigo">Telefono:</label>
        <input class="form-control" name="telefono" required type="text" placeholder="Escribe el telefono">
		
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>