<?php 
    $query = $pdo->query('SELECT * FROM slideshow');
    $slideshows = $query->fetchAll();
?>

<div class="mt-2">
<div class="container"  style="background-image: url('../images/Parallax_Effects.png')">
    <h1 class="text-center" style="color:#FB6816; margin:15px; font-weight:normal;">Slideshow</h1>
    <table class="table table-striped table-light table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($slideshows as $slideshow) : ?>
                <tr>
                    <td><?php echo $slideshow['slideshow_id']; ?></td>
                    <td><?php echo $slideshow['title']; ?></td>
                    <td><?php echo $slideshow['image']; ?></td>
                    <td><?php echo $slideshow['date_add']; ?></td>
                    <td><a href="index.php?page=edit_slideshow&id=<?php echo $slideshow['slideshow_id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="index.php?page=delete_slideshow&id=<?php echo $slideshow['slideshow_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?page=add_slideshow" class="btn btn-sm btn-primary">Add Slideshow</a>
</div>
</div>
