<?php
    
    if(isset($_POST['create_user'])){
        $firstName = $_POST['user_firstname'];
        $lastName = $_POST['user_lastname'];
        $userName = $_POST['user_name'];
        $userEmail = $_POST['user_email'];
        $userPass = $_POST['user_password'];
        $user_role = $_POST['user_role'];
        
        $querySalt = "SELECT randSalt FROM users";
        $select_rand_query=mysqli_query($connection, $querySalt);
        if(!$select_rand_query){
            die("Query Failed" . mysqli_error($connection));
        }
        while($row=mysqli_fetch_array($select_rand_query)){
        $salt = $row['randSalt'];
        }
        $userPass = crypt($userPass, $salt);


        $query = "INSERT INTO users(user_name, user_firstname, user_lastname, user_email, user_password, user_role ) ";
             
      $query .= "VALUES('{$userName}','{$firstName}','{$lastName}','{$userEmail}','{$userPass}','{$user_role}') "; 
             
      $create_asset_query = mysqli_query($connection, $query);  
      confirmQuerry($create_asset_query);
          
    }
    
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
         <label for="asset_id">User First Name</label>
          <input type="text" class="form-control" name="user_firstname">
      </div>
      <div class="form-group">
         <label for="asset_title">User Last Name</label>
          <input type="text" class="form-control" name="user_lastname">
      <div class="form-group">
         <label for="asset_para1">UserName</label>
          <input type="text" class="form-control" name="user_name">
         
      </div>
      <div class="form-group">
         <label for="asset_para2">User Email</label>
          <input type="text" class="form-control" name="user_email">
         
      </div>
      <div class="form-group">
         <label for="asset_id_page">User Password</label>
          <input type="password" class="form-control" name="user_password">
      </div>
      <div class="form-group">
         <label for="asset_tags">User Role</label>
          <input type="text" class="form-control" name="user_role">
      </div>
      <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_user" value="Create User">
      </div>
</form>