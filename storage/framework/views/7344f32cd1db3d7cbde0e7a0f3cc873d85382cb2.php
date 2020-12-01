<?php $__env->startSection('content'); ?>
    <html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">
        <div class="btn-group">
            <a href="http://araucanchas.test/Recinto/Cancha/Create" class="btn btn-info">Registrar</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Numero de cancha</th>
                <th>Valor</th>
                <th>id recinto</th>
                <th>Accion</th>
            </tr>
            </thead>
            <?php $__currentLoopData = $canchas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cancha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cancha->id); ?></td>
                    <td><?php echo e($cancha->numero_cancha); ?></td>
                    <td><?php echo e($cancha->tarifa); ?></td>
                    <td><?php echo e($cancha->recinto_id); ?></td>
                    <td>
                        <a href="<?php echo e(route('cancha.edit', $cancha)); ?>" class="btn btn-info">Editar</a>
                 </td>
                    <td>
                        <a href="http://araucanchas.test/Recinto/Cancha/Reserva/Create" class="btn btn-info">Reservar cancha</a>
                    </td>


                </tr>

                <td>
                    <form action="<?php echo e(route('cancha.destroy', $cancha)); ?>" method="post" >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <div class="w-33">
                            <div class="center">
                                <input type="submit" class="btn btn-info" value="Eliminar">
                            </div>
                        </div>
                    </form>
                </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\araucanchas\resources\views/cancha/index.blade.php ENDPATH**/ ?>