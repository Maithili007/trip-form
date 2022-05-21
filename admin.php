<html>
<?php

if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
	$db = "trip";
error_reporting(0);
$connection= mysqli_connect("localhost","","trip");
$query = ("select * from information");
$query_run= mysqli_query($connection, $query);
$total= mysqli_num_rows($query_run);
$result= mysqli_fetch_assoc($query_run);
echo $result['name'];
echo total;
if(total!=0)
	{
	   while($row = $mysqli_fetch_assoc($query_run)) {
            
           echo"<tr>";
		   echo "<td>".$row['name']."</td>";
           echo "<td>".$row['age']."</td>";
           echo "<td>".$row['gender']."</td>";
           echo "<td>".$row['email']."</td>";
		   echo "<td>".$row['phone']."</td>";
		   echo "<td>".$row['other']."</td>";
		   echo "<td>".$row['date']."</td>";
		   echo "</tr>";
         }
           
          echo"</tbody>
      </table>";
	}    
         
        else {
         echo "No record found!!!";
        }
}
 ?>

<div class="container" style="margin-top:20px">
<div class="row">
<div class="col-md-12">

<div class="panel panel-info">
      <div class="panel-heading" align="center">Student Details</div>
      <div class="panel-body">
        <div class='table-responsive'>

       
          <table class='table table-striped'>
          <thead>
            <tr>
              <th>Name </th>
              <th>Age </th>
              <th>Gender </th>
              <th>Email </th>
			  <th>Phone </th>
			  <th>Other </th>
			   <th>Date</th>

           </tr>
	  </thead>	
	  <tbody>

      </div>
      </div><!-- Close panel Body -->

</div> <!-- Close Panel -->
</div>


</div> <!-- Close Row -->


</div> <!-- Close Container -->
        
</html>    
