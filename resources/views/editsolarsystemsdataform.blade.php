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
        <h2>Update data of the solar system!</h2>
        <table>
            <form action='change' method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>"> 
            <tr>
                <th>New name of the solar system</th>
                <td><input name='name' type='text' required></td>
                </tr>
                <tr>
                <th>New age in years</th>
                <td><textarea rows='5' cols='40' name='age_in_years' required></textarea></td>
                </tr>
                <tr>
                <th><input type='submit' value='Edit solar system'></th>
                </tr>
            </form>
        </table>
        <a href='../../solarsystems'>Go back!</a>
    </body>
</html>