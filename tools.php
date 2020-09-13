<?php include './includes/head.php' ?>
 <?php include 'includes/headerTool.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tools</title>
</head>
  <body>
  <div class="container boxes">
    
    <main role="main">
        <h1 class="titlu" style="color:#41c0cc;">Tools</h1>
        <?php
              $querry = "SELECT * FROM tools";
              $select_all_assets = mysqli_query($connection, $querry);
              while($row = mysqli_fetch_assoc($select_all_assets)){
              $assetId = $row['tool_id'];
              $asset_title = $row['tool_title'];
              $asset_text1 = $row['tool_para1'];
              $asset_text2 = $row['tool_para2'];
              $asset_id_page = $row['tool_id_page'];
              $asset_image = $row['tool_image'];
              $asset_price = $row['tool_price'];
        ?>

        <article class="article-featured" id = <?php echo $asset_id_page ?>>
          <div class="article-featured-main">
            <img src="./photos/<?php echo $asset_image?>" alt="" class="featured-image" style = "width: 25rem" />
            <button
              class="addToCart"
              type="button"
            >
              Add to Cart
            </button>
            <span class="pret">$<?php echo $asset_price ?></span>
          </div>
          <div style="width:80%" class="article-featured-secondary">
            <a href="showTool.php?id=<?php echo $assetId ?>" class="featured-heading1"><?php echo $asset_title ?></a>
            <h2 class="featured-heading2">Key Features</h2>
            <p  class="featured-paragraph">
                <?php echo $asset_text1 ?>
            </p>
            <h2 class="featured-heading2">Tools</h2>
            <p class="featured-paragraph">
                <?php echo $asset_text2 ?>
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