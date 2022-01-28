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
        <h2>Are you sure you want to delete this planet?</h2>
        <form method='post' action='destroy'>
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>">
            <input type='submit' value='Delete'>
        </form>
        <a href='../../solarsystems'>No, go back!</a>
    </body>
</html>