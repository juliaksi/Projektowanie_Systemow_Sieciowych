<?php $__env->startSection('content'); ?>
    <body>
    <main class="registration-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Rejestracja</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('registerSubmit')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Imię: </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Wpisz swoje imię" />
                                    </div>
                                </div>

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert" style="color: red">
                                <strong> <?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="surname" class="cols-sm-2 control-label">Nazwisko: </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-o fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Wpisz swoje nazwisko" />
                                    </div>
                                </div>

                            <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert" style="color: red">
                                <strong> <?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Adres email:</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Prosze wpisz adres email" />
                                    </div>
                                    <p id="email_error" class="text-danger"></p>
                                </div>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert" style="color: red">
                                <strong> <?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Hasło: </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Wpisz silne hasło" />
                                    </div>
                                </div>


                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert" style="color: red">
                                <strong> <?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation" class="cols-sm-2 control-label">Powtórz hasło: </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Powtórz hasło" />
                                    </div>
                                </div>
                                <?php $__errorArgs = ['password_confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert" style="color: red">
                                    <strong> <?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>


                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls">
                                    <button class="btn btn-success btn btn-primary btn-lg btn-block login-button">Register</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </main>



    </body>
<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



<script>
    // Regex sprawdzajacy poprawnosc emaila
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    $(document).ready(function(){

        $('#email').on('keyup', function(){
            var email = $(this).val();
            console.log(email);
            if(!email){
                document.getElementById('email_error').innerHTML = 'Wpisz email'
                return false;
            }
            if(!validRegex.test(email)){
                document.getElementById('email_error').innerHTML = 'Wpisz poprawny email'
                return false;
            }

            $.ajax({
                url: "<?php echo e(route('check-email')); ?>",
                type: "POST",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    email: email
                },
                success: function (response) {
                    console.log(response);
                    if(response =='email_exists'){
                        document.getElementById('email_error').innerHTML = 'Email jest zajety'

                    } else {
                        document.getElementById('email_error').innerHTML = ''
                    }
                }


            })
    })
    }
    );






</script>

<?php echo $__env->make("template.bylejak", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\48512\YoGrafik\resources\views/registration.blade.php ENDPATH**/ ?>