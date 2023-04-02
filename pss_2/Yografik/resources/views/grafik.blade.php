@extends("template.bylejak")
@section('content')
    <body>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr>
            <th>Dzień tygodnia</th>
            <th>Godzina</th>
            <th>Nazwa zajęć</th>
            <th>Prowadzący</th>
            <th>Chcesz przyjść?</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Poniedziałek</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="ms-3">
                        <p class="fw-bold mb-1">17:00</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">Zaawansowane asany</p>
            </td>
            <td>Asia</td>
            <td><a href="#">Zapisz mnie</a></td>
        </tr>

        </tbody>
    </table>

    </body>
@endsection

<style>

</style>
