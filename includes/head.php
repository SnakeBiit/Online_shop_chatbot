<?php include 'db.php' ?>
<?php session_start(); ?>
<?php
      if(!isset($_SESSION['user_role'])){
      header("Location: ../logout.php");
    }
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="../JS/store.js"></script>

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/2b37d2c221.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite:300&display=swap" rel="stylesheet">
    <!-- FONTAWESOME END -->
    <style>
      ::placeholder {
        color: white;
        opacity: 0.5;
      }
    </style>
  </head>