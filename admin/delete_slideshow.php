<?php 
    include 'include/dbconnect.php';
  

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $query = "DELETE FROM slideshow WHERE slideshow_id = :id";
        $query = $pdo->prepare($query);

        $query->execute(['id'=>$id]);

        header("Location: index.php?page=slideshow");

?>