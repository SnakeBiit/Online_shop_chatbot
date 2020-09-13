<table class = "table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Asset Id</th>
                      <th>Asset Title</th>
                      <th>Assset Paragraph 1</th>
                      <th>Assset Paragraph 2</th>
                      <th>Assset Id Page</th>
                      <th>Tags</th>
                      <th>Status</th>
                      <th>Image</th>
                      <th>Price</th>
                    </tr>
                  </thead>

                   <tbody>
                   <?php 
                    $querry = "SELECT * FROM assets";
                    $select_posts = mysqli_query($connection, $querry);
                    while($row = mysqli_fetch_assoc($select_posts)){
                      $assetId = $row['asset_id'];
                      $assetTitle = $row['asset_title'];
                      $assetPara1 = $row['asset_para1'];
                      $assetPara2 = $row['asset_para2'];
                      $assetIdPage = $row['asset_id_page'];
                      $assetTags = $row['asset_tags'];
                      $assetStatus = $row['asset_status'];
                      $assetImage = $row['asset_image'];
                      $assetPrice = $row['asset_price'];

                      echo "<tr>";
                      echo "<td>$assetId</td>";
                      echo "<td>$assetTitle</td>";
                      echo "<td>$assetPara1</td>";
                      echo "<td>$assetPara2</td>";
                      echo "<td>$assetIdPage</td>";
                      echo "<td>$assetTags</td>";
                      echo "<td>$assetStatus</td>";
                      echo "<td><img width='200' src='../photos/$assetImage' alt='image'></td>";
                      echo "<td>$assetPrice</td>";
                       echo "<td><a href='assets.php?source=edit_assets&id={$assetId}'>Edit</a></td>";
                      echo "<td><a href='assets.php?delete={$assetId}'>Delete</a></td>";
                    echo "<tr>";
                    }
                    
                   ?> 
                  
                </tbody>
                </table>
                
               <?php
                    if(isset($_GET['delete'])){
                        $the_asset_id = $_GET['delete'];
                        $query = "DELETE FROM assets WHERE asset_id = {$the_asset_id}";
                        $delete_query = mysqli_query($connection, $query);
                    }
               ?>