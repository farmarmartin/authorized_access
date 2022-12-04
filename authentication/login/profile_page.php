<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="121">
    <link rel="stylesheet" href="../style/profile_page.css">
    <title>PROFILE PAGE</title>
</head>
<header>
    <input class="sub"type="button" name="LOG OUT" onclick="window.location.href='logout.php'" value="LOG OUT">
</header>
<body>
    <h1>You were succesfully logged into your account! :)</h1>
    <h2>Let's see some information about you! :)</h2>
    <?php
        include '../dat/dbh.php';


        session_start();

        $user = $_SESSION['username'];

        $logins_sql = "SELECT loginName, loginSurname, rName
        FROM logins
        WHERE loginUsername=('$user');";

        $result_logins = mysqli_query($connect, $logins_sql);

        while($row = mysqli_fetch_assoc($result_logins)){
            $dbFirstname = $row['loginName'];
            $dbLastname = $row['loginSurname'];
            $dbRole = $row['rName'];
        }

        echo "<p><b>Your name:</b> ".$dbFirstname."</p>";
        echo "<p><b>Your surname:</b> ".$dbLastname."</p>";
        echo "<p><b>Your role:</b> ".$dbRole."</p>";

        if($dbRole === 'admin'){
            include 'memes.php';

            $image = $meme_stack[rand(0, count($meme_stack) - 1)];
            echo "<img src='$image' style='max-height: 30em'>";
        }else{
            echo("Nothing to see here. Log in as administrator to see a magic. :)");
        }
        $now = time();
        if($now > $_SESSION['expire']) {
            session_destroy();
            header("Location: index.php");  
        }
        else {
        }
        ?>
    
</body>
</html>