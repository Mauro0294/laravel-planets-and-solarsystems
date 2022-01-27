<html>
    <head>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding: 0;
                margin: 0;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <h2>Insert your planet data here!</h2>
        <table>
            <form action='/planets/create' method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>">
                <tr>
                <th>Enter name of the planet</th>
                <td><input name='name' type='text' required></td>
                </tr>
                <tr>
                <th>Enter size in km of the planet</th>
                <td><input name='size_in_km' type='number' required></td>
                </tr>
                <tr>
                <th>Enter id of the solar system</th>
                <td><input type='number' name='solar_systems_id' required></td>
                </tr>
                <tr>
                <th>Enter information about the planet</th>
                <td><textarea rows='5' cols='40' name='description' required></textarea></td>
                </tr>
                <tr>
                <th><input type='submit' value='Add planet'></th>
                </tr>
            </form>
        </table>
        <h2>List of solar system id's</h2>
        <table>
            <tr>
                <th>ID of the solar system</th>
                <th>Name</th>
            </tr>
            @foreach ($solarsystems as $solars)
            <tr>
                <td>{{ ucfirst($solars->id) }}</td>
                <td>{{ ucfirst($solars->name) }}</td>
            </tr>
            @endforeach
        </table>
        <a href='../planets'>Go back!</a>
    </body>
</html>