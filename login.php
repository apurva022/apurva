<?php 
require("database/connection.php");
if(isset($_SESSION['id'])){
		header("Location:admin.php");
	}
if(isset($_POST['LoginBtn'])){
		$email = $_POST['useremail'];
		$pass = $_POST['userpass'];
		$check = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$email' AND password = '$pass'");
		if(mysqli_num_rows($check)>0){
				$fetch = mysqli_fetch_array($check);
				$_SESSION['id'] = $fetch['id'];
				header("Location:admin.php");
			}
		else {
				echo "wrong username or password<br>Create account <a href='signup.php'>Click</a>";
			}	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name="viewport"  content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/astyle.css">
</head>
<script>  
function validatefor(){  
  
var password=document.myform.userpass.value;  
  
var x=document.myform.useremail.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  

<body>
	<div class="login">
		<h1>Login</h1>
	<form name="myform" method="post" onsubmit="return validatefor()">
			<div class="fields">
					<h5>Email:</h5>
					<input type="text" class="textfield" name="useremail" >
		    </div>
		    <div class="fields">
					<h5>Password:</h5>
					<input type="password" class="textfield" name="userpass" >
		    </div>
		    <div class="loginbutton">
		    	<input type="submit"  name="LoginBtn" value="login">
		    </div>
	</form>
</div>
</body>
</html>