<?php include 'includes/head.php'?>
<?php include 'includes/header.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search</title>
  </head>
  <body>
  <div class="container boxes">
    <main role="main">
        <?php 
              if(isset($_POST['search'])){
                $search = $_POST['search'];
                $querry = "SELECT * FROM assets WHERE asset_tags LIKE '%$search%' ";
                $search_query = mysqli_query($connection, $querry);
                if(!$search_query){
                  die("QUERY FAILED" . mysqli_error($connection));
                }
                $count = mysqli_num_rows( $search_query);
                if($count == 0 ){
                   echo "<h1 style='color:black;'>NO RESULT</h1>";
                }else{
              while($row = mysqli_fetch_assoc($search_query)){
              $asset_title = $row['asset_title'];
              $asset_text1 = $row['asset_para1'];
              $asset_text2 = $row['asset_para2'];
              $asset_id_page = $row['asset_id_page'];
              $asset_image = $row['asset_image'];
              $asset_price = $row['asset_price'];
        ?>
        <h1 class="titlu" style="color:#41c0cc;">Assets</h1>    
        <article class="article-featured" id = <?php echo $asset_id_page ?>>
          <div class="article-featured-main">
            <img src="./photos/<?php echo $asset_image?>" alt="" class="featured-image" style ="width:25rem" />
            <button
              class="addToCart"
              type="button"
            >
              Add to Cart
            </button>
            <span class="pret">$<?php echo $asset_price ?></span>
          </div>
          <div class="article-featured-secondary">
            <h1 class="featured-heading1"><?php echo $asset_title ?></h1>
            <h2 class="featured-heading2">Key Features</h2>
            <p class="featured-paragraph">
                <?php echo $asset_text1 ?>
            </p>
            <h2 class="featured-heading2">Assets</h2>
            <p class="featured-paragraph">
                <?php echo $asset_text2 ?>
            </p>
          </div>
        </article>
         
       <?php }  
      }
              }
       ?>
   </main>
    <?php include 'includes/sidebar.php'?>
  </div>
  </body>
  <?php include 'includes/footer.php'?>
</html>
