



<!DOCTYPE html>
<html>
    <heed>
       
        <?php include 'links.php';?>
             
 </head>
 <body>

 
 
<div class="container" style="margin-top:20px">
<div class="row">
<div class="col-md-12">

<div class="panel panel-info">
      <h1 class="panel-heading" align="center">Student Details</h1><br>
      <div class="panel-body">
      <div><a href="INDEX.php">+ ADD NEW RECORD</a></div>
        <div class='table-responsive'>

       
          <table class='table table-striped'>
          <thead>
            <tr>
            <th>Id </th>
              <th>Name </th>
              <th>Age </th>
              <th>Gender </th>
              <th>Email </th>
			  <th>Phone </th>
			  <th>Other </th>
			   <th>Date</th>
         <th colspan="2">Operation</th>

           </tr>
	  </thead>	
	  <tbody>

      </div>
      </div><!-- Close panel Body -->

</div> <!-- Close Panel -->
</div>


</div> <!-- Close Row -->


</div> 


             
             <tbody>
             <?php

              include 'connection.php';

               $selectquery =" select * from trip";

               $query =mysqli_query($con , $selectquery);

              $nums = mysqli_num_rows($query);

              while($res = mysqli_fetch_array($query)){
                          
             ?>
    
    

                    <tr>
                     <td><?php echo $res['id']; ?></td>  
                     <td><?php echo $res['name']; ?></td>
                     <td><?php echo $res['age']; ?></td>
                     <td><?php echo $res['gender']; ?></td>
                     <td><?php echo $res['email']; ?></td>
                     <td><?php echo $res['phone']; ?></td>
                     <td><?php echo $res['other']; ?></td>
                     <td><?php echo $res['date']; ?></td>
                     
                     <td><a href="UPDATE.php?id=<?php echo $res['id']; ?>"data-toggle="tooltip" data-placement="top" title="UPDATE">
                     <i class="fa fa-edit" aria-hidden="true"></i></a></td>
                     <td><a href="delete.php?ids=<?php echo $res['id']; ?> "data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php

                 }
                     ?>
                         
                    
                 </tbody>
                </table>
            </div>
        </div>
  </div>
  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
 </body>
</html>


