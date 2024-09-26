<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trains</title>
    @vite('resources/js/app.js')
</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-5 fw-bold">Treni</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Departure Station</th>
                                <th>Arrival Station</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Train Code</th>
                                <th>Carriages</th>
                                <th>On Time</th>
                                <th>Cancelled</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                                <tr>
                                    <td>{{ $train->company }}</td>
                                    <td>{{ $train->departure_station }}</td>
                                    <td>{{ $train->arrival_station }}</td>
                                    <td>{{ $train->departure_time }}</td>
                                    <td>{{ $train->arrival_time }}</td>
                                    <td>{{ $train->train_code }}</td>
                                    <td>{{ $train->carriages }}</td>
                                    <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
                                    <td>{{ $train->cancelled ? 'Yes' : 'No' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>

</body>

</html>
