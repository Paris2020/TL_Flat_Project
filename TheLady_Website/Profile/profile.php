
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
						<title>Profile</title>
						<link href ="css/main.css" rel= "stylesheet" type="text/css" />
					</head>
					<body>	

						<?php
							
							echo "<table id='outerTable'>",
								"<tr><td id='centerButtons'>",
										"<div id='topButtons'>",
												"<a href='feedback.html' ><img src='images/feedback_curr.jpg' width='60' height='30' alt='FEEDBACK'" ,
												"/></a><a href='callMe.html'><img src='images/contacts_curr.jpg' width='60' height='25' alt='CALLME'",
												"/></a><a class='farLeft' href='mail.php'><img id='farLeft2' src='images/mailMe.jpg' width='70' height='50' alt='MAILME'/></a>";	
												
							echo "</div></td></tr>";
							echo "<tr><td><img src='images/profile_banner.jpg' width='660' height='80' alt='Welcome To My Bio Page'/></td></tr>";
							echo "<tr><td id='MainMenu'",
										"<div>",
											"<a href='home.php'><img src='images/home_curr.jpg' width='100' height='40' alt='HOME'",
											"/></a><a href='profile.php'><img src='images/profile_curr.jpg' width='110' height='40' alt='PROFILE'",
											"/></a><a href='tutorials.php'><img src='images/tutorials_curr.jpg' width='110' height='40' alt='TUTORIALS'",
											"/></a><a href='accomplishments.php'><img src='images/accom_curr.jpg'  width='200' height='40' alt='ACCOMPLISHMENTS'",
											"/></a><a href='projects.php' ><img src='images/projects_curr.jpg' width='100' height='40' alt='PROJECTS'/></a>",
							echo "<tr><td>",
									"<table id='MainContentTable'>",
										"<tr><td id='ContentLeft'>",
											"<div id= 'sideBar'>";
											
							echo "<h3>More About Me</h3>",
								 "<h4>My Life in Pictures</h4>",
							
								"<p><a href='profile.php?content=cresh' >Pre-School Years</a><br \>",
									"<a href='profile.php?content=primary' >Primary School Years</a><br \>",
									"<a href='profile.php?content=high' >High School Years</a><br \>",
								    "<a href='profile.php?content=tertiary' >Tertiary School Years</a><br/>",
									"<a href='profile.php?content=internship'>Internship Year</a>
								</p></div></td>";
							
							
							echo "<td id='ContentRight'> <div id='mainContent'>";
									
							echo "<h2>Bio Page</h2>",

									"<p>My full name is <b><i>Nelly Dineo Mamasu Moseki</i></b>. I was originally born in North West (lived there for about 5 years), then
									we moved to Gauteng,in Soweto. I'm 22 years old (so I've been living in Dobsonville for almost 2 decades). I Wwent to pre-school at 
									<a href='www.googlemaps.com'><b><i> Mighty Ducks</i></b></a>, primary schooled at <a href='www.googlemaps.com'><b><i>Fordsburg Primary School </i></b></a>, 
									graduated high school at <a href='www.googlemaps.com'><b><i>Florida Park High</i></b></a> and attended tertiary at 
									<a href='www.googlemaps.com'><b><i>Rosebank College (Braamfontein) </i></b></a>, where I graduated with a Diploma in I.T Software Development.</p>";
									
						/*- A diff IFrame and image of selected book to be reviewed
							  - We use a case statement as well as the content property of the links
 							    to determine which frame of info to show*/

							if(isset($_GET['content'])){
								switch($_GET['content']){
									
									case 'cresh':
										echo "<p id='bigAlbum'><a href='creshAlbum.php'><img src='images/pre_album_open.jpg' width='50' height='70' alt='Pre-School Album' title='Pre-School Album'/></a></p>";
										break;
									case 'primary':
										echo "<p id='bigAlbum'><a href='primaryAlbum.php'><img src='images/pri_album__open.jpg' width='50' height='70' alt='Primary School Album' title='Primary School Album'/></a></p>";
										break;
									case 'high':
										echo "<p id='bigAlbum'><a href='highAlbum.php'><img src='images/high_album__open.jpg' width='50' height='70' alt='High School Album' title='High School Album'/></a></p>";
										break;
									case 'tertiary':
										echo "<p id='bigAlbum'><a href='tertiaryAlbum.php'><img src='images/ter_album__open.jpg' width='50' height='70' alt='Tertiary Album' title='Tertiary Album'/></a></p>";
										break;
									case 'internship':
										echo "<p id='bigAlbum'><a href='internshipAlbum.php'><img src='images/intern_album_open.jpg' width='50' height='70' alt='Internship Album' title='Internship Album'/></a></p>";
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
									
									
									
		
									
							echo "</div></td></tr></table></td></tr></table>";
							
							echo "<p id='footer'>",
								"&copy The Lady &nbsp;&nbsp;&nbsp; <a href='privacy.html'>Privacy</a> | ",
												"<a href='termsAndConditions.html'>Terms and Conditions</a></p>";
					
					?>
</body>
</html>