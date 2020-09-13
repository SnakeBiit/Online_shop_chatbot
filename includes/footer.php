
  <?php
      if(isset($_POST['modify'])){
          $modifyBudget = $_POST['modify_budget'];
         $user = $_SESSION['username'];
          $query = "UPDATE users SET budget='$modifyBudget' WHERE user_name='$user'";
          $update_budget = mysqli_query($connection, $query);
          if(!$update_budget){
            echo "Query Failed!" . mysqli_error($connection);
          }
          $_SESSION['budget'] =  $modifyBudget;
          
        }
  
  ?>
 
 <style>
      .modify{
        display:flex;
        justify-content:space-between;  
        margin:0;
        padding:0;
        margin-right:5rem;
        margin-left:5rem
      }
 
 </style>
 
 <footer>
<div class = "modify">
   <p style="color:#008000;">&copy;2020 Copyright</p>
    <a id="bottom" href="bot.php" class="fab fa-android fa-4x" style="color:#008000; display:block; padding:0; margin-left:2rem;"> </a>
            <form method = "post">

              <ul >
                      <input 
                        type="text"
                        name="modify_budget"
                        id=""
                        placeholder="Modify your budget: $"
                      />
                    
                      
                    
                      <button style ="background-color: Transparent; border:none;   color: white; cursor:pointer; " name="modify" type="submit"><i class="fas fa-cash-register fa-2x " ></i></button>
                   
                    </ul>
            </form>
 
 </div>
 
</footer>