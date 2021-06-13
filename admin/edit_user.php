<?php
require '../include/dbconnect.php';
if ($_SESSION['permission'] == 1) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM users WHERE user_id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $user = $query->fetch();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $permission = $_POST['permission'];

        $sql = 'UPDATE users SET username = :username, name = :name, surname = :surname, email = :email, permission = :permission WHERE user_id = :id';
        $query = $pdo->prepare($sql);
        if (empty($username)) {
            $message = "Username is required";
        } else {
            $query->bindParam('username', $username);
        }
        if (empty($name)) {
            $message = "Name is required";
        } else {
            $query->bindParam('name', $name);
        }
        if (empty($surname)) {
            $message = "Surname is required";
        } else {
            $query->bindParam('surname', $surname);
        }
        if (empty($email)) {
            $message = "Email is required";
        } else {
            $query->bindParam('email', $email);
        }
        $query->bindParam('permission', $permission);
        $query->bindParam('id', $id);

        $query->execute();

        header('Location: index.php?page=users');
    }
?>
    <div class="container" style="background-image: url('../images/Parallax_Effects.png')">
        <div  style="margin:0px 400px">
            <div class="header text-center"  style="color:#FB6816; margin:15px; font-weight:normal;">
                <h1> Edit User</h1>
            </div>
            <form method="post">
                <div class="form-group mb-2">
                    <label for="username" class="col-sm-2 col-form-label">Username:</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $user['username'] ?>" required>
                </div>
                <div class="form-group mb-2">
                    <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $user['name'] ?>" required>
                </div>
                <div class="form-group mb-2">
                    <label for="surname" class="col-sm-2 col-form-label">Surname:</label>
                    <input type="text" name="surname" id="surname" class="form-control" value="<?php echo $user['surname'] ?>" required>
                </div>
                <div class="form-group mb-2">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email'] ?>" required>
                </div>
                <div class="form-group mb-2">
                    <label for="permission" class="col-sm-2 col-form-label">Permission:</label>
                    <input type="number" name="permission" id="permission" class="form-control" value="<?php echo $user['permission'] ?>" required min=0 max=1>
                </div>
                <br><br>
                <input type="submit" value="Edit User" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>

<?php } else {
    header('Location: users.php');
} ?>