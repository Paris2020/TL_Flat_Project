<?php

	function rivertToLogin(){
		?>
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">

				<html xmlns = "http://www.w3.org/1999/xhtml" >
				<head><title>Login Page</title>
				<LINK href="css/main.css" rel="stylesheet" type="text/css">
				</head>
				
				<body>
				<form id="frmLogin" action="loginForm.php" method="post">
				<table name="loginTable" id="loginTable" border="2">
				<tr style = "text-align:center"><th colspan="2">SIGN-UP</th>
				</tr>
				
				<tr><td>Username:<input type="text" name="userN" id="userN" value="" /></td>
				</tr>
				
				<tr><td>Password:<input type="password" name="pass" id="pass" value=""/></td>
				</tr>
				
				<tr><td colspan = "2" style = "text-align:center"><input type="submit" name="submit" id="submit" value="SignUp" /></td>
				</tr>
				</table>
				
				
				</form>
				</body>
				</html>
		<?php
	
	}
	
	if(isset($_POST['submit'])){
		
		//strip the values from the entered values
		$username = stripslashes($_POST['userN']);
		$password = stripslashes($_POST['pass']);
		
		
		//Function to evaluate the outcome of the other methods - ValidateUsername() and ValidatePassword();
		
		function ValidateOutcomes(&$username,&$password){
		
			if(ValidateUsername($username) && ValidatePassword($password)){
				header("Location: feedback.php");
			}
			else{
				//If the username and password are incorrect then revert to the login page
				rivertToLogin();
			}
		}
		
		
		//Method to validate the username
		function ValidateUsername(&$username){
			
			if(empty($username) == false && preg_match("/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@thelady.co.za$/",$username)){
				return true;
			}
			else{
				echo "<strong>INVALID USERNAME</strong>";
				return false;
			}
		}
		
		//Method to validate the password
		function ValidatePassword(&$password){
			
			
			$correctPass = "P@55w0rd!";
			$storedHash = md5($correctPass);	//randomly generated password	
			
			if(empty($password) == false && preg_match("//",$password)){
				return true;
			}
			else{
				echo "<strong>INVALID PASSWORD</strong>";
				return false;
			}
		}
		
		//Call the method to validate username and password 
		ValidateOutcomes($username,$password);

	}
	else{
		
		//If the but submit is not clicked than return to the login in page.
		rivertToLogin();
	}
	

?>