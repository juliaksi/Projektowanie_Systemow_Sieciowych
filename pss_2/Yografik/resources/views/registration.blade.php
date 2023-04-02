@extends("template.bylejak")
@section('content')
    <body>
    <main class="registration-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Rejestracja</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('registerSubmit')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Imię: </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Wpisz swoje imię" />
                                    </div>
                                </div>

                            @error('name')
                            <span class="invalid-feedback" role="alert" style="color: red">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="surname" class="cols-sm-2 control-label">Nazwisko: </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-o fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Wpisz swoje nazwisko" />
                                    </div>
                                </div>

                            @error('surname')
                            <span class="invalid-feedback" role="alert" style="color: red">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Adres email:</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Prosze wpisz adres email" />
                                    </div>
                                </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert" style="color: red">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Hasło: </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Wpisz silne hasło" />
                                    </div>
                                </div>


                            @error('password')
                            <span class="invalid-feedback" role="alert" style="color: red">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation" class="cols-sm-2 control-label">Powtórz hasło: </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Powtórz hasło" />
                                    </div>
                                </div>
                                @error('password_confirm')
                                <span class="invalid-feedback" role="alert" style="color: red">
                                    <strong> {{ $message }}</strong>
                                </span>
                                @enderror
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
@endsection
