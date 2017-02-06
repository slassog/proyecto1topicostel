<?php $__env->startSection('header'); ?>
	<h2>Lista de Contactos</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<a href="contact/create" class="btn btn-primary">Agregar</a>
	<table class="table table-bordered table-responsive" style="margin-bottom: 10px;">
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Note</th>
		</tr>
	</thead>
	<tbody>
	<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>[{ $contact -> NAME }]</td>
			<td>[{ $contact -> PHONE }]</td>
			<td>[{ $contact -> NOTE }]</td>
			<td>
				<a href="" class="btn btn-success">Editar</a>
				<a href="" class="btn btn-danger">Borrar</a>
			</td>
		</tr>
	</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>