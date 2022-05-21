
<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE trip  set name ='" . $_POST['name'] . "',age='" . $_POST['age'] . "', 
 gender='" . $_POST['gender'] . "' ,email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "' ,
 other='" . $_POST['desc'] . "'  WHERE name='" . $_POST['name'] . "'");
//  " UPDATE trip  set id='$id' , 'name' ='$name',age='$age', gender='$gender',email='$email',phone='$phone',other='$desc'  where id= '$ids'";
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM trip WHERE id ='" . $_GET['id'] . "'");
$res= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to  update Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="DPES">
    <div class="container">
        <h1>Welcome to DPES Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
       
        <form  name="index.php" action="" method="post">
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><a href="display.php">Student List</a></div>

            <input type="text" name="name" id="name" placeholder="Enter your name" VALUES="<?php echo $res['name']; ?>">
            <input type="text" name="age" id="age" placeholder="Enter your Age"VALUES="<?php echo $res['age']; ?>">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender"VALUES="<?php echo $res['gender']; ?>">
            <input type="email" name="email" id="email" placeholder="Enter your email"VALUES="<?php echo $res['email']; ?>">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone" VALUES="<?php echo $res['phone']; ?>">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="If any suggestion"VALUES="<?php echo $res['other']; ?>"></textarea>
            <button class="btn">update</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>


