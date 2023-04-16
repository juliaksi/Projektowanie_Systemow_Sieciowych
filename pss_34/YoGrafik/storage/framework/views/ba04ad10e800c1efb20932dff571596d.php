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
                                <body>
                                <table class="table table-bordered align-middle mb-0 bg-white">
                                    <thead class="bg-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Imie</th>
                                        <th scope="col">Nazwisko</th>
                                        <th scope="col">Adres email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($user->id); ?></th>
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->surname); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    <?php echo e($users->links()); ?>

                                </div>

                                </body>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </thead>
    </body>
<?php $__env->stopSection(); ?>

<style>
</style>

<?php echo $__env->make("template.bylejak", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\48512\YoGrafik\resources\views/panelzarzadzania.blade.php ENDPATH**/ ?>