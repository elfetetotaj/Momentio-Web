<?php 

    require "dbconnect.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contacts(name, lastname, email, subject, message) VALUE (:name, :lastname, :email, :subject, :message)";
        $query = $pdo->prepare($sql);

        $query->bindParam('name',$name);
        $query->bindParam('lastname',$lastname);
        $query->bindParam('email',$email);
        $query->bindParam('subject',$subject);
        $query->bindParam('message',$message);

        $query->execute();

        header("Location: ../");
    }

?>