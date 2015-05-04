<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Book Reviews</title>
	
	<link href ="css/main.css" rel= "stylesheet" type="text/css" />
		</head>
		<body>



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
														
												"<h3>BOOK-SHELF</h3>";
														
											echo "<p id='bookLinks'><a href='bookReview.php?content=first'>The Grave Robber's Apprentice</a> <br/>" ,
												 "<a href='bookReview.php?content=second'>The Curse of the Dream Witch</a><br/>",
												 "<a href='bookReview.php?content=third'>Leslie's Journal</a><br/>",
												 "<a href='bookReview.php?content=fourth'>Borderline</a></p>";
												 
												
							echo "</div></td>";
											
							echo "<td id='ContentRight'> <div id='mainContent'><h2>Book Reviews Of The Month</h2>";
	
							/*- A diff IFrame and image of selected book to be reviewed
							  - We use a case statement as well as the content property of the links
 							    to determine which frame of info to show*/

							if(isset($_GET['content'])){
								switch($_GET['content']){
									
									case 'first':
										echo "<table id='books'><tr><td><img src='images/alan_book_3.jpg' width='150' height='180' alt='Books Here'/></td>",
										     "<td><p>Title: The Grave Robber's Apprentice <br/>",
											 "Author: Alan Stratton <br/>",
											 "Rate: <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
													<img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
													</p></td></tr></table>";
										echo "<p id='firstFrame'><iframe src='Reviews/The_Grave_Robbers_Apprentice.html' width='550' height='500'></iframe></p>";
										break;
									case 'second':
										echo "<table id='books'><tr><td><img src='images/alan_book_1.jpg' width='150' height='180' alt='Books Here'/></td>",
										     "<td><p>Title: The Curse of the Dream Witch <br/>",
											 "Author: Alan Stratton <br/>",
											 "Rate: <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											   <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											   </p></td></tr></table>";
										echo "<p id='secondFrame'><iframe src='Reviews/The_Curse_of_the_Dream_Witch.html' width='550' height='500'></iframe></p>";
										break;
									case 'third':
										echo "<table id='books'><tr><td><img src='images/alan_book_4.jpg' width='150' height='180' alt='Books Here'/></td>",
										     "<td><p>Title: Leslie's Journal <br/>",
											 "Author: Alan Stratton <br/>",
											 "Rate: <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											 <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/></p></td></tr></table>";
										echo "<p id='thirdFrame'><iframe src='Reviews/Leslies_Journal.html' width='550' height='500'></iframe></p>";
										break;
									case 'fourth':
										echo "<table id='books'><tr><td><img src='images/alan_book_2.jpg' width='150' height='180' alt='Books Here'/></td>",
										     "<td><p>Title: Borderline <br/>",
											 "Author: Alan Stratton <br/>",
											 "Rate: <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											 <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											 <img src='images/star_1.jpg' width='15' height='15' alt='stars'/></p></td></tr></table>";
										echo "<p id='fourthFrame'><iframe src='Reviews/Borderline.html' width='550' height='500'></iframe></p>";
										break;
									default:
										include('home.php');
										break;
								}
							}
							else{
								echo "<p id= 'bookShelf'><img src='images/book_shelve_1.jpg' width='350' height='100' alt='Books Here'/></p>";
							}
							 
							echo "</div></td></tr></table></td></tr></table>";
							
							echo "<p id='footer'>",
								"&copy The Lady &nbsp;&nbsp;&nbsp; <a href='privacy.html'>Privacy</a> | ",
												"<a href='termsAndConditions.html'>Terms and Conditions</a></p>";
					echo "<script type='text/javascript' src='bella.js'></script>";

		?>
		
	</body>
	</html>