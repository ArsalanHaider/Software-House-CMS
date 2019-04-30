<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets\css\nstyle.css">
</head>
<body  background="assets\img\bg.jpg">

<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3>Login here</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Email" autofocus required/>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required/>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"/>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  passwordd='$password' and email='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['id']=$row['id'];
					header('location:index.php');
					
				}
			else
				{
                    echo '
                    <font color="white">Invalid username or password!</font>.
                     ';
				}
		}
  ?>

  
</div>

</body>
</html>