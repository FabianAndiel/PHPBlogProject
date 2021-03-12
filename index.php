<?php
/**
 * Copyright (c) CodeEngine Academy. This is a Projekt from CodeEngine Academy. All rights reserved.
 ******************************************************************************/

$pdo = new PDO('mysql:host=localhost;dbname=udemyblog', 'udemyblog', 'geheim');

?>

<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>CodeEngine Academy - Mein Block</title>
</head>
<body>

<!--********************************************-->
<!-- START NAVBAR -->
<!--********************************************-->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
            CodeEngine Academy - Mein Block!
        </a>
    </div>
</nav>
<!--********************************************-->
<!-- END NAVBAR -->
<!--********************************************-->


<?php

$posts = $pdo->query("SELECT * FROM `posts`")

?>

<br>
<br>
<h1 class="container col-6"> Meine Posts</h1>
<br>
<br>


<!--********************************************-->
<!-- START POSTS -->
<!--********************************************-->


<?php foreach ( $posts as $post): ?>
<div class="container col-6 card">
    <div class="card-header">
        Blogeintrag
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $post['title'] ?></h5>
        <p class="card-text"><?php echo $post['content'] ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br>
<?php endforeach; ?>






<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>
