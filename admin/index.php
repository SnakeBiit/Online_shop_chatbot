
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
              <h1 class="page-header">
                Welcome to admin
                <?php echo $_SESSION['username'] ?>
              </h1>
              
            </div>
          </div>
          <!-- /.row -->
          <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

                  <?php
                      $query = "SELECT * FROM assets ";
                      $query_select = mysqli_query($connection,  $query);
                      $asset_count = mysqli_num_rows($query_select);
                      echo "<div class='huge'>{$asset_count}</div>";
                  ?> 
                  
                        <div>Assets</div>
                    </div>
                </div>
            </div>
            <a href="./assets.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     <?php
                      $query = "SELECT * FROM tools ";
                      $query_select = mysqli_query($connection,  $query);
                      $tool_count = mysqli_num_rows($query_select);
                      echo "<div class='huge'>{$tool_count}</div>";
                   ?> 
                      <div>Tools</div>
                    </div>
                </div>
            </div>
            <a href="./tools.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                      $query = "SELECT * FROM users ";
                      $query_select = mysqli_query($connection,  $query);
                      $user_count = mysqli_num_rows($query_select);
                      echo "<div class='huge'>{$user_count}</div>";
                   ?> 
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
 
</div>


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
