<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding: 0;
                margin: 0;
            }
            td, th {
                border: 2px solid #dddddd;
                padding: 10px;
                text-align: center;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Name of the solar system</th>
                <th>Age in years</th>
                <th>Planet count</th>
            </tr>
            @foreach ($solarsystems as $solars)
            <tr>
                <td><a href='solarsystems/{{$solars->id}}'>{{ ucfirst($solars->name) }}</a></td>
                <td>{{ ucfirst($solars->age_in_years) }}</td>
                <td>{{ ucfirst($solars->planets_count) }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>