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
        <h5 class="card-title"><?php echo html(nl2br($post->title)) ?></h5>
       <p><?php echo html(nl2br($post->content)) ?>  </p>
    </div>
</div>
<br>


<?php foreach ( $comments as $comment): ?>
<div class="container col-6 card">
    <div class="card-header">
        Kommentar <?php echo html($comment->id) ?> Post ID <?php echo html($comment->id) ?> 
    </div>
    <div class="card-body">
        <p> 
            <?php echo html($comment->content) ?>
        </p>
    </div>
</div>
<br>
<?php endforeach; ?>



<form method="POST">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Dein Kommentar</label>
    <textarea name="CommentText" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button type="submit" name="SendCommentButton"> Kommentar absenden</button>
  </div>
</form>

<?php 
var_dump($_POST);
?>



<?php require __DIR__."/../../../elements/html/footer.php" ?>