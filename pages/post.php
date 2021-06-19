<?php
/**
 * Copyright (c) CodeEngine Academy by Markus Lech. This is a Projekt from CodeEngine Academy. All rights reserved.
 ******************************************************************************/

require __DIR__."./../src/init.php";
?>


<?php require "../elements/html/header.php" ?>
<!--********************************************-->
<!-- START NAVBAR -->
<!--********************************************-->
<?php require "../elements/navbar.php" ?>
<!--********************************************-->
<!-- END NAVBAR -->
<!--********************************************-->


<?php
    $postsRepository = $container->getRepository();
    $id = $_GET['id'];
    $posts = $postsRepository->fetchPost($id);

    var_dump($postsRepository);
?>


<br>
<br>
<h1 class="container col-6"> Meine Posts</h1>
<br>
<br>


<!--********************************************-->
<!-- START POSTS -->
<!--********************************************-->



<div class="container col-6 card">
    <div class="card-header">
        Blogeintrag
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $posts->title ?></h5>
       <p><?php echo nl2br($posts->content) ?>  </p>
    </div>
</div>
<br>

<?php require "../elements/html/footer.php" ?>