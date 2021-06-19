<?php
/**
 * Copyright (c) CodeEngine Academy by Markus Lech. This is a Projekt from CodeEngine Academy. All rights reserved.
 ******************************************************************************/

require __DIR__."/src/init.php";
?>


<?php require "elements/html/header.php" ?>

<?php require "elements/navbar.php" ?>


<?php
    $postsRepository = $container->make("postsRepository");
    $posts = $postsRepository->fetchPosts();
?>


<br>
<h1 class="container col-6"> Meine Posts</h1>
<br>
<br>



<?php foreach ( $posts as $post): ?>
<div class="container col-6 card">
    <div class="card-header">
        Blogeintrag
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $post->title?></h5>
        <a href="/PHPBlogProject/pages/post.php?id=<?php echo $post->id?>" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br>
<?php endforeach; ?>



<?php require "elements/html/footer.php" ?>

