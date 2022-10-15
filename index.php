<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siddhant Hota PHP</title>
</head>
<body>
    <h1>Siddhant Hota PHP</h1>
    <p>
        <?php
            print "The SHA256 hash of \"Siddhant Hota\" is ".hash('sha256', 'Siddhant Hota');
        ?>
    </p>
    <pre>ASCII ART:
    ***********
    **       **
    **
    ***********
             **
    **       **
    ***********
    </pre>
    <a href="check.php">Click here to check the error setting</a>
    <br>
    <a href="fail.php">Click here to cause a traceback</a>
</body>
</html>