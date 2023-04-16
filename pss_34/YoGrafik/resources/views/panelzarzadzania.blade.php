@extends("template.bylejak")
@section('content')
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
                            <form class="form-horizontal" action="{{route('panelzarzadzania')}}" method="GET">
                                @csrf
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
                                    @foreach($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->surname }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $users->links() }}
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
@endsection

<style>
</style>
