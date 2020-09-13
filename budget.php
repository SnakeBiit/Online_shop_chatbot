<?php
  if(isset($_SESSION['budget'])){
          $user_price = $_SESSION['budget'];
        
          $query = "SELECT * FROM assets ";
            $select_asset_query = mysqli_query($connection, $query); 
            if(!$select_asset_query){
              die("QUERY FAILED!". mysqli_error($connection));
            }
            $prices = array();
            while($row = mysqli_fetch_array($select_asset_query)){
              $title = $row['asset_title'];
              $prices[$title]= $row['asset_price'];
            }
            asort($prices, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
        
          
        function getClosest($search, $arr) {
        $closest = null;
        foreach ($arr as $item) {
            if ($closest === null || abs($search - $closest) > abs($item - $search)) {
              $closest = $item;
            }
        }
        return $closest;
      }
           $perfect_price =getClosest($user_price, $prices);
           $_SESSION['perfect_price'] = $perfect_price;
          
    }

?>