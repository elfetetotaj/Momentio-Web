<?php

    require '../include/dbconnect.php';

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $info = $_POST['info'];
        $info_plus = $_POST['info_plus'];
        $image_file = time() . $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];

        move_uploaded_file($temp, "uploads/".$image_file);

        $sql = "INSERT INTO posts(title,description,info,info_plus,image) VALUE (:title,:description, :info, :info_plus, :image)";
        $query = $pdo->prepare($sql);

        $query->bindParam('title',$title);
        $query->bindParam('description',$description);
        $query->bindParam('info',$info);
        $query->bindParam('info_plus',$info_plus);
        $query->bindParam('image',$image_file);

        $query->execute();

        header("Location: index.php?page=posts");
    }

?>
<div class="mt-4">
    <div class="container" style="background-image: url('../images/Parallax_Effects.png')">
        <div class="card" style="margin:0px 300px">
            <div class="card-header text-center"  style="color:#FB6816; margin:15px; font-weight:normal;">
               <h1> Add post</h1>
            </div>
            <form method="post" class="p-1" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control"  placeholder="Title..." maxlength="30">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" placeholder="Description..." class="form-control" >
                </div>
                <div class="form-group">
                    <label for="description">Info:</label>
                    <input type="text" name="info" id="info" placeholder="Info.." class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Info Plus:</label>
                    <input type="text" name="info_plus" id="info_plus" placeholder="Info plus..." class="form-control" >
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Image..." accept=".jpg, .jpeg, .png">
                </div>
                <br>
                <input type="submit" name="submit" value="Add Post" class="btn btn-primary mt-1">
            </form>
            <br>
        </div>
    </div>
</div>