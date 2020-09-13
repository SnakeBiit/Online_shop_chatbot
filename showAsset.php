<?php include './includes/head.php' ?>
 <?php include 'includes/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Asset</title>
</head>
  <body>
  <div class="container boxes">
    
    <main role="main">
        <?php
            if(isset($_GET['id'])){
                $assetId = $_GET['id'];
            }
              $querry = "SELECT * FROM assets WHERE asset_id = $assetId ";
              $select_all_assets = mysqli_query($connection, $querry);
              while($row = mysqli_fetch_assoc($select_all_assets)){
              $assetId = $row['asset_id'];
              $asset_title = $row['asset_title'];
              $asset_text1 = $row['asset_para1'];
              $asset_text2 = $row['asset_para2'];
              $asset_id_page = $row['asset_id_page'];
              $asset_image = $row['asset_image'];
              $asset_price = $row['asset_price'];
              $asset_description = $row['asset_description'];
        ?>

        <article class="article-featured" id = <?php echo $asset_id_page ?>>
          <div class="article-featured-main">
            <img src="./photos/<?php echo $asset_image?>" alt="" class="featured-image" style = "width: 25rem;" />
            <button
              class="addToCart"
              type="button"
            >
              Add to Cart
            </button>
            <span class="pret">$<?php echo $asset_price ?></span>
          </div>
          <div class="article-featured-secondary">
            <h1  class="featured-heading1"><?php echo $asset_title ?></h1>
            <h2 class="featured-heading2">Key Features</h2>
            <p class="featured-paragraph">
                <?php echo $asset_text1 ?>
            </p>
            <h2 class="featured-heading2">Assets</h2>
            <p class="featured-paragraph">
                <?php echo $asset_text2 ?>
            </p>
            <h2 class="featured-heading2">Description</h2>
            <p class="featured-paragraph">
              <?php echo $asset_description ?>
            </p>
          </div>
        </article>
       <?php } ?> 
   </main>
   <?php include 'includes/sidebar.php'?>
  </div>
  </body>
  <?php include 'includes/footer.php'?>
</html>