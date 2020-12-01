<?php $__env->startSection('content'); ?>
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="table-container">
                            <form action="<?php echo e(route('cancha.store')); ?>" method="post" >
                                <?php echo e(csrf_field()); ?>

                                <div class="row">



                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Numero de cancha</label>
                                        <div class="form-group">
                                            <input type="text" name="numero_cancha" id="numero_cancha" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>


                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Tarifa</label>
                                        <div class="form-group">
                                            <input type="text" name="tarifa" id="tarifa" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>


                                    <label class="label">Nombre de tu recinto</label>
                                    <select name="recinto_id" id="recinto_id" class="form control input-group-sm" placeholder="" required>
                                        <option value="">-escoge tu recinto-</option>
                                        <?php $__currentLoopData = $canchas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->nombre_recinto); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                                    <div class="w-33">
                                        <div class="center">
                                            <input type="submit" class="btn btn-info" value="Registrar">
                                        </div>
                                    </div>




                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\araucanchas\resources\views/cancha/create.blade.php ENDPATH**/ ?>