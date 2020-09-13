<?php 
    ob_start(); 
   if(isset($_GET['idTool'])){
      $asset_id = $_GET['idTool'];
   }
                     $querry = "SELECT * FROM tools WHERE tool_id = $asset_id";
                    $select_posts = mysqli_query($connection, $querry);
                    while($row = mysqli_fetch_assoc($select_posts)){
                      $assetId = $row['tool_id'];
                      $assetTitle = $row['tool_title'];
                      $assetPara1 = $row['tool_para1'];
                      $assetPara2 = $row['tool_para2'];
                      $assetIdPage = $row['tool_id_page'];
                      $assetTags = $row['tool_tags'];
                      $assetStatus = $row['tool_status'];
                      $assetImage = $row['tool_image'];
                      $assetPrice = $row['tool_price'];
                    }
                   if(isset($_POST['update_tool'])){
                      $assetId = $_POST['id'];
                      $assetTitle = $_POST['title'];
                      $assetPara1 = $_POST['asset_content1'];
                      $assetPara2 = $_POST['asset_content2'];
                      $assetIdPage = $_POST['id_page'];
                      $assetTags =$_POST['asset_tags'];
                      $assetStatus = $_POST['asset_status'];
                      $assetImage = $_FILES['image']['name'];
                      $asset_image_temp = $_FILES['image']['tmp-name'];   
                      $assetPrice =$_POST['price'];
                     
                     if(empty($assetImage)){
                        $query = "SELECT * FROM tools WHERE tool_id =$asset_id ";
                        $select_image = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_image)){
                           $assetImage = $row['tool_image'];
                        }
                     }

                      move_uploaded_file($asset_image_temp, "../photos/$assetImage");
                      $query = "UPDATE tools SET ";
                      $query .= "tool_id = '$assetId', ";
                      $query .= "tool_title = '$assetTitle', ";
                      $query .= "tool_para1 = '$assetPara1', ";
                      $query .= "tool_para2 = '$assetPara2', ";
                      $query .= "tool_id_page = '$assetIdPage', ";
                      $query .= "tool_tags = '$assetTags', ";
                      $query .= "tool_status = '$assetStatus', ";
                      $query .= "tool_image = '$assetImage', ";
                      $query .= "tool_price = '$assetPrice' ";
                      $query .= "WHERE tool_id = {$asset_id} ";
                      $update_post = mysqli_query($connection, $query);
                      //confirmQuerry($update_post);
                   }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
         <label for="asset_id">Tool Id</label>
          <input value=<?php echo $assetId; ?> type="text"  class="form-control" name="id">
      </div>
      <div class="form-group">
         <label for="asset_title">Tool Title</label>
          <input value=<?php echo $assetTitle; ?> type="text" class="form-control" name="title">
      <div class="form-group">
         <label for="asset_para1">Tool Paragraph 1</label>
         <textarea  class="form-control "name="asset_content1" id="" cols="30" rows="10"><?php echo $assetPara1; ?>
         </textarea>
      </div>
      <div class="form-group">
         <label for="asset_para2">Tool Paragraph 2</label>
         <textarea  class="form-control "name="asset_content2" id="" cols="30" rows="10"><?php echo $assetPara2; ?>
         </textarea>
      </div>
      <div class="form-group">
         <label for="asset_id_page">Tool Id Page</label>
          <input value=<?php echo $assetIdPage; ?> type="text" class="form-control" name="id_page">
      </div>
      <div class="form-group">
         <label for="asset_tags">Tool Tags</label>
          <input value=<?php echo  $assetTags; ?> type="text" class="form-control" name="asset_tags">
      </div>
      <div class="form-group">
         <label for="asset_status">Tool Status</label>
          <input value=<?php echo $assetStatus; ?> type="text" class="form-control" name="asset_status">
      </div>
      <div class="form-group">
               <label for="asset_image">Tool Image</label>
               <div class="form-group">
                  <img width="100" src="../photos/<?php echo $assetImage?>" alt="">
                  <br> </br>
                  <input type="file"  name="image">
               </div>
      </div>
      <div class="form-group">
         <label for="asset_price">Tool Price</label>
          <input value=<?php echo  $assetPrice; ?> type="text" class="form-control" name="price">
      </div>
      <div class="form-group">
            <input class="btn btn-primary" type="submit" name="update_tool" value="Update">
      </div>
</form>