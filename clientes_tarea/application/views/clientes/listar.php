<div class="col-xs-12">
    <h1>Clientes</h1>
    <?php if(!empty($this->session->flashdata())): ?>
		<div class="alert alert-<?php echo $this->session->flashdata('clase')?>">
			<?php echo $this->session->flashdata('mensaje') ?>
		</div>
	<?php endif; ?>
    <div>
        <a class="btn btn-success" href="<?php echo base_url() ?>index.php/clientes/agregar">Nuevo <i class="fa fa-plus"></i></a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente){ ?>
            <tr>
                <td><?php echo $cliente->id ?></td>
                <td><?php echo $cliente->nombre ?></td>
                <td><?php echo $cliente->apellido ?></td>
                <td><?php echo $cliente->telefono ?></td>
                <td><a class="btn btn-warning" href="<?php echo base_url() ."index.php/clientes/editar/" . $cliente->id ?>"><i class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-danger" href="<?php echo base_url() ."index.php/clientes/eliminar/" . $cliente->id ?>"><i class="fa fa-trash"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>