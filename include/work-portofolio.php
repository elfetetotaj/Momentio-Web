<?php
    require 'dbconnect.php';
    $queryWork = $pdo->query('SELECT * FROM posts WHERE post_id=9');
    $work = $queryWork->fetchAll();
    $queryReason = $pdo->query('SELECT * FROM posts WHERE post_id=10');
    $reason = $queryReason->fetchAll();
    $queryReasonn = $pdo->query('SELECT * FROM posts WHERE post_id=11');
    $reasonn = $queryReasonn->fetchAll();
    $queryShow= $pdo->query('SELECT * FROM slideshow ORDER BY slideshow_id LIMIT 0,4');
    $show = $queryShow->fetchAll();
    $queryShow2= $pdo->query('SELECT * FROM slideshow ORDER BY slideshow_id LIMIT 4,4');
    $show2 = $queryShow2->fetchAll();
    $queryShow3= $pdo->query('SELECT * FROM slideshow ORDER BY slideshow_id LIMIT 8,4');
    $show3 = $queryShow3->fetchAll();
    $queryShow4= $pdo->query('SELECT * FROM slideshow ORDER BY slideshow_id LIMIT 12,4');
    $show4 = $queryShow4->fetchAll();
    $queryShow5= $pdo->query('SELECT * FROM slideshow ORDER BY slideshow_id LIMIT 16,4');
    $show5 = $queryShow5->fetchAll();
    $queryShow6= $pdo->query('SELECT * FROM slideshow ORDER BY slideshow_id LIMIT 20,4');
    $show6 = $queryShow6->fetchAll();
    $queryShow7= $pdo->query('SELECT * FROM slideshow ORDER BY slideshow_id LIMIT 24,4');
    $show7 = $queryShow7->fetchAll();
    $queryShow8= $pdo->query('SELECT * FROM slideshow ORDER BY slideshow_id LIMIT 28,4');
    $show8 = $queryShow8->fetchAll();
?>
<!-- ***********Work&Portofolio******************  -->
<div id="work_portofolio">
    <div id="title">
        <?php foreach($work as $works):?>
        <div class="container">
            <h2><?php echo $works['title'];?></h2>
        </div>
        <hr>
        <div class="container">
            <p><?php echo $works['description'];?></p>
        </div>
        <?php endforeach;?>
    </div>
    <!-- ************Reasons***************  -->
    <div id="reasons">
        <div class="container">
            <div class="row">
                <?php foreach($reason as $reasons):?>
                <div class="colon ">
                    <div class="reason-box">
                        <h1><?php echo $reasons['title'];?></h1>
                        <p><?php echo $reasons['description'];?></p>
                    </div>
                </div>
                <div class="colon ">
                    <div class="reason-box">
                        <h1><?php echo $reasons['info'];?></h1>
                        <p><?php echo $reasons['info_plus'];?></p>
                    </div>
                </div>
                <?php endforeach;?>
                <?php foreach($reasonn as $reasonns):?>
                <div class="colon ">
                    <div class="reason-box">
                        <h1><?php echo $reasonns['title'];?></h1>
                        <p><?php echo $reasonns['description'];?></p>
                    </div>
                </div>
                <div class="colon ">
                    <div class="reason-box">
                    <h1><?php echo $reasonns['info'];?></h1>
                        <p><?php echo $reasonns['info_plus'];?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 id="h-portofolio">OUR AWESOME PORTFOLIO</h2>
    </div>
    <hr id="hr-portofolio">
    <!-- --------------Portofolio-----------------  -->
    <div class="portofolio">
        <div class="container">
            <div class="mySlider" id="firstslider" style="padding-left:90px">
                <div class="row" id="row_portofolio">
                    <div class="colon-portofolio">
                        <div class="box-portofolio">
                            <?php foreach($show as $shows):?>
                            <img src="admin/uploads/<?php echo $shows['image'];?>" alt="...">
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="row" id="row_portofolio2">
                    <div class="colon-portofolio">
                        <div class="box-portofolio">
                            <?php foreach($show2 as $shows2):?>
                            <img src="admin/uploads/<?php echo $shows2['image'];?>" alt="...">
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------------------- -->
            <div class="mySlider" style="padding-left:90px">
                <div class="row" id="row_portofolio">
                    <div class="colon-portofolio">
                        <div class="box-portofolio">
                        <?php foreach($show3 as $shows3):?>
                            <img src="admin/uploads/<?php echo $shows3['image'];?>" alt="...">
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="row" id="row_portofolio2">
                    <div class="colon-portofolio">
                        <div class="box-portofolio">
                            <?php foreach($show4 as $shows4):?>
                            <img src="admin/uploads/<?php echo $shows4['image'];?>" alt="...">
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mySlider" style="padding-left:90px"> 
                <div class="row" id="row_portofolio">
                    <div class="colon-portofolio">
                        <div class="box-portofolio">
                            <?php foreach($show5 as $shows5):?>
                            <img src="admin/uploads/<?php echo $shows5['image'];?>" alt="...">
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="row" id="row_portofolio2">
                    <div class="colon-portofolio">
                        <div class="box-portofolio">
                            <?php foreach($show6 as $shows6):?>
                            <img src="admin/uploads/<?php echo $shows6['image'];?>" alt="...">
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mySlider" style="padding-left:90px">
                <div class="row" id="row_portofolio">
                    <div class="colon-portofolio">
                        <div class="box-portofolio">
                            <?php foreach($show7 as $shows7):?>
                            <img src="admin/uploads/<?php echo $shows7['image'];?>" alt="...">
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="row" id="row_portofolio2">
                    <div class="colon-portofolio">
                        <div class="box-portofolio">
                            <?php foreach($show8 as $shows8):?>
                            <img src="admin/uploads/<?php echo $shows8['image'];?>" alt="...">
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pointers">
                <div class="dot">
                    <span onclick="currentSlide(1)"></span>
                    <span onclick="currentSlide(2)"></span>
                    <span onclick="currentSlide(3)"></span>
                    <span onclick="currentSlide(4)"></span>
                </div>
            </div>

        </div>
    </div>
</div>