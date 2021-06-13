<?php
    require 'dbconnect.php';
    $queryMenu = $pdo->query('SELECT * FROM posts WHERE post_id=1');
    $menu = $queryMenu->fetchAll();
?>
<!-- ----------------Menu------------------- -->
<div class="slider" id="main">
    <?php foreach($menu as $menus):?>
    <div class="main-content">
        <div class="navbar">
            <img src="admin/uploads/<?php echo $menus['image'];?>" alt="Logo not found!">
            <!-- Website logo  -->
            <a href="#" id="mySidebar" onclick="openNav()">MENU <i class="fa fa-bars" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- Main slider -->
    <div class="main_slider" id="home">
        <div class="container">
            <div class="big-text">
                <div class="text-con">
                    <h2><?php echo $menus['title'];?></h2>
                    <p><?php echo $menus['description'];?></p>
                </div>
            </div>
            <button id="learn_more"><?php echo $menus['info'];?></button>
        </div>
    </div>
    <?php endforeach;?>
</div>