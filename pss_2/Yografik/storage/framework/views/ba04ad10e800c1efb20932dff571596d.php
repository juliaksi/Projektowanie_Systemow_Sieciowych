<?php $__env->startSection('content'); ?>
    <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <a href="/panelzarzadzania" class="list-group-item list-group-item-action active">Użytkownicy</a>
                    <a href="/panelzarzadzaniazajeciami" class="list-group-item list-group-item-action">Zajęcia</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <form class="form-horizontal" action="<?php echo e(route('panelzarzadzania')); ?>" method="GET">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"> <i class="fa fa-user fa"></i> Name</label>

                                        <echo id="name" class="form-control" name="name">;

                                </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
<?php $__env->stopSection(); ?>

<style>
</style>

<?php echo $__env->make("template.bylejak", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\48512\YoGrafik\resources\views/panelzarzadzania.blade.php ENDPATH**/ ?>