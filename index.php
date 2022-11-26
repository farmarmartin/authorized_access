<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authorizace</title>
</head>
<body>
    <nav>
        <input type="button" onclick="window.location.href='register/index.php';" value="register"/>
        <input type="button" onclick="window.location.href='login/index.php';" value="login"/>

    </nav>

    <?php
    include 'dat/dbh.php';
    date_default_timezone_set('CET');

    $salt = random_int(1000, 10000);

    $current_time = date("H:i:s");
    $time_limit = 10;
    
    $insert = "INSERT INTO request (salt, time_up) VALUES ('$salt', '$current_time');";
    mysqli_query($connect, $insert);
    ?>
</body>
</html>