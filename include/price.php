<?php 
    require 'dbconnect.php';
    $queryTitle = $pdo ->query('SELECT * FROM posts WHERE post_id=20');
    $title =$queryTitle->fetchAll();
    $queryPrice = $pdo ->query('SELECT * FROM posts WHERE post_id=21');
    $price =$queryPrice->fetchAll();
    $queryPrice2 = $pdo ->query('SELECT * FROM posts WHERE post_id=22');
    $price2 =$queryPrice2->fetchAll();
?>
<!-- ------------Price-----------------------------  -->
<div class="pricing-table" id="price">
    <div class="title">
        <?php foreach($title as $titles):?>
        <div class="container">
            <h5><?php echo $titles['title'];?></h5>
        </div>
        <hr>
        <div class="container">
            <p><?php echo $titles['description'];?> <br> <?php echo $titles['info'];?></p>
        </div>
        <?php endforeach;?>
    </div>
    <div class="container">
        <div class="price-table">
            <div class="price-column">
                <div class="price-header">
                    <div class="con_price-header">
                        <?php foreach($price as $prices):?>
                        <h3><?php echo $prices['title'];?></h3>
                        <p class="start-price"><?php echo $prices['description'];?></p>
                        <p class="price"><?php echo $prices['info'];?></p>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="bodypart">
                    <?php foreach($price2 as $prices2):?>
                    <ul>
                        <li>Clean Code</li>
                        <li><?php echo $prices2['title'];?></li>
                        <li><?php echo $prices2['description'];?></li>
                        <li><?php echo $prices2['info'];?></li>
                        <li><?php echo $prices2['info_plus'];?></li>
                    </ul>
                    <?php endforeach;?>
                    <a href="contact.php"><button class="price-button">Contact Us</button></a>
                </div>
            </div>
        </div>

        <div class="price-table">
            <div class="price-column">
                <div class="price-header">
                    <div class="con_price-header">
                        <?php foreach($price as $prices):?>
                        <h3><?php echo $prices['title'];?></h3>
                        <p class="start-price"><?php echo $prices['description'];?></p>
                        <p class="price"><?php echo $prices['info'];?></p>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="bodypart">
                    <div class="con_price-header">
                        <?php foreach($price2 as $prices2):?>
                        <ul>
                            <li>Clean Code</li>
                            <li><?php echo $prices2['title'];?></li>
                            <li><?php echo $prices2['description'];?></li>
                            <li><?php echo $prices2['info'];?></li>
                            <li><?php echo $prices2['info_plus'];?></li>
                        </ul>
                        <?php endforeach;?>
                        <a href="contact.php"><button class="price-button">Contact Us</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="price-table">
            <div class="price-column">
                <div class="price-header">
                    <div class="con_price-header">
                        <?php foreach($price as $prices):?>
                        <h3><?php echo $prices['title'];?></h3>
                        <p class="start-price"><?php echo $prices['description'];?></p>
                        <p class="price"><?php echo $prices['info'];?></p>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="bodypart">
                    <?php foreach($price2 as $prices2):?>
                    <ul>
                        <li>Clean Code</li>
                        <li><?php echo $prices2['title'];?></li>
                        <li><?php echo $prices2['description'];?></li>
                        <li><?php echo $prices2['info'];?></li>
                        <li><?php echo $prices2['info_plus'];?></li>
                    </ul>
                    <?php endforeach;?>
                    <a href="contact.php"><button class="price-button">Contact Us</button></a>
                </div>
            </div>
        </div>
    </div>
</div>