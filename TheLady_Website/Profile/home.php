
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
										"<div id='topButtons'>",
												"<a href='feedback.html' ><img src='' width='100' height='40' alt='FEEDBACK'" ,
												"/></a><a href='callMe.html'><img src='' width= '100' height='40' alt='CALLME'",
												"/></a><a class='farLeft' id='mail' href='mail.php'><img id='farLeft2' src='images/mailMe.jpg' width='70' height='50' alt='MAILME'/></a>";	
												
							echo "</div></td></tr>";
							echo "<tr><td><img src='images/home_banner.jpg' width='860' height='90' alt='Welcome to The Lady'/></td></tr>";
							echo "<tr><td id='MainMenu'",
										"<div>",
											"<img src='images/home.jpg' width='70' height='40' alt='HOME'",
											"/><a href='profile.php'><img src='' width='100' height='40' alt='PROFILE'",
											"/></a><a href='tutorials.php' ><img src='' width='100' height='40' alt='TUTORIALS'",
											"/></a><a href='accomplishments.php'><img src=''  width='100' height='40' alt='ACCOMPLISHMENTS'",
											"/></a><a href='projects.php' ><img src='' width='100' height='40' alt='PROJECTS'/></a>",
										"</div></td></tr>";
							echo "<tr><td>",
									"<table id='MainContentTable'>",
										"<tr><td id='ContentLeft'>",
											"<div id= 'sideBar'>",
														
												"<h3>BOOK-SHELF</h3>",
												"<p>Just recently, I completed a novel entitled <b><i><a href='bookReview.php' >The Lady By Alan Stratton</a></i></b>. Having had trouble formulating a name for my blog
													it occured to me how much I really enjoyed this book and how much of an impact it's had in my life. Most people refuse to 
													believe that in actual fact books can affect a part of you, sometimes even lead to a sudden metamorphosis, 
													one that maybe might have been greatly needed. I immensely believe that not only do certain books inspire us to become better, to do better,
													but also choose us and not the other way around. <b>YES GUYS - THIS BOOK CHOSE ME</b>.
												</p>";
												
												echo "<p class='theLady'><img src='images/the_lady.jpg' width= '150' height='160' alt='Picture of book here'/></p>
												<p><b><i>The Lady</i></b><br> The stunning and powerful, romantic saga of love, ambition and revenge - and of the sacrifices success brings with it. 
													Life has everthing to offer Gina Rossi. Daughter of a successful restuarant owner. She is young, spirited and beautiful - until her
													world falls apart when her father is accused of anti-facist sentiments. Overnight, the Rossis are cast out, persecuted - and sent
													to exile in a living hell - a hell from which Gina only escapes by paying the highest possible price. A price for which someone, someday
													would pay.</p>";
												
																								
												echo "<p class='author'><img src='images/alan_stratton.jpg' width='150' height='160' alt='Picture of author'/><br />",
													"<b><i>Alan Stratton</i></b> is the author of three previous bestselling novels: <a href = 'bookReview.php') title='The Empire Builders - Book Review'>THE EMPIRE BUILDERS<a/>, ",
													"<a href='bookReview.php' title='The Peddlers - Book Review'>THE PEDDLERS</a> and <a href='bookReview.php' title='The Hunters - Book Review'>THE HUNTERS.</a></p></div></td>";
												
											
												echo "<td id='ContentRight'> <div id='mainContent'>";
													
												echo "<h2>Welcome to - The Lady</h2>",
													 "<p><b><i>The Lady</i></b> is is a blog, my own personal journal online.",
														"However,contrary to popular belief, this blog is not all about me but also about you,<b>YES YOU TOO</b>. So <b>WELCOME</b> all aspiring Programmers. ",
														"This will become your second home. Explore all the luxuries in this website. Check out my <a href='profile.php'>profile</a> ",
														"and find out more about me - Oh by the way my name is <b><i>Nelly Moseki</i></b> (assuming you weren't aware by now).</p>";
														
												echo "<p>Want to know what I've been up to in the past 4 years, why hesitate, click my <a href='accomplishments.php'>accomplishments</a> to witness what ",
														"I have achieved thus far and to view what I've been working on lately, click on <a href='projects.php'>projects<a/> ",
														"to see what I've been engrossed in.</p>";
												
												?><p id="bella"><a id="leftArrow" href="previous.html" onmouseover="rollover('prevImg','images/arrow_left.jpg')" onmouseout="rollover('prevImg','images/plain_sheet.jpg')" >
																	<img class="arrows" id="prevImg" width="50" height="100" alt="Previous"/>
																</a>
																<img id="myPicture" class="signorina"  src="images/bella_11.jpg" width="200" height="270"  alt="Picture of me here"/>
																<a id="rightArrow" href="next.html" onmouseover="rollover('nextImg','images/arrow_right.jpg')" onmouseout="rollover('nextImg','images/plain_sheet.jpg')" >
																	<img class="arrows" id="nextImg" width="50" height="100" alt="Next"/>
																</a>
												 </p>
												 
												 
												<?php
												
												 echo "<script type='text/javascript'>",
													 "function rollover( img, url ) {
														document.images[img].src=url;}",
												 "</script>";
												 
												 echo "<script type='text/javascript' src='images.js'></script>";
														
												echo "	<p>
														As previously stated, this is your home too,so do make yourself at home and check out some really interesting eBooks 
														on my <a href='tutorials.php'>tutorials</a> page.
														</p>";

												echo "	<h4>LATEST NEWS IN THE INDUSTRY!</h4>";

												echo "	<p>
														This month we concerntrate on the latest <a href='www.iPhone.html'>iPhone<a/>. Incredible device isn't it? 
														I need to get one of my own soon. How we keep up with this technology? I really don't know. Just 
														months ago all attention drifted towards <a href='samsung.html'>Sumsang Galaxies</a>,
														and now they're almost for the knackers.LOL, you've got to love I.T, one minute you're in, the next (without a heads-up), you're out.
														<b>IT'S ONLY WISE TO ALWAYS BE ON YOUR TOES </b>.
														<img src='images/footprints.jpg' width='30' height='30' alt='Toes here'/></p>";
														
												echo "	<p>Lets take a look at the 
														following devices, briefly <b>discuss features</b>, <b>compare them</b> and
														then <b>decide</b> which one is better than the other (i.e. <b>pros and cons</b> if you will).
														</p>";

														/*images here that show the back and front of the cellphones when mouse is hovered ---
																--- images are hyperlinked ---
																--- place like and dislike icons (PHP) */	
												?> <p id="latestPhones">,
													  <a href="iPhone.html" onmouseover="document.iPhone.src='images/iPhone_2.jpg'" onmouseout="document.iPhone.src='images/iPhone_1.jpg'">
													  <img  id="iPhone" src="images/iPhone_1.jpg" width="100" height="170" title="iPhone6"/></a>
													 <a href="samsung.html" onmouseover="document.samsungGalaxy.src='images/samsung_2.jpg'"  onmouseout="document.samsungGalaxy.src='images/samsung_1.jpg' ">
													 <img class="phones" id="samsungGalaxy" src="images/samsung_1.jpg" width="100" height="170" title="Samsung Galaxy- Note 2"/></a></p>
													 
													 <p id="latestPhonesDesc">iPhone6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Samsung Galaxy Note-2</p>
												<?php
												
												echo "</div></td></tr></table></td></tr></table>";
							
							echo "<p id='footer'>",
								"&copy The Lady &nbsp;&nbsp;&nbsp; <a href='privacy.html'>Privacy</a> | ",
												"<a href='termsAndConditions.html'>Terms and Conditions</a></p>";
							
?>			
					
					</body>
					</html>
					
	