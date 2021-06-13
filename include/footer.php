 <!-- --------------Footer------------------------  -->
 <?php
    require 'dbconnect.php';
    $queryFooter = $pdo -> query('SELECT * FROM posts WHERE post_id=26');
    $footer = $queryFooter->fetchAll();
 ?>
 <div class="footer">
    <div class="container">
    <?php foreach($footer as $footers) : ?>
        <img class="logo" src="images/<?php echo $footers['image']?>" alt="..." onerror=this.src='images/logo-footer.png'>
        <a href="#top" class="toTop"><?php echo $footers['title']?></a>
        <p class="copiright" >&copy;<?php echo $footers['description']?></p>
    <?php endforeach; ?>    
    </div>
</div>