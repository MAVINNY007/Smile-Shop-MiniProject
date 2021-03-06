<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title>Register Page</title>
</head>
<body>
    
    <div class="header"  style="background-color: #000000; color: #fff;">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div class="input-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2">
        </div><br>
        <div>
            <button class="button-85" type="submit" name="reg_user" >Register</button>
        </div><br>
        <p class="p-text">Already a member? <a href="login.php">Login /</a> <a href="home.html">/ Back to Main</a></p>
    </form>

</body>
</html>