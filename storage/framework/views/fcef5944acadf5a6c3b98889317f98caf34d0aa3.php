 
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contactos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('contacts.create')); ?>"> Crear un nuevo contacto</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($contact->NAME); ?></td>
        <td><?php echo e($contact->PHONE); ?></td>
        <td><?php echo e($contact->NOTE); ?></td>
        <td>
            <a class="btn btn-info" href="<?php echo e(route('contacts.show',$contact->id)); ?>">Mostrar</a>
            <a class="btn btn-primary" href="<?php echo e(route('contacts.edit',$contact->id)); ?>">Editar</a>
            <?php echo Form::open(['method' => 'DELETE','route' => ['contacts.destroy', $contact->id],'style'=>'display:inline']); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $items->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>