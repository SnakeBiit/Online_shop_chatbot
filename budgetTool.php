<?php
  if(isset($_SESSION['budget'])){
          $user_price = $_SESSION['budget'];
        
          $query = "SELECT * FROM tools ";
            $select_tool_query = mysqli_query($connection, $query); 
            if(!$select_tool_query){
              die("QUERY FAILED!". mysqli_error($connection));
            }
            $prices = array();
            while($row = mysqli_fetch_array($select_tool_query)){
              $title = $row['tool_title'];
              $prices[$title]= $row['tool_price'];
            }
            asort($prices, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
          
          
        function getClosestTool($search, $arr) {
        $closest = null;
        foreach ($arr as $item) {
            if ($closest === null || abs($search - $closest) > abs($item - $search)) {
              $closest = $item;
            }
        }
        return $closest;
      }
          $perfect_price =getClosestTool($user_price, $prices);
          $_SESSION['priceTool'] = $perfect_price;
        
    }

?>