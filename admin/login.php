<?php

    session_start();

    session_destroy();
    session_unset();

    session_start();

    require '../include/dbconnect.php';

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = '';

        $query = $pdo -> prepare('SELECT * FROM users WHERE username = :username');
        if (empty($username)) {
            $message = "Username is required!";
        } else {
            $query->bindParam('username', $username);
        }
        $query->execute();
    

        $user = $query -> fetch();

        if($user > 0 && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['permission'] = $user['permission'];

            header ('Location: index.php');
        }else{
            $message = "Sorry, those credentials do not match!";
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MOMENTIO</title>
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet'>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style-contact.css">
</head>
<body style="font-family: Questrial;"></body>

    <?php include '../include/header_form.php';?>
    <div class="container">
    <?php
        if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>
        <div class="header">
            <h2>Login</h2>
        </div>
        <form action="login.php" method="post" id="form" class="form">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Write your username..." id="username" required minlength=3/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Write your password..." id="password" required minlength=6/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            
            <button type="submit" name="submit" value="Login">Login</button>
            <button onclick="location.href='signup.php'" style="text-decoration: none; color:#fff">SignUp </button>

        </form>
    </div>
    <?php include '../include/footer_form.php';?>
</body>
</html>