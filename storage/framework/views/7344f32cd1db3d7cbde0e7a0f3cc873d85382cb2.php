<?php $__env->startSection('content'); ?>
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Lista Libros</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="<?php echo e(route('cancha.create')); ?>" class="btn btn-info" >Añadir Libro</a>

                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Id</th>
                                <th>Numero</th>
                                <th>tarifa</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                </thead>
                                <tbody>
                                <?php if($canchas->count()): ?>
                                    <?php $__currentLoopData = $canchas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cancha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($cancha->id); ?></td>
                                            <td><?php echo e($cancha->numero_cancha); ?></td>
                                            <td><?php echo e($cancha->tarifa); ?></td>
                                           <td><a class="btn btn-primary btn-xs" href="<?php echo e(action('CanchaController@edit', $cancha->id)); ?>" ><span class="glyphicon glyphicon-pencil"></span></a></td>

                                            <td>
                                                <form action="<?php echo e(action('CanchaController@destroy', $cancha->id)); ?>" method="post">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input name="_method" type="hidden" value="DELETE">

                                                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <?php echo e($canchas->links()); ?>

                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\araucanchas\resources\views/cancha/index.blade.php ENDPATH**/ ?>