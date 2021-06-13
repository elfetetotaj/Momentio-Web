<?php 

    require '../include/dbconnect.php';

    session_start();

    if(isset($_SESSION['permission'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOMENTIO | Dashboard</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <?php 
        include "includes/header.php";
    ?>
    
    <?php
        switch(@$_GET['page']){
            case 'users';
                include "users.php";
            break;
            case 'edit_user';
                include "edit_user.php";
            break;
            case 'delete_user';
                include "delete_user.php";
            break;
            case 'add_users';
                include "add_users.php";
            break;
            case 'posts';
                include "posts.php";
            break;
            case 'add_post';
                include "add_post.php";
            break;
            case 'edit_post';
                include "edit_post.php";
            break;
            case 'delete_post';
                include "delete_post.php";
            break;
            case 'contacts';
                include "contacts.php";
            break;
            case 'contact_post';
                include "contact_post.php";
            break;
            case 'delete_contact';
                include "delete_contact.php";
            break;
            case 'show_contact';
                include "show_contact.php";
            break;
            case 'admin';
                include "admin.php";
            break;
            case 'slideshow';
                include "slideshow.php";
            break;
            case 'add_slideshow';
                include "add_slideshow.php";
            break;
            case 'edit_slideshow';
                include "edit_slideshow.php";
            break;
            case 'delete_slideshow';
                include "delete_slideshow.php";
            break;
            default:
                include "users.php";
        }
    ?>
    <?php include "includes/push.php";?>
    <?php include "../include/footer_form.php";?>
</body>
</html>

<?php

    } else {
        header("Location: login.php");
    }

?>