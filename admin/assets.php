<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <?php include "includes/head.php"?>
  <body>
    <div id="wrapper">
      
      <!-- Navigation -->
     <?php 
      include "includes/navigation.php";
      ?>

      <div id="page-wrapper">
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="row">
            <div class="col-lg-12">
                <?php
                  if(isset($_GET['source'])){
                    $source = $_GET['source'];
                  }else{
                    $source = "";
                  }
                switch($source){
                  case 'add_assets';
                  include "./includes/add_assets.php";
                  break;

                  case 'edit_assets';
                  include "./includes/edit_assets.php";
                  break;

                  case '50';
                  echo "NICE 50";
                  break;

                  default:
                  include "./includes/view_all_assets.php";
                  break;
                }
                ?>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
