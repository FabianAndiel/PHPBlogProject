<?php
/**
 * Copyright (c) CodeEngine Academy by Markus Lech. This is a Projekt from CodeEngine Academy. All rights reserved.
 ******************************************************************************/

require __DIR__."/src/init.php";
?>


<?php require "elements/html/header.php" ?>

<?php require "elements/navbar.php" ?>


<?php
    $postsController = $container->make("postsController");
    $postsController->index();

?>




<?php require "elements/html/footer.php" ?>

