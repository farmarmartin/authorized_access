<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form action="dat/form_data.php" method="POST">
            <input type="text" name="name" placeholder="name" required>
            <br>
            <input type="text" name="surname" placeholder="surname" required>
            <br>
            <input type="text" name="username" placeholder="username" required>
            <br>
            <input type="password" name="password" placeholder="password" required>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            include 'register.php';
            header('Location: ' . $_SERVER['PHP_SELF']);
            }
        
        ?>
</body>
</html>