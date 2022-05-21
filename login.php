<html>  
<head>  
    <title>Admin Login</title>  
      
       
</head>  
<body>  
 <link rel = "stylesheet" type = "text/css" href = "style1.css">    

<form style ="background-image: url('bg2.png');"action="" method="post" name="Login_Form">
  <table width="400" height="725" border="0" align="center" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="1" align="center" ><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr><td colspan="2" align="center"><h1 style=color:red >ADMIN LOGIN</h1></td></tr>
    <tr><td align="center" style=color:black:bold>Username:</td><td><input name="Username" type="text" class="Input"></td></tr>
    <tr>
      <td align="center" style=color:black>Password:</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"  onClick="location:/display.php"></td>
    </tr>
  </table>
  
</form>
<?php session_start(); /* Starts the session */
        
        /* Check Login form submitted */        
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('omkar' => '1234','username1' => 'password1','username2' => 'password2');
                $logins = array('maithili' => '****','username1' => 'password1','username2' => 'password2');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:display.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
?>