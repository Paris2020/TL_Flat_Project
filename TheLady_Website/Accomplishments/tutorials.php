
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
						<title>Welcome to The Lady</title>
						<link href ="css/main.css" rel= "stylesheet" type="text/css" />
						
					</head>
					<body >
<?php					
							echo "<table id='outerTable'>",
								"<tr><td id='centerButtons'>",
										"<div id='topButtons'>";
										?>
												<a href="feedback.html" onmouseover="rollover1('feedback','images/feedback.jpg')" onmouseout="rollover1('feedback','images/feedback_curr.jpg')"><img src="images/feedback_curr.jpg" id="feedback" width="100" height="40" alt="FEEDBACK"
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
														
												"<h3>eBOOKs</h3>",
												"<p>
													<a href='tutorials.php?content=android' >Android Development</a><br \>",
													"<a href='tutorials.php?content=cSharp' >C# Development</a><br \>",
													"<a href='tutorials.php?content=java' >Java Development</a><br \>",
													"<a href='tutorials.php?content=javascript' >Javascript Development</a><br \>",
													"<a href='tutorials.php?content=php' >PHP Development</a><br/>",
													"<a href='tutorials.php?content=sql'>SQL Server</a>
																	
												</p>",
											"</div></td>";		
							echo "<td id='ContentRight'> <div id='mainContent'>";
													
							echo "<h2>Software Development Tutorials</h2>";
								 if(isset($_GET['content'])){
								switch($_GET['content']){
									
									case 'android':
										echo "<p id='AndroidGallery'></p>";
										break;
									case 'cSharp':
										echo "<p id='C_SharpGallery'></p>";
										break;
									case 'java':
										echo "<p id='JavaGallery'></p>";
										break;
									case 'javascript':
										echo "<p id='JavascriptGallery'></p>";
										break;
									case 'php':
										echo "<p id='phpGallery'></p>";
										break;
									case 'sql':
										echo "<p id='sqlGallery'></p>";
										break;
									default:
										include('home.php');
										break;
								}
							}
							else{
								echo "<p id= 'bounce'><img src='images/video.jpg' width='350' height='50' alt='Video Here'/></p>";
								//This is where the video will be.
							}			
														
											
							echo "	<h4>LATEST TUTORIALS!</h4>";

												
							echo "</div></td></tr></table></td></tr></table>";
							
							echo "<p id='footer'>",
								"&copy The Lady &nbsp;&nbsp;&nbsp; <a href='privacy.html'>Privacy</a> | ",
												"<a href='termsAndConditions.html'>Terms and Conditions</a></p>";
							
?>			

					</body>
					</html>
					
	