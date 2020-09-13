<?php 
    ob_start(); 
   if(isset($_GET['id'])){
      $asset_id = $_GET['id'];
   }
                     $querry = "SELECT * FROM assets WHERE asset_id = $asset_id";
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
                    }
                   if(isset($_POST['update_asset'])){
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
                        $query = "SELECT * FROM assets WHERE asset_id =$asset_id ";
                        $select_image = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_image)){
                           $assetImage = $row['asset_image'];
                        }
                     }

                      move_uploaded_file($asset_image_temp, "../photos/$assetImage");
                      $query = "UPDATE assets SET ";
                      $query .= "asset_id = '$assetId', ";
                      $query .= "asset_title = '$assetTitle', ";
                      $query .= "asset_para1 = '$assetPara1', ";
                      $query .= "asset_para2 = '$assetPara2', ";
                      $query .= "asset_id_page = '$assetIdPage', ";
                      $query .= "asset_tags = '$assetTags', ";
                      $query .= "asset_status = '$assetStatus', ";
                      $query .= "asset_image = '$assetImage', ";
                      $query .= "asset_price = '$assetPrice' ";
                      $query .= "WHERE asset_id = {$asset_id} ";
                      $update_post = mysqli_query($connection, $query);
                      //confirmQuerry($update_post);
                   }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
         <label for="asset_id">Asset Id</label>
          <input value=<?php echo $assetId; ?> type="text"  class="form-control" name="id">
      </div>
      <div class="form-group">
         <label for="asset_title">Asset Title</label>
          <input value=<?php echo $assetTitle; ?> type="text" class="form-control" name="title">
      <div class="form-group">
         <label for="asset_para1">Assset Paragraph 1</label>
         <textarea  class="form-control "name="asset_content1" id="" cols="30" rows="10"><?php echo $assetPara1; ?>
         </textarea>
      </div>
      <div class="form-group">
         <label for="asset_para2">Assset Paragraph 2</label>
         <textarea  class="form-control "name="asset_content2" id="" cols="30" rows="10"><?php echo $assetPara2; ?>
         </textarea>
      </div>
      <div class="form-group">
         <label for="asset_id_page">Asset Id Page</label>
          <input value=<?php echo $assetIdPage; ?> type="text" class="form-control" name="id_page">
      </div>
      <div class="form-group">
         <label for="asset_tags">Asset Tags</label>
          <input value=<?php echo  $assetTags; ?> type="text" class="form-control" name="asset_tags">
      </div>
      <div class="form-group">
         <label for="asset_status">Asset Status</label>
          <input value=<?php echo $assetStatus; ?> type="text" class="form-control" name="asset_status">
      </div>
      <div class="form-group">
               <label for="asset_image">Asset Image</label>
               <div class="form-group">
                  <img width="100" src="../photos/<?php echo $assetImage?>" alt="">
                  <br> </br>
                  <input type="file"  name="image">
               </div>
      </div>
      <div class="form-group">
         <label for="asset_price">Asset Price</label>
          <input value=<?php echo  $assetPrice; ?> type="text" class="form-control" name="price">
      </div>
      <div class="form-group">
            <input class="btn btn-primary" type="submit" name="update_asset" value="Update">
      </div>
</form>