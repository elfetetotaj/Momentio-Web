<?php 
    require 'dbconnect.php';
    $queryTop = $pdo -> query ('SELECT * FROM posts WHERE post_id=23 ');
    $top = $queryTop->fetchAll();
    $queryTwo = $pdo -> query ('SELECT * FROM posts WHERE post_id=24 ');
    $two = $queryTwo->fetchAll();
    $queryOffice = $pdo -> query ('SELECT * FROM posts WHERE post_id=25 ');
    $office = $queryOffice->fetchAll();
?>
<!-- ----------------Contact Us------------------------  -->
<div id="contact-Us">
    <div id="newsletter">
        <div class="container">
            <?php foreach($top as $tops ) : ?>
            <h2><?php echo $tops['title']; ?></h2>
            <p><span style="color: #FB6816;"><?php echo $tops ['description'];?> </span> <?php echo $tops['info'];?> <br> <?php echo $tops['info_plus'];?></p>
            <form >
                <input type="email" placeholder="Your email..." name="newsletter">
                <a href="admin/signup.php" class="button-signup">Sign Up</a>
            </form>
            <?php endforeach ;?>
        </div>
    </div>
    <div id="office">
        <iframe src="https://www.google.com/maps/d/embed?mid=1bewBJ5YA3KAnpbrnA_XcujiYOhM&hl=en" width="100%"
            height="580px" style="position: absolute;"></iframe>
        <div id="office_intro">
            <div id="con_office">
                <?php foreach($two as $twoo ):?>
                <h2><?php echo $twoo ['title'];?></h2>
                <p id="post-adress"><?php echo $twoo ['description'];?><br><?php echo $twoo ['info'];?><br><?php echo $twoo ['info_plus'];?></p>
                <?php endforeach;?>
                <?php foreach($office as $offices ):?>
                <p id="contact-data"><?php echo $offices ['description'];?><br><?php echo $offices ['info'];?></p>
                <?php endforeach;?>
                <div class="socials">
                    <p>Follow us:</p>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"><img src="images/Facebook.png"
                                    alt="..."></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank"><img src="images/Twitter.png"
                                    alt="..."></a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/" target="_blank"><img src="images/Dribble.png"
                                    alt=".."></a>
                        </li>
                        <li>
                            <a href="https://www.google.com/" target="_blank"><img src="images/Google.png"
                                    alt="..."></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" target="_blank"><img src="images/Youtube.png"
                                    alt="..."></a>
                        </li>
                        <li>
                            <a href="https://www.skype.com/en/" target="_blank"><img src="images/Skype.png"
                                    alt="..."></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>