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
        <h2>Insert your solar system data here!</h2>
        <table>
            <form action='/solarsystems/create' method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>">
                <tr>
                <th>Enter name of the solar system</th>
                <td><input name='name' type='text' required></td>
                </tr>
                <tr>
                <th>Enter age in years of the solar system</th>
                <td><input name='age_in_years' type='number' required></td>
                </tr>
                <tr>
                <th><input type='submit' value='Add solar system'></th>
                </tr>
            </form>
        </table>
        <a href='../solarsystems'>Go back!</a>
    </body>
</html>