<?php
require '../include/dbconnect.php';
if ($_SESSION['permission'] == 1) {
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
    
        $query->execute();

        header("Location: index.php");
    }

?>
<div class="container" style="background-image: url('../images/Parallax_Effects.png')">
    <div  style="margin:0px 400px">
            <div class="text-center"  style="color:#FB6816; margin:15px; font-weight:normal;">
               <h1> Add User</h1>
            </div>
        <form method="post">
            <div class="form-outline mb-2 ">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" id="username" id="form1Example1" placeholder="Username..." class="form-control input-sm" required>
            </div>
            <div class="form-outline mb-2">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" placeholder="Name..." class="form-control" required>
            </div>
            <div class="form-outline mb-2">
                <label for="surname" class="form-label">Surname:</label>
                <input type="text" name="surname" id="surname" placeholder="Surname..." class="form-control" required>
            </div>
            <div class="form-outline mb-2">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" placeholder="Email..." class="form-control" required>
            </div>
            <div class="form-outline mb-2">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password..." class="form-control" required minlength=6>
            </div>
            <div class="form-outline mb-2">
                <label for="permission" class="form-label">Permission:</label>
                <input type="number" name="permission" id="permission" placeholder="Permission..." class="form-control" required min=0 max=1>
            </div>
            <br>
            <input type="submit" value="Add User" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php } else {
    header('Location: users.php');
} ?>