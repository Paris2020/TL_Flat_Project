<?php
		function RevertToContactForm(){
		?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">

				<html xmlns = "http://www.w3.org/1999/xhtml" >
				<head><title>Contact Us Page</title>
				<link href ="css/main.css" rel= "stylesheet" type="text/css" />

				</head>	
				<body>
				<?php echo "<table id='outerTable'>",
								"<tr><td id='centerButtons'>",
										"<div id='topButtons'>";
										?>
												<a href="feedback.php" onmouseover="rollover1('feedback','images/feedback.jpg')" onmouseout="rollover1('feedback','images/feedback_curr.jpg')"><img src="images/feedback_curr.jpg" id="feedback" width="100" height="40" alt="FEEDBACK"
												/></a><a href="contactUs.php" onmouseover="rollover1('contacts','images/contacts.jpg')" onmouseout="rollover1('contacts','images/contacts_curr.jpg')"><img src="images/contacts_curr.jpg" id="contacts" width= "100" height="40" alt="CALLME"
												/></a><a class="farLeft" id="mail" href="mail.php"><img id="farLeft2" src="images/mailMe.jpg" width="70" height="50" alt="MAILME"/></a>
										<?php
							echo "<script type='text/javascript'>",
										"function rollover1( img, url ) {
										document.images[img].src = url;}",
								"</script>";					
							echo "</div></td></tr>";
							echo "<tr><td><img src='images/home_banner.jpg' width='860' height='70' alt='Contact Us Now'/></td></tr>";
							?><tr><td id="MainMenu">
										<div>
											<a href="home.php" onmouseover="rollover2('home','images/home.jpg')" onmouseout="rollover2('home','images/home_curr.jpg')"><img src="images/home_curr.jpg" id="home" width="100" height="40" alt="HOME"
											/></a><a href="profile.php" onmouseover="rollover2('profile','images/profile.jpg')" onmouseout="rollover2('profile','images/profile_curr.jpg')"><img src="images/profile_curr.jpg" id="profile" width="110" height="40" alt="PROFILE"
											/></a><a href="tutorials.php" onmouseover="rollover2('tutorials','images/tutorials.jpg')" onmouseout="rollover2('tutorials','images/tutorials_curr.jpg')"><img src="images/tutorials_curr.jpg" id="tutorials" width="110" height="40" alt="TUTORIALS"
											/></a><a href="accomplishments.php" onmouseover="rollover2('accom','images/accom.jpg')" onmouseout="rollover2('accom','images/accom_curr.jpg')"><img src="images/accom_curr.jpg" id="accom" width="200" height="40" alt="ACCOMPLISHMENTS"
											/></a><a href="projects.php" onmouseover="rollover2('projects','images/projects.jpg')" onmouseout="rollover2('projects','images/projects_curr.jpg')"><img src="images/projects_curr.jpg" id="projects" width="100" height="40" alt="PROJECTS"/></a>
										</div>
								</td></tr>
							<?php
							echo "<script type='text/javascript'>",
										"function rollover2( img, url ) {
										document.images[img].src = url;}",
								"</script>";
							echo "<tr><td>",
									"<table id='MainContentTable'>",
										"<tr><td id='ContentLeft'>",
											"<div id= 'sideBar'>",
											
											
											"<h3>CONTACT - THE LADY...</h3>",
											"<p><a href='map.php'><img src='images/homeIcon.jpg' width='40' height='40' alt='Address'/></a><br>11084 Dobsonville ext 2, Mafu Street,1863</p>",
											"<p><img src='images/phone.jpg' width='40' height='40' alt='Phone'/><br>(011) 988-7240</p>",
											"<p><a href='dineo06.moseki@gmail.com'><img src='images/email.jpg' width='40' height='40' alt='email'/></a><br>gmail.com</p>",
											"<div></td>";
							echo "<td id='ContentRight'> <div id='mainContent'>",
								"<h2>Communicate with - The Lady</h2>",
								"<form name = 'frmContactUs' action='contactUs.php' method ='post' >",
							"<fieldset id='field1' >",
									"<legend>CONTACT US HERE...</legend>",
									"<p>Firstname: <input type='text' name='fName' id='fName' /><b>*</b></p>",
									"<p>Lastname: <input type='text' name='sName' id='sName' /><b>*</b></p>",
									"<p>Email: <input type='text' name='emailID' id='emailID' /><b>*</b></p>",
									"<p>Phone: <input type='text' name='phoneID' id='phoneID' /><b>*</b></p>",
									"<p>Message: <textarea name='msg' id='msg' cols='50' rows='5' maxlength='500'></textarea> (Maximum of 500 characters)</p></fieldset>",
							"<input type='submit' name='submit' value='Submit' id='submitBtn'/></form>";
							
							echo "<p id='social'>Social:<br></p>",
									"<p><a href='facebook.com' class='shareLinks'><img src='images/facebook_addthis_icon.jpg' width='15' height='15'/></a>Facebook<br>",
									"<a href='linkedin.com' class='shareLinks'><img src='images/linkedIn_addthis_icon.jpg' width='15' height='15'/></a>LinkedIn<br>",
									"<a href='skype.com' class='shareLinks'><img src='images/skype_addthis_icon.jpg' width='15' height='15'/></a>Skype<br>",
									"<a href='twitter.com' class='shareLinks'><img src='images/twitter_addthis_icon.jpg' width='15' height='15'/></a>Twitter<br>",
									"<a href='rss.com' class='shareLinks'><img src='images/rss_addthis_icon.jpg' width='15' height='15'/></a>RSS<br></p>";
							
							echo "</div></td></tr></table></td></tr></table>";
							echo "<p id='footer'>",
								"&copy The Lady &nbsp;&nbsp;&nbsp; <a href='privacy.html'>Privacy</a> | ",
												"<a href='termsAndConditions.html'>Terms and Conditions</a></p>";
							
				?>
						
		
				</body>
				</html>
		<?
		
		}
		
		if(isset($_POST['submit'])){
			
			//Process the form here
		}
		else{
			//Displays the feedback page again
			RevertToContactForm();
		}



?>