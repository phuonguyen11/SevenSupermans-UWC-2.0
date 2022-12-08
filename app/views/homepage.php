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
        if (current_user()) {
            echo 'Sign in successfully~~!!';
        }
        else {
            echo 'Please try again';
        }
    ?>
    <form action="../../controllers/logout.php" action="GET">
        <input type="submit">
    </form>
</body>
</html>