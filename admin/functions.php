<?php 
    function confirmQuerry($result){
        global $connection;
        if(!$result){
            die("QUERY FAILED! ." . mysqli_error($connection));
        }
       
    }

?>