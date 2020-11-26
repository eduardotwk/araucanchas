<?php $__env->startSection('content'); ?>
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Crea tu cancha</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-container">

                                <div class="row">



                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Numero cancha</label>
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


                                    <div class="col-xs-8 col-sm-8 col-md-">
                                        <input type="submit"  value="Guardar" class="btn btn-success btn-block">

                                        <a href="<?php echo e(route('cancha.index')); ?>" class="btn btn-info btn-block" >Atrás</a>


                                    </div>
                                </div>
                          
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\araucanchas\resources\views/cancha/create.blade.php ENDPATH**/ ?>