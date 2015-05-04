<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
						<title>Email Messages</title>
						<link href ="css/main.css" rel= "stylesheet" type="text/css" />
					</head>
					<body>

<?php
		echo "<table id='outerTable'>",
								"<tr><td id='centerButtons'>",
										"<div id='topButtons'>";
										echo "<script type='text/javascript'>",
														"function modalWindow(){
															
															if(window.showModalDialog){
																window.showModalDialog('loginForm.php','login','dialogWidth=450px;dialogHeight=250px');
															}
															else{
																window.open('loginForm.php','login','width=250px;height=500px;toolbar=no;directories=no;status=no;menubar=no;scrollbars=no;resizable=no;modal=yes');
															}
														}",
													 "</script>";
												
												?>
														<a href="loginForm.php" target="login" onclick="modalWindow();return false;" onmouseover="rollover1('feedback','images/feedback.jpg')" onmouseout="rollover1('feedback','images/feedback_curr.jpg')"><img src="images/feedback_curr.jpg" id="feedback" width="100" height="40" alt="FEEDBACK"
												/></a><a href="callMe.html" onmouseover="rollover1('contacts','images/contacts.jpg')" onmouseout="rollover1('contacts','images/contacts_curr.jpg')"><img src="images/contacts_curr.jpg" id="contacts" width= "100" height="40" alt="CALLME"
												/></a><a class="farLeft" id="mail" href="mail.php"><img id="farLeft2" src="images/mailMe.jpg" width="70" height="50" alt="MAILME"/></a>
										<?php
							echo "<script type='text/javascript'>",
										"function rollover1( img, url ) {
										document.images[img].src = url;}",
								"</script>";					
							echo "</div></td></tr>";
							echo "<tr><td><img src='images/home_banner.jpg' width='860' height='70' alt='Welcome to The Lady'/></td></tr>";
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
														
												"<h3>Emails</h3>",
														"<p><a href='inbox.php' id='inbox'>Inbox</a>&nbsp;<a href='countInbox.php' id='inboxCount'>()</a><br/></p>";
														echo "<p><a href='outbo.php' id='outbox'>Outbox</a>&nbsp;<a href='countOutbox.php' id='outboxCount' >()</a><br/></p>",
															
												"</div></td>";
												
											
												echo "<td id='ContentRight'> <div id='mainContent'>";
												echo "<h2></h2>",
												
													 "</div></td></tr></table></td></tr></table>";
							
							echo "<p id='footer'>",
								"&copy The Lady &nbsp;&nbsp;&nbsp; <a href='privacy.html'>Privacy</a> | ",
												"<a href='termsAndConditions.html'>Terms and Conditions</a></p>";
							
	
?>

</body>
</html>