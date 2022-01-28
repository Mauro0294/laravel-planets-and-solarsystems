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
        <h2>Update data of the planet!</h2>
        <table>
            <form action='change' method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>"> 
            <tr>
                <th>New name of the planet</th>
                <td><input name='name' type='text' required></td>
                </tr>
                <tr>
                <th>New size in km of the planet</th>
                <td><input name='size_in_km' type='number' required></td>
                </tr>
                <tr>
                <th>New id of the solar system</th>
                <td><input type='number' name='solar_systems_id' required></td>
                </tr>
                <tr>
                <th>New information about the planet</th>
                <td><textarea rows='5' cols='40' name='description' required></textarea></td>
                </tr>
                <tr>
                <th><input type='submit' value='Edit planet'></th>
                </tr>
            </form>
        </table>
        <a href='../../planets'>Go back!</a>
    </body>
</html>