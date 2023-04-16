<?php $__env->startSection('content'); ?>
    <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <a href="/panelzarzadzania" class="list-group-item list-group-item-action">Użytkownicy</a>
                    <a href="/panelzarzadzaniazajeciami" class="list-group-item list-group-item-action active">Zajęcia</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 border-right">
                                <h4>Zajęcia</h4>
                            </div>
                            <div class="col-md-6">
                                <p><a class="btn btn-lg btn-primary" href="/dodajzajecia" role="button">Dodaj zajęcia</a></p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover ">
                                    <thead class="bg-light ">
                                    <tr>
                                        <th>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">
                                                </label>
                                            </div>
                                        </th>
                                        <th>Imię</th>
                                        <th>Nazwisko</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td><a href="#"><small>Johnyahua</small></a></td>
                                        <td><small>Doe</small></td>
                                        <td><small>john@example.com</small></td>
                                        <td><small>Admin</small></td>
                                        <td>
                                            <a href="#"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i class="fa fa-eye"></i></a>
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td><a href="#"><small>Johnyahua</small></a></td>
                                        <td><small>Doe</small></td>
                                        <td><small>john@example.com</small></td>
                                        <td><small>Admin</small></td>
                                        <td>
                                            <a href="#"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i class="fa fa-eye"></i></a>
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
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

<?php echo $__env->make("template.bylejak", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\48512\YoGrafik\resources\views/panelzarzadzaniazajeciami.blade.php ENDPATH**/ ?>