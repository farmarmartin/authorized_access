<?php
function validation($DP, $FP, $DU, $FU){
    if($DU === $FU && $DP === $FP){
        echo "Přihlášen!";
    }
    else{
        echo "přihlášení se nepodařilo";
    }
}

include '../dat/dbh.php';

$user = $_POST['username'];
$passw = sha1($_POST['password']);

$sql = "SELECT loginPassw, loginUsername FROM logins WHERE loginUsername =('$user');";
//SELECT rName FROM my_role WHERE idrole=('logins.idlogins');
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    $dbUsername = $row['loginUsername'];
    $dbPassw = $row['loginPassw'];
}
validation($dbPassw, $passw, $dbUsername, $user);
