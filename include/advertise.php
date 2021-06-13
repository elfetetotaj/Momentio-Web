<?php
    require 'dbconnect.php';
    $queryAdvertise = $pdo->query('SELECT * FROM posts WHERE post_id=12');
    $advertise = $queryAdvertise->fetchAll();
?>
<!-- ****************Advertise***************  -->
<div class="advertise">
    <div class="container">
        <div class="row" id="row-infografic">
            <?php foreach($advertise as $advertises):?>
            <div id="info_advertise">
                <h4><?php echo $advertises['title'];?></h4>
                <h3><?php echo $advertises['description'];?></h3>
                <p><?php echo $advertises['info'];?></p>
                <button id="Button_Learn"><?php echo $advertises['info_plus'];?></button>
            </div>
            <?php endforeach;?>
            <div id="cont"></div>
        </div>
    </div>
</div>