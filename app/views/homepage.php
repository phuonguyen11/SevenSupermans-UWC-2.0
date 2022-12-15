<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include('../../helper/current_user.php');
        if (isset($_COOKIE["user_id"])) {
            echo 'Sign in successfully~~!!';
            echo '
                <form action="../../controllers/logout.php" action="GET">
                    <input type="submit" value="Logout">
                </form>
            ';
        }
        else {
            echo '<a href="./login.php">Login</a> <br>';
            echo 'Please try again';
        }
    ?>
</body>
</html>