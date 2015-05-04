<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Welcome to The Lady</title>
	
	<link href ="css/main.css" rel= "stylesheet" type="text/css" />
		</head>
		<body>



		<?php
	
	
			echo "<table id='outerTable'>",
								"<tr><td id='centerButtons'>",
										"<div id='topButtons'>",
												"<a href='feedback.html' ><img src='' width= '100' height='40' alt='FEEDBACK'" ,
												"/></a><a href='callMe.html'><img src='' width= '100' height='40' alt='CALLME'",
												"/></a><a class='farLeft' href='mailMe.html'><img id='farLeft2' src='images/mailMe.jpg' width='70' height='50' alt='MAILME'/></a>";	
												
							echo "</div></td></tr>";
							echo "<tr><td><img src='images/home_banner.jpg' width='860' height='90' alt='Welcome to The Lady'/></td></tr>";
							echo "<tr><td id='MainMenu'",
										"<div>",
											"<a href='home.php'><img src='images/home_current.jpg' width='70' height='40' alt='HOME'",
											"/></a><a href='profile.php'><img src='' width='100' height='40' alt='PROFILE'",
											"/></a><a href='tutorials.php' ><img src='' width='100' height='40' alt='TUTORIALS'",
											"/></a><a href='accomplishments.php'><img src='' width='100' height='40' alt='ACCOMPLISHMENTS'",
											"/></a><a href='projects.php' ><img src='' width='100' height='40' alt='PROJECTS'/></a>",
										"</div></td></tr>";
							echo "<tr><td>",
									"<table id='MainContentTable'>",
										"<tr><td id='ContentLeft'>",
											"<div id= 'sideBar'><h3>BOOK-SHELF</h3>";
														
											echo "<p id='bookLinks'><a href='bookReview.php?content=first'>The Empire Builders</a> <br/>" ,
												 "<a href='bookReview.php?content=second'>The Peddlers</a><br/>",
												 "<a href='bookReview.php?content=third'>The Hunters</a><br/>",
												 "<a href='bookReview.php?content=fourth'>The Lady</a></p>";
												 
												
							echo "</div></td>";
											
							echo "<td id='ContentRight'> <div id='mainContent'><h2>Book Reviews Of The Month</h2>";
	
							/*- A diff IFrame and image of selected book to be reviewed
							  - We use a case statement as well as the content property of the links
 							    to determine which frame of info to show*/

							if(isset($_GET['content'])){
								switch($_GET['content']){
									
									case 'first':
										echo "<table id='books'><tr><td><img src='images/The_Empire_Builders.jpg' width='150' height='180' alt='Books Here'/></td>",
										     "<td><p>Title: The Empire Builders <br/>",
											 "Author: Alan Stratton <br/>",
											 "Rate: <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
													<img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
													</p></td></tr></table>";
										echo "<p id='firstFrame'><iframe src='empireBuilders.com' width='550' height='100'></iframe></p>";
										break;
									case 'second':
										echo "<table id='books'><tr><td><img src='images/The_Peddlers.jpg' width='150' height='180' alt='Books Here'/></td>",
										     "<td><p>Title: The Peddlers <br/>",
											 "Author: Alan Stratton <br/>",
											 "Rate: <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											   <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											   </p></td></tr></table>";
										echo "<p id='secondFrame'><iframe src='peddlers.com' width='550' height='100'></iframe></p>";
										break;
									case 'third':
										echo "<table id='books'><tr><td><img src='images/The_Hunters.jpg' width='150' height='180' alt='Books Here'/></td>",
										     "<td><p>Title: The Hunters <br/>",
											 "Author: Alan Stratton <br/>",
											 "Rate: <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											 <img src='images/star_1.jpg' width='15' height='15' alt='stars'/></p></td></tr></table>";
										echo "<p id='thirdFrame'><iframe src='hunters.com' width='550' height='100'></iframe></p>";
										break;
									case 'fourth':
										echo "<table id='books'><tr><td><img src='images/The_Lady.jpg' width='150' height='180' alt='Books Here'/></td>",
										     "<td><p>Title: The Lady <br/>",
											 "Author: Alan Stratton <br/>",
											 "Rate: <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											 <img src='images/star_1.jpg' width='15' height='15' alt='stars'/><img src='images/star_1.jpg' width='15' height='15' alt='stars'/>
											 <img src='images/star_1.jpg' width='15' height='15' alt='stars'/></p></td></tr></table>";
										echo "<p id='fourthFrame'><iframe src='thelady.com' width='550' height='100'></iframe></p>";
										break;
									default:
										include('home.php');
										break;
								}
							}
							else{
								echo "<p id= 'bookShelf'><img src='images/mailMe_2.jpg' width='350' height='50' alt='Books Here'/></p>";
							}
							 
							echo "</div></td></tr></table></td></tr></table>";
							
							echo "<p id='footer'>",
								"&copy The Lady &nbsp;&nbsp;&nbsp; <a href='privacy.html'>Privacy</a> | ",
												"<a href='termsAndConditions.html'>Terms and Conditions</a></p>";
					echo "<script type='text/javascript' src='bella.js'></script>";

		?>
		
	</body>
	</html>