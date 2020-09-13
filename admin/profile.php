<?php include "functions.php"; ?>
 <?php include "includes/head.php"?>
<?php
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $query = "SELECT * FROM users WHERE user_name = '{$username }' ";
        $select_user = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($select_user)){
                    $userId = $row['user_id'];
                      $userName = $row['user_name'];
                      $userFirstName = $row['user_firstname'];
                      $userLastName = $row['user_lastname'];
                      $userEmail = $row['user_email'];
                      $userPass = $row['user_password'];
                      $userImage = $row['user_image'];
                      $userRole  = $row['user_role'];
        }
    }
?> 
<?php
    if(isset($_POST['update_user'])){
                      $userName = $_POST['user_name'];
                      $userFirstName = $_POST['user_firstname'];
                      $userLastName = $_POST['user_lastname'];
                      $userEmail = $_POST['user_email'];
                      $userPass = $_POST['user_password'];
                    
                      $userRole  = $_POST['user_role'];
                
                     $querySalt = "SELECT randSalt FROM users";
                     $select_rand_query=mysqli_query($connection, $querySalt);
                        if(!$select_rand_query){
                            die("Query Failed" . mysqli_error($connection));
                        }
                        while($row=mysqli_fetch_array($select_rand_query)){
                        $salt = $row['randSalt'];
                        }
                        $userPass = crypt($userPass, $salt);

                      $query = "UPDATE users SET ";
                      $query .= "user_name = '$userName', ";
                      $query .= "user_firstname = '$userFirstName', ";
                      $query .= "user_lastname = '$userLastName', ";
                      $query .= "user_email = '$userEmail', ";
                      $query .= "user_password = '$userPass', ";
                      $query .= "user_role = '$userRole' ";
                      $query .= "WHERE user_name = '{$userName}' ";
                      $update_post = mysqli_query($connection, $query);
                      confirmQuerry($update_post);
                   }

?>
<!DOCTYPE html>
<html lang="en">
 
  <body>
    <div id="wrapper">
      
      <!-- Navigation -->
     <?php 
      include "includes/navigation.php";
      ?>

      <div id="page-wrapper">
        <div class="container-fluid">
          <!-- Page Heading -->
          
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="asset_id">User First Name</label>
                            <input value = "<?php echo $userFirstName ?>" type="text" class="form-control" name="user_firstname">
                        </div>
                        <div class="form-group">
                            <label for="asset_title">User Last Name</label>
                            <input value = "<?php echo $userLastName ?>" type="text" class="form-control" name="user_lastname">
                        <div class="form-group">
                            <label for="asset_para1">UserName</label>
                            <input value = "<?php echo $userName ?>" type="text" class="form-control" name="user_name">
                            
                        </div>
                        <div class="form-group">
                            <label for="asset_para2">User Email</label>
                            <input value = "<?php echo $userEmail ?>" type="text" class="form-control" name="user_email">
                            
                        </div>
                        <div class="form-group">
                            <label for="asset_id_page">User Password</label>
                            <input value = "<?php echo $userPass ?>" type="password" class="form-control" name="user_password">
                        </div>
                        <div class="form-group">
                            <label for="asset_tags">User Role</label>
                            <input value = "<?php echo $userRole ?>" type="text" class="form-control" name="user_role">
                        </div>
                        <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="update_user" value="Update">
                        </div>
                    </form>
            
         
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


<!--
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
         <label for="asset_id">First Name</label>
          <input value=<?php echo $assetId; ?> type="text"  class="form-control" name="id">
      </div>
      <div class="form-group">
         <label for="asset_title">Last Name</label>
          <input value=<?php echo $assetTitle; ?> type="text" class="form-control" name="title">
      <div class="form-group">
         <label for="asset_para1">Username</label>
         <textarea  class="form-control "name="asset_content1" id="" cols="30" rows="10"><?php echo $assetPara1; ?>
         </textarea>
      </div>
      <div class="form-group">
         <label for="asset_id_page">Role</label>
          <input value=<?php echo $assetIdPage; ?> type="text" class="form-control" name="id_page">
      </div>
      <div class="form-group">
         <label for="asset_tags">Email</label>
          <input value=<?php echo  $assetTags; ?> type="text" class="form-control" name="asset_tags">
      </div>
      <div class="form-group">
         <label for="asset_status">Password</label>
          <input value=<?php echo $assetStatus; ?> type="text" class="form-control" name="asset_status">
      </div>
      
</form>