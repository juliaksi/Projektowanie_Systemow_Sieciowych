<?php $__env->startSection('content'); ?>
    <body>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mój profil</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">* Imię: </label>
                                        <div class="col-8">
                                            <input id="name" name="name" placeholder="<?php echo e(old('name')); ?>" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">* Nazwisko:</label>
                                        <div class="col-8">
                                            <input id="surname" name="surname" placeholder="<?php echo e(old('surname')); ?>" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">* Adres email:</label>
                                        <div class="col-8">
                                            <input id="email" name="email" placeholder="<?php echo e(old('email')); ?>" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-4 col-form-label">Telefon: </label>
                                        <div class="col-8">
                                            <input id="phone" name="phone" placeholder="<?php echo e(old('phone')); ?>" class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="select" class="col-4 col-form-label">Typ konta: </label>
                                        <div class="col-8">
                                            <select id="select" name="select" class="custom-select">
                                                <option value="user">Uczeń</option>
                                                <option value="admin">Nauczyciel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="publicinfo" class="col-4 col-form-label">O mnie</label>
                                        <div class="col-8">
                                            <textarea id="description" name="description" placeholder="<?php echo e(old('description')); ?>" cols="40" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Zaktualizuj moje informacje</button>
                                        </div>
                                    </div>
                                </form>
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

<?php echo $__env->make("template.bylejak", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\48512\YoGrafik\resources\views/paneluzytkownika.blade.php ENDPATH**/ ?>