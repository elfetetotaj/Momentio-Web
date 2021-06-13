<?php
    session_start();
    require '../include/dbconnect.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $message = '';
    
        $sql = 'INSERT INTO users(username,name,surname,email,password) VALUES (:username, :name, :surname, :email, :password)';
        $query = $pdo->prepare($sql);
        if (empty($username)) {
            $message = "Username is required!";
        } else {
            $query->bindParam('username', $username);
        }
        if (empty($name)) {
            $message = "Name is required!";
        } else {
            $query->bindParam('name', $name);
        }
        if (empty($surname)) {
            $message = "Surname is required!";
        } else {
            $query->bindParam('surname', $surname);
        }
        if (empty($email)) {
            $message = "Email is required!";
        } else {
            $query->bindParam('email', $email);
        }
        if (empty($password)) {
            $message = "Password is required!";
        } else {
            $query->bindParam('password', $password);
        }
    
        if($query->execute()){
            $message = "Successfully created your account!";
        } else {
            $message = "A problem occured creating your account!";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up| MOMENTIO</title>
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet'>
    <link rel="icon" href="images/logo.png">
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
            <h2>Register</h2>
        </div>
        <form action="signup.php" method="post" id="form" class="form">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text"  name="username" placeholder="Write your username..." id="username" required minlength="3" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Write your name..." id="name" required minlength="3" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="surname">Surname</label>
                <input type="text" name="surname" placeholder="Write your surname..." id="surname" required minlength="3" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Write your email..." id="email" required />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Write your password..." id="password" required minlength="6"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <button type="submit" name="submit" value="Register">Register</button>
            <button type="Log in" onclick="location.href='login.php'">Login</button>
            
            <!-- <script src="../js/javaScript1.js"></script> -->

        </form>
    </div>
    <?php include '../include/footer_form.php';?>
</body>
</html>