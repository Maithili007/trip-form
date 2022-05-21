<?php


include 'connection.php';

$id= $_GET['ids'];

$deletequery =("DELETE FROM trip WHERE id= $id");

$query= mysqli_query($con,$deletequery);
 
if($query){
    ?>
    <script>
        alert=('deleted Successful');
        </script>
  
        <?php
   header('location:display.php');
}
  else{
      ?>

    <script>
    alert=('not');
    </script>
    <?php
  }


?>