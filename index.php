<?php require_once("includes/header.php"); ?>
<?php
    if(isset($_SESSION["userLoggedIn"])) {
        echo "User is logged in as " . $userLoggedInObj->getUsername();
    } else {
        echo "Not logged in";
    }
?>
<?php require_once("includes/footer.php"); ?>
