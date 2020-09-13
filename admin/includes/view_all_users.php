<table class = "table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>FirstName</th>
                      <th>LastName</th>
                      <th>Email</th>
                      <th>Role</th>
                    </tr>
                  </thead>

                   <tbody>
                   <?php 
                    $querry = "SELECT * FROM users";
                    $select_users = mysqli_query($connection, $querry);
                    while($row = mysqli_fetch_assoc($select_users)){
                      $userId = $row['user_id'];
                      $userName = $row['user_name'];
                      $userFirstName = $row['user_firstname'];
                      $userLastName = $row['user_lastname'];
                      $userEmail = $row['user_email'];
                      $userPass = $row['user_password'];
                      $userImage = $row['user_image'];
                      $userRole  = $row['user_role'];
                    

                      echo "<tr>";
                      echo "<td>$userId</td>";
                      echo "<td>$userName</td>";
                      echo "<td>$userFirstName</td>";
                      echo "<td>$userLastName</td>";
                      echo "<td>$userEmail</td>";
                      echo "<td>$userRole</td>";
                      echo "<td><a href='users.php?admin={$userId}'>Change To Admin</a></td>";
                      echo "<td><a href='users.php?user={$userId}'>Change to User</a></td>";
                      echo "<td><a href='users.php?delete={$userId}'>Delete</a></td>";
                    echo "<tr>";
                    }
                    
                   ?> 
                  
                </tbody>
                </table>
                <?php
                    if(isset($_GET['admin'])){
                        $the_user_id = $_GET['admin'];
                        $query = "UPDATE users SET user_role = 'admin'  WHERE user_id = {$the_user_id}";
                        $delete_query = mysqli_query($connection, $query);
                    }
               ?>
                <?php
                    if(isset($_GET['user'])){
                        $the_user_id = $_GET['user'];
                        $query = "UPDATE users SET user_role = 'user'  WHERE user_id = {$the_user_id}";
                        $delete_query = mysqli_query($connection, $query);
                    }
               ?>
               <?php
                    if(isset($_GET['delete'])){
                        $the_user_id = $_GET['delete'];
                        $query = "DELETE FROM users WHERE user_id = {$the_user_id}";
                        $delete_query = mysqli_query($connection, $query);
                    }
               ?>