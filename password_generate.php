<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
</head>
<body>
    <div>
        <h2>La Password generata è:</h2>
        <div>
          <?php 
            echo $_SESSION['password'];
          ?>
        </div>
    </div>
</body>
</html>