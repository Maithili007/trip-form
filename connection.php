<?php

$username="root";
$password="";
$server='localhost';
$db = 'dbms';

$con = mysqli_connect($server,$username,$password,$db);

if($con){



  ?>
  <script>
      alert=('connection Successful');
      </script>

      <?php

}
else{
    die("no connection ". mysqli_connect_error());

}
?>