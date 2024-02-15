<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">Orario dei treni</h1>
                <table class="table-striped table">
                    <thead>
                        <th>ID</th>
                        <th>Compagnia</th>
                        <th>Stazione di Partenza</th>
                        <th>Stazione di arrivo</th>
                        <th>Data di partenza</th>
                        <th>Codice treno</th>
                        <th>Numero di carrozze</th>
                        <th>In orario</th>
                        <th>Cancellato</th>
                    </thead>
                    <tbody>
                        @foreach ($train as $train)
                            <tr>
                                <td>{{ $train->id }}</td>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_date }}</td>
                                <td>{{ $train->train_code }}</td>
                                <td>{{ $train->carriages_number }}</td>
                                <td>{{ $train->in_time ? 'Si' : 'No' }}</td>
                                <td>{{ $train->deleted ? 'Si' : 'No' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
