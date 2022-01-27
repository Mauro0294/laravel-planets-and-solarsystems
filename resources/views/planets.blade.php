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
                text-align: left;
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
            <th>Name of the planet</th>
            <th>About the planet</th>
            <th>Solar system of the planet</th>
        </tr>
@foreach ($planets as $planeten)
        <tr>
            <td><a href='planets/{{$planeten->name}}'>{{ ucfirst($planeten->name) }}</a></td>
            <td>{{ ucfirst($planeten->description) }}</td>
            <td>{{ ucfirst($planeten->solar->name) }}</td>
        </tr>
@endforeach
    </table>
    </body>
</html>