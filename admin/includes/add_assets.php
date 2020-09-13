<?php
    
    if(isset($_POST['create_asset'])){
        $asset_id = $_POST['id'];
        $asset_title = $_POST['title'];
        $asset_content1 = $_POST['asset_content1'];
        $asset_content2 = $_POST['asset_content2'];
        $asset_id_page = $_POST['id_page'];
        $asset_tags = $_POST['asset_tags'];
        $asset_status = $_POST['asset_status'];
        $asset_image = $_FILES['image']['name'];
        $asset_image_temp = $_FILES['image']['tmp_name'];
        $asset_price = $_POST['price'];
        move_uploaded_file($asset_image_temp, "../photos/$asset_image");

        $query = "INSERT INTO assets(asset_id, asset_title, asset_para1, asset_para2,asset_id_page,asset_tags,asset_status,asset_image,asset_price) ";
             
      $query .= "VALUES({$asset_id},'{$asset_title}','{$asset_content1}','{$asset_content2}','{$asset_id_page}','{$asset_tags}','{$asset_status}','{$asset_image}',{$asset_price}) "; 
             
      $create_asset_query = mysqli_query($connection, $query);  
      confirmQuerry($create_asset_query);
          
    }
    
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
         <label for="asset_id">Asset Id</label>
          <input type="text" class="form-control" name="id">
      </div>
      <div class="form-group">
         <label for="asset_title">Asset Title</label>
          <input type="text" class="form-control" name="title">
      <div class="form-group">
         <label for="asset_para1">Assset Paragraph 1</label>
         <textarea class="form-control "name="asset_content1" id="" cols="30" rows="10">
         </textarea>
      </div>
      <div class="form-group">
         <label for="asset_para2">Assset Paragraph 2</label>
         <textarea class="form-control "name="asset_content2" id="" cols="30" rows="10">
         </textarea>
      </div>
      <div class="form-group">
         <label for="asset_id_page">Asset Id Page</label>
          <input type="text" class="form-control" name="id_page">
      </div>
      <div class="form-group">
         <label for="asset_tags">Asset Tags</label>
          <input type="text" class="form-control" name="asset_tags">
      </div>
      <div class="form-group">
         <label for="asset_status">Asset Status</label>
          <input type="text" class="form-control" name="asset_status">
      </div>
      <div class="form-group">
         <label for="asset_image">Asset Image</label>         
         
          <input type="file"  name="image">
      </div>
      <div class="form-group">
         <label for="asset_price">Asset Price</label>
          <input type="text" class="form-control" name="price">
      </div>
      <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_asset" value="Publish Asset">
      </div>
</form>