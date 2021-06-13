<?php
  require '../include/dbconnect.php';
    $query =$pdo -> query('SELECT * FROM users');
    $users = $query -> fetchAll();

    if($_SESSION['permission']==1){
?>
<div class="container"  style="background-image: url('../images/Parallax_Effects.png')">   
    <h1 class="text-center mt-4" style="color:#FB6816; margin:15px; font-weight:normal;">Users</h1>
    <table class="table table-striped table-light table-hover mt-4">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Name</th>
          <th scope="col">Surname</th>
          <th scope="col">Email</th>
          <th scope="col">Permissions</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($users as $user) : ?>
        <tr>
          <td><?php echo $user['user_id'];?></td>
          <td><?php echo $user['username'];?></td>
          <td><?php echo $user['name'];?></td>
          <td><?php echo $user['surname'];?></td>
          <td><?php echo $user['email'];?></td>
          <td><?php echo $user['permission'];?></td>
          <td><a href="index.php?page=edit_user&id=<?php echo $user['user_id'];?>" class="btn btn-primary">Edit</a></td>
          <td><a href="index.php?page=delete_user&id=<?php echo $user['user_id'];?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="index.php?page=add_users&id=<?php echo $user['user_id'];?>" class="btn btn-primary">Add User</a>
</div>
<?php
    }else{
        header('Location: ../contact.php');
    }
?>