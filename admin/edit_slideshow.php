<?php

    require '../include/dbconnect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $sql = 'SELECT * FROM slideshow WHERE slideshow_id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $slideshow = $query->fetch();

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $image_file = time() . $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];

        move_uploaded_file($temp, "uploads/".$image_file);

        $sql = "UPDATE slideshow SET title = :title, image= :image WHERE slideshow_id = :id";
        $query = $pdo->prepare($sql);

        $query->bindParam('title',$title);
        $query->bindParam('image',$image_file);
        $query->bindParam('id',$id);
        $query->execute();

        header("Location: index.php?page=slideshow");
    }

?>
<div class="mt-4">
    <div class="container" style="background-image: url('../images/Parallax_Effects.png')">
        <div class="card" style="margin:0px 300px">
            <div class="card-header text-center" style="color:#FB6816; margin:15px; font-weight:normal;" >
               <h1>Edit Slideshow</h1>
            </div>
            <form method="post" class="p-1" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $slideshow['title']?>" required maxlength="30">
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png">
                    <br>
                    <img src="uploads/<?php echo $slideshow['image']?>" height="200"  width="300">
                </div>
                <input type="submit" name="submit" value="Edit Slideshow" class="btn btn-primary mt-1">
            </form>
        </div>
    </div>
</div>