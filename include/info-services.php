<?php 
    require 'dbconnect.php';
    $queryInfo = $pdo->query('SELECT * FROM posts WHERE post_id=2');
    $info = $queryInfo->fetchAll();

    $queryInfo2 = $pdo->query('SELECT * FROM posts WHERE post_id=3');
    $info2 = $queryInfo2->fetchAll();

    $queryBox = $pdo->query('SELECT * FROM posts WHERE post_id=4');
    $box = $queryBox->fetchAll();
    $queryBox2 = $pdo->query('SELECT * FROM posts WHERE post_id=5');
    $box2 = $queryBox2->fetchAll();
    $queryBox3 = $pdo->query('SELECT * FROM posts WHERE post_id=6');
    $box3 = $queryBox3->fetchAll();
    $queryBox4 = $pdo->query('SELECT * FROM posts WHERE post_id=7');
    $box4 = $queryBox4->fetchAll();
    
    $queryQuote = $pdo->query('SELECT * FROM posts WHERE post_id=8');
    $quote = $queryQuote->fetchAll();
?>
<!-- ----------Info & Services------------------------  -->
<div id="info_services">
    <!-- -----INFO------  -->
    <div class="container">
        <?php foreach($info as $infos):?>
        <div class="info">
            <img src="admin/uploads/<?php echo $infos['image'];?>" alt="Image not found!">

            <h2><?php echo $infos['title'];?></h2>
            <hr>

            <p id="momentio"><?php echo $infos['description'];?> <span style="color: #FB6816;">Momentio</span> <br> <?php echo $infos['info'];?></p>

            <h3><?php echo $infos['info_plus'];?></h3>
        </div>
        <?php endforeach;?>
    </div>

    <!-- *********Info_2*********  -->
    <div class="info_2">
        <?php foreach($info2 as $infos2):?>
        <div class="container">
            <p><?php echo $infos2['description'];?>  <br> <?php echo $infos2['info'];?></p>
        </div>
        <?php endforeach;?>
    </div>

    <!-- Services------------------------ -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="box">
                    <?php foreach($box as $boxes):?>
                    <div class="boxicon">
                        <img src="admin/uploads/<?php echo $boxes['image'];?>" alt="Logo not found!">
                    </div>
                    <div class="box-text">
                        <h3><?php echo $boxes['title'];?></h3>
                        <p><?php echo $boxes['description'];?></p>
                    </div>
                    <?php endforeach;?>
                </div>
                <div id="vr"></div>
                <div class="box">
                    <?php foreach($box2 as $boxes2):?>
                    <div class="box-text">
                        <h3><?php echo $boxes2['title'];?></h3>
                        <p><?php echo $boxes2['description'];?></p>
                    </div>
                    <div class="boxicon">
                        <img src="admin/uploads/<?php echo $boxes2['image'];?>" alt="">
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div id="hr"></div>
            <div class="row2">
                <div class="box">
                    <?php foreach($box3 as $boxes3):?>
                    <div class="boxicon">
                        <img src="admin/uploads/<?php echo $boxes3['image'];?>" alt="Logo not found!">
                    </div>
                    <div class="box-text">
                        <h3><?php echo $boxes3['title'];?></h3>
                        <p><?php echo $boxes3['description'];?></p>
                    </div>
                    <?php endforeach;?>
                </div>
                <div id="vr2"></div>
                <div class="box">
                    <?php foreach($box4 as $boxes4):?>
                    <div class="box-text">
                        <h3><?php echo $boxes4['title'];?></h3>
                        <p><?php echo $boxes4['description'];?></p>
                    </div>
                    <div class="boxicon">
                        <img src="admin/uploads/<?php echo $boxes4['image'];?>" alt="">
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <!-- ********Quote********** -->
    <div class="quote">
        <div class="container">
            <?php foreach($quote as $quotes):?>
            <div id="quote">
                <p><?php echo $quotes['description'];?> <br> <?php echo $quotes['info'];?></p>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>