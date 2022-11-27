<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
</head>
<body>
    <?php
        include '../dat/dbh.php';
        session_start();
        

        $user = $_SESSION['username'];
        $logins_sql = "SELECT loginName, loginSurname
                        FROM logins 
                        WHERE logins.loginUsername=('$user');";
        $result_logins = mysqli_query($connect, $logins_sql);

        while($row = mysqli_fetch_assoc($result_logins)){
            $dbFirstname = $row['loginName'];
            $dbLastname = $row['loginSurname'];
           // $dbRole = $row['rName'];
        }

        echo "<h2>Jméno:".$dbFirstname."</h2>";
        echo "<h2>Příjmení:".$dbLastname."</h2>";
        //echo "<h2>Role: ".$dbRole."</h2>";

        if($dbRole === 'admin'){
            echo "Fotka, kterou vidí pouze admin: \n";
            echo "<img src='secretpic.jpg'>";
        }else{
            return null;
        }
    ?>
    
</body>
</html>