<?php
    require 'dbconnect.php';
    $queryTitle = $pdo ->query('SELECT * FROM posts WHERE post_id=13');
    $title =$queryTitle->fetchAll();
    $querySelected = $pdo ->query('SELECT * FROM posts WHERE post_id=14');
    $selected =$querySelected->fetchAll();
    $queryPerson = $pdo ->query('SELECT * FROM posts WHERE post_id=15');
    $person =$queryPerson->fetchAll();
    $queryPerson2= $pdo ->query('SELECT * FROM posts WHERE post_id=16');
    $person2 =$queryPerson2->fetchAll();
    $queryPerson3 = $pdo ->query('SELECT * FROM posts WHERE post_id=17');
    $person3 =$queryPerson3->fetchAll();
    $queryQarts = $pdo ->query('SELECT * FROM posts WHERE post_id=18');
    $qarts =$queryQarts->fetchAll();
    $queryQuote = $pdo ->query('SELECT * FROM posts WHERE post_id=19');
    $quote =$queryQuote->fetchAll();
?>
<!-- ---------------------About Us------------------------  -->
<div id="aboutUs">
    <div id="title2">
        <?php foreach($title as $titles):?>
        <h2><?php echo $titles['title'];?></h2>
        <hr>
        <div class="container">
            <p><?php echo $titles['description'];?></p>
        </div>
        <?php endforeach;?>
    </div>

    <!-- -------------------Selected-------------------------  -->
    <div class="selected">
        <div class="name">
            <?php foreach($selected as $selectedd):?>
            <div class="namecontainer">
                <h3><?php echo $selectedd['info'];?><br> <?php echo $selectedd['info_plus'];?></h3>
                <p><?php echo $selectedd['title'];?></p>
            </div>
            <div class="pcontainer">
                <p><?php echo $selectedd['description'];?></p>
            </div>
        </div>
        <div class="container">
            <img src="admin/uploads/<?php echo $selectedd['image'];?>" alt="Logo not foung!">
        </div>
        <?php endforeach;?>
        <div class="container">
            <div id="row_selected">
                <?php foreach($person as $persons):?>
                <div class="person">
                    <img src="admin/uploads/<?php echo $persons['image'];?>" alt="...">
                    <div id="text-block">
                        <p><?php echo $persons['title'];?> <br> <?php echo $persons['description'];?></p>
                    </div>
                </div>
                <?php endforeach;?>
                <?php foreach($person2 as $persons2):?>
                <div class="person">
                    <img src="admin/uploads/<?php echo $persons2['image'];?>" alt="..">
                    <div id="text-block">
                        <p><?php echo $persons2['title'];?> <br> <?php echo $persons2['description'];?></p>
                    </div>
                </div>
                <?php endforeach;?>
                <?php foreach($person3 as $persons3):?>
                <div class="person">
                    <img src="admin/uploads/<?php echo $persons3['image'];?>" alt="...">
                    <div id="text-block">
                        <p><?php echo $persons3['title'];?> <br> <?php echo $persons3['description'];?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- **************Skills***************  -->
    <div class="skills">
        <div class="container">
            <h2>We are good at</h2>
        </div>
        <hr>
        <div id="charts">
            <div class="container">
                <div class="row">
                    <img class="chart" src="images/Chart html.png" alt="...">
                    <img class="chart" src="images/Chart JS.png" alt="...">
                    <img class="chart" src="images/Chart PHP.png" alt="...">
                    <img class="chart" src="images/Chart Adobe.png" alt="...">
                    <?php foreach($qarts as $qart):?>
                    <div id="rowcharts">
                        <div class="p-charts" id="html5"><?php echo $qart['title'];?></div>
                        <div class="p-charts" id="javascript"><?php echo $qart['description'];?></div>
                        <div class="p-charts" id="php"><?php echo $qart['info'];?></div>
                        <div class="p-charts" id="adobe"><?php echo $qart['info_plus'];?></div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <!-- ------Quote-------  -->
    <div class="quote2">
        <div class="container">
            <img id="leftquote" src="images/left quote.png" alt="...">
            <blockquote>
                <?php foreach($quote as $quotes):?>
                <p><?php echo $quotes['description'];?><br> <?php echo $quotes['info'];?></p>
            </blockquote>
            <?php endforeach;?>
            <img id="rightquote" src="images/right quote.png" alt="...">
        </div>
    </div>
</div>