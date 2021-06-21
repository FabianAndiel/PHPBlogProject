<?php require "../elements/html/header.php" ?>
<!--********************************************-->
<!-- START NAVBAR -->
<!--********************************************-->
<?php require "../elements/navbar.php" ?>
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

<?php require "../elements/html/footer.php" ?>