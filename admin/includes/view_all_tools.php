<table class = "table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Tool Id</th>
                      <th>Tool Title</th>
                      <th>Tool Paragraph 1</th>
                      <th>Tool Paragraph 2</th>
                      <th>Tool Id Page</th>
                      <th>Tags</th>
                      <th>Status</th>
                      <th>Image</th>
                      <th>Price</th>
                    </tr>
                  </thead>

                   <tbody>
                   <?php 
                    $querry = "SELECT * FROM tools";
                    $select_tools = mysqli_query($connection, $querry);
                    while($row = mysqli_fetch_assoc($select_tools)){
                      $assetId = $row['tool_id'];
                      $assetTitle = $row['tool_title'];
                      $assetPara1 = $row['tool_para1'];
                      $assetPara2 = $row['tool_para2'];
                      $assetIdPage = $row['tool_id_page'];
                      $assetTags = $row['tool_tags'];
                      $assetStatus = $row['tool_status'];
                      $assetImage = $row['tool_image'];
                      $assetPrice = $row['tool_price'];

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
                       echo "<td><a href='tools.php?source=edit_tools&idTool={$assetId}'>Edit</a></td>";
                      echo "<td><a href='tools.php?deleteTools={$assetId}'>Delete</a></td>";
                    echo "<tr>";
                    }
                    
                   ?> 
                  
                </tbody>
                </table>
                
               <?php
                    if(isset($_GET['deleteTools'])){
                        $the_asset_id = $_GET['deleteTools'];
                        $query = "DELETE FROM tools WHERE tool_id = {$the_asset_id}";
                        $delete_query = mysqli_query($connection, $query);
                    }
               ?>