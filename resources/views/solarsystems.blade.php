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
            </tr>
            @foreach ($solarsystems as $solars)
            <tr>
                <td>{{ ucfirst($solars->name) }}</td>
                <td>{{ ucfirst($solars->age_in_years) }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>