<?php include "../includes/db.php" ?> 

<?php 
    if(isset($_GET['newpassword']) && isset($_GET['password']) ){
     $password = $_GET['newpassword'];
     $newpassword = $_GET['password'];
     $username = $_GET['username'];
    $password = mysqli_real_escape_string($connection, $password);
    $newpassword = mysqli_real_escape_string($connection, $newpassword);

    if($password === $newpassword ){
              $query = "SELECT randSalt FROM users";
              $select_rand_query=mysqli_query($connection, $query);
              if(!$select_rand_query){
                  die("Query Failed" . mysqli_error($connection));
              }
              while($row=mysqli_fetch_array($select_rand_query)){
              $salt = $row['randSalt'];
              }
              $password = crypt($password, $salt);
  
              $query = "UPDATE users SET ";
              $query .= "user_password = '$password' ";
              $query .= "WHERE user_name = '$username' ";
              $update_post = mysqli_query($connection, $query);
            }else{
               echo "<script>alert('The passwords are not the same');</script>";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/iconic/css/material-design-iconic-font.min.css"
    />
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

  </head>
  <body>
    <div class="limiter">
      <div
        class="container-login100"
        style="background-image: url('images/bg-01.jpg');"
      >
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <form  class="login100-form validate-form" methon = "post">
            <span class="login100-form-title p-b-49">
              Forgot Password?
            </span>
        
            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Username is reauired"
            >
              <span class="label-input100">Username</span>
              <input
                class="input100"
                type="text"
                name="username"
                placeholder="Type your username"
              />
              <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>


            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Password is reauired"
            >
              <span class="label-input100">New Password</span>
              <input
                class="input100"
                type="password"
                name="password"
                placeholder="Type your new password"
              />
              <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <span class="label-input100">Confirm Your New Password</span>
              <input
                class="input100"
                type="password"
                name="newpassword"
                placeholder="Confirm your new password"
              />
              <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" name="change_pass" type = "submit">
                  Change Your Password
                </button>
              </div>
            </div>

            <div class="flex-col-c p-t-155">
             

              <a href="../Register/register.php" class="txt2">
                Sign Up
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="dropDownSelect1"></div>

   
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

    
  </body>
</html>
