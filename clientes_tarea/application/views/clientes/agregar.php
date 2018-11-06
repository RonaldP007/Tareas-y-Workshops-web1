<div class="col-xs-12">
	<h1>Nuevo Cliente</h1>
	<?php if(!empty($this->session->flashdata())): ?>
		<div class="alert alert-<?php echo $this->session->flashdata('clase')?>">
			<?php echo $this->session->flashdata('mensaje') ?>
		</div>
	<?php endif; ?>
    <form method="post" action="<?php echo base_url() ?>index.php/clientes/guardar">
	
		<label for="codigo">ID:</label>
        <input class="form-control" name="id" required type="text"  placeholder="Escribe la ID">
	
        <label for="codigo">Nombre:</label>
        <input class="form-control" name="nombre" required type="text"  placeholder="Escribe el nombre">
        
        <label for="codigo">Apellido:</label>
        <input class="form-control" name="apellido" required type="text"  placeholder="Escribe el apellido">
       
        <label for="codigo">Telefono:</label>
        <input class="form-control" name="telefono" required type="text" placeholder="Escribe el telefono">
        
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>