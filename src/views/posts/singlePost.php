<?php require __DIR__."/../../../elements/html/header.php" ?>
<!--********************************************-->
<!-- START NAVBAR -->
<!--********************************************-->
<?php require __DIR__."/../../../elements/html/header.php" ?>
<!--********************************************-->
<!-- END NAVBAR -->
<!--********************************************-->


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
        <h5 class="card-title"><?php echo $post->title ?></h5>
       <p><?php echo nl2br($post->content) ?>  </p>
    </div>
</div>
<br>

<?php require __DIR__."/../../../elements/html/footer.php" ?>