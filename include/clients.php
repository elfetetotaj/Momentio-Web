<?php
    require 'dbconnect.php';
    $queryClient = $pdo ->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 12');
    $client =$queryClient->fetchAll();
?>
 <!-- ---------------Clients------------------  -->
 <div class="clients" id="clients">
    <div class="container">
        <ul class="clients-list">
        <?php foreach($client as $clients):?>
            <li class="cli">
                <img class="img" src="admin/uploads/<?php echo $clients['image'];?>" alt="Client...">
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>