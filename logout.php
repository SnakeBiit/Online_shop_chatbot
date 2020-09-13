<?php session_start(); ?>
<?php
    $_SESSION['username'] = null;
    $_SESSION['user_firstname'] = null;
    $_SESSION['user_lastname'] = null;
    $_SESSION['user_role'] = null;
    $_SESSION['perfect_price'] = null;
   // $_SESSION['budget'] = null;
     $_SESSION['priceTool'] = null;
    header("Location: ../LogIn/login.php");
?>