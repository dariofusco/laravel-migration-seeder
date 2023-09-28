<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <h1 class="py-3">Train <i class="fa-solid fa-train"></i></h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">azienda</th>
                    <th scope="col">stazione_di_partenza</th>
                    <th scope="col">stazione_di_arrivo</th>
                    <th scope="col">data</th>
                    <th scope="col">orario_di_partenza</th>
                    <th scope="col">orario_di_arrivo</th>
                    <th scope="col">codice_treno</th>
                    <th scope="col">numero_carrozze</th>
                    <th scope="col">in_orario</th>
                    <th scope="col">cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{ $train->id }}</th>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->data }}</td>
                        <td>{{ $train->orario_di_partenza }}</td>
                        <td>{{ $train->orario_di_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>{{ $train->in_orario }}</td>
                        <td>{{ $train->cancellato }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
