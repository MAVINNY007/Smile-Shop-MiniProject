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
    <title>Login Page</title>
</head>
<body>
    <section >
    <div class="header"  style="background-color: #000000; color: #fff;">
        <h2>Login</h2>
    </div>

    <form action="login_db.php" method="post">
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
            <label for="password">Password</label>
            <input type="password" name="password">
        </div><br>
        <div>
            <button class="button-85" type="submit" name="login_user" class="btn">Login</button>
        </div><br>
        <p class="p-text">Not yet a member? <a href="register.php">Sign Up /</a> <a href="home.html">/ Back to Main</a></p>
    </form>
    </section>
</body>
</html>