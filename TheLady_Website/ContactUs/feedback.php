<?php
		
		function RevertToFeedback(){
				?>
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">

						<html xmlns = "http://www.w3.org/1999/xhtml" >
						<head><title>Feedback Page</title>
						<link href ="css/main.css" rel= "stylesheet" type="text/css" />

						</head>	
						<body>
						<?php echo "<table id='outerTable'>",
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
														/></a><a href="contactUs.php" onmouseover="rollover1('contacts','images/contacts.jpg')" onmouseout="rollover1('contacts','images/contacts_curr.jpg')"><img src="images/contacts_curr.jpg" id="contacts" width= "100" height="40" alt="CALLME"
														/></a><a class="farLeft" id="mail" href="mail.php"><img id="farLeft2" src="images/mailMe.jpg" width="70" height="50" alt="MAILME"/></a>
												<?php
									echo "<script type='text/javascript'>",
												"function rollover1( img, url ) {
												document.images[img].src = url;}",
										"</script>";					
									echo "</div></td></tr>";
									echo "<tr><td><img src='images/feedback_banner.jpg' width='860' height='70' alt='Give us some feedback'/></td></tr>";
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
															"<b><i>Alan Stratton</i></b> is the author of four recent bestselling novels: <a href = 'bookReview.php') title='The Grave Robber's Apprentice - Book Review'>THE GRAVE ROBBER'S APPRENTICE<a/>, ",
															"<a href='bookReview.php' title='The Curse of the Dream Witch - Book Review'>THE CURSE OF THE DREAM WITCH</a>, <a href='bookReview.php' title='Leslie's Journal - Book Review'>LESLIE'S JOURNAL</a> and ",
															"<a href='bookReview.php' title='Borderline - Book Review'>BORDERLINE.</a></p></div></td>";
									echo "<td id='ContentRight'> <div id='mainContent'>",
									"<h2>What would you like to share with us?</h2>",
										"<form name = 'frmFeedback' action='feedback.php' method ='post' >",
									"<fieldset id='field1' >",
											"<legend>Choose the kind of feedback you would like to provide</legend>",
											"<input type='radio' name='feedbackType' value='Complaint' method='post' action='complaint.php'/><label for='Complaint'>Complaint</label><br/>",
											"<input type ='radio' name='feedbackType' value='Improvement' method='post' action='improvement.php'/><label for='Improvement'>Improvement</label><br/>",
											"<input type ='radio' name='feedbackType' value='Ratings' method='post' action='ratings.php'/><label for='Ratings'>Ratings</label></fieldset>",
									"<input type='submit' name='submit' value='select' id='submitBtn'/></form>";
									
									
									echo "</div></td></tr></table></td></tr></table>";
									echo "<p id='footer'>",
										"&copy The Lady &nbsp;&nbsp;&nbsp; <a href='privacy.html'>Privacy</a> | ",
														"<a href='termsAndConditions.html'>Terms and Conditions</a></p>";
									
						?>
								
				
						</body>
						</html>
				<?
		
		}
		
		//=======================================================================================================
	function RevertToComplaint(){
				?>
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">

						<html xmlns = "http://www.w3.org/1999/xhtml" >
						<head><title>Complaint Page</title>
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
									echo "<tr><td><img src='images/feedback_banner.jpg' width='860' height='70' alt='Give us some feedback'/></td></tr>";
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
															"<b><i>Alan Stratton</i></b> is the author of four recent bestselling novels: <a href = 'bookReview.php') title='The Grave Robber's Apprentice - Book Review'>THE GRAVE ROBBER'S APPRENTICE<a/>, ",
															"<a href='bookReview.php' title='The Curse of the Dream Witch - Book Review'>THE CURSE OF THE DREAM WITCH</a>, <a href='bookReview.php' title='Leslie's Journal - Book Review'>LESLIE'S JOURNAL</a> and ",
															"<a href='bookReview.php' title='Borderline - Book Review'>BORDERLINE.</a></p></div></td>";
									echo "<td id='ContentRight'> <div id='mainContent'>",
									"<h2>What would you like to share with us?</h2>",
										"<form name = 'frmComplaints' action='feedback.php' method ='post' >",
									"<fieldset id='field1' >",
											"<legend>What is it that we are doing wrong:</legend>",
											"<p><textarea name='complaint' cols='50' rows='5' maxlength='500'></textarea>\n</p></fieldset><p>(Maximum of 500 characters)</p>",
											"<a href='feedback.php' id='arrow_left'><img src='images/back_sign.jpg' name='back_sign' width='50' height='40'/></a><input type='submit' name='submitCom' value='Submit Complaint' id='submitBtn2'/></form>";
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
				
				//Check if the textarea is empty, if so display error message, if not display success message
				if(isset($_POST['submitCom'])){
					if(empty($_POST['complaint']) == false){
						echo "<p><b>Thank you for your feedback. We will take it into consideration.</b></p>";
					}
					else{
						echo "<p><b>Please enter some text.</b></p>";
					}
				}
	}
	
	function RevertToImprovement(){
		?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">

				<html xmlns = "http://www.w3.org/1999/xhtml" >
				<head><title>Improvement Page</title>
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
							echo "<tr><td><img src='images/feedback_banner.jpg' width='860' height='70' alt='Give us some feedback'/></td></tr>";
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
													"<b><i>Alan Stratton</i></b> is the author of four recent bestselling novels: <a href = 'bookReview.php') title='The Grave Robber's Apprentice - Book Review'>THE GRAVE ROBBER'S APPRENTICE<a/>, ",
													"<a href='bookReview.php' title='The Curse of the Dream Witch - Book Review'>THE CURSE OF THE DREAM WITCH</a>, <a href='bookReview.php' title='Leslie's Journal - Book Review'>LESLIE'S JOURNAL</a> and ",
													"<a href='bookReview.php' title='Borderline - Book Review'>BORDERLINE.</a></p></div></td>";
							echo "<td id='ContentRight'> <div id='mainContent'>",
							"<h2>What would you like to share with us?</h2>",
								"<form name = 'frmImprovements' action='feedback.php' method ='post' >",
							"<fieldset id='field1' >",
									"<legend>What can we improve:</legend>",
									"<p><textarea cols='50' rows='5' maxlength='500'></textarea>\n</p></fieldset><p>(Maximum of 500 characters)</p>",
									"<a href='feedback.php' id='arrow_left'><img src='images/back_sign.jpg' name='back_sign' width='50' height='40'/></a><input type='submit' name='submitImp' value='Submit Suggestion' id='submitBtn3'/></form>";
							
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
			if($_POST['feedbackType'] == "Complaint"){
				
				//Displays the page for providing complaints
				RevertToComplaint();	
			}
			elseif($_POST['feedbackType'] == "Improvement"){
				
				//Displays the page for providing improvement
				RevertToImprovement();
			}
			elseif($_POST['feedbackType'] == "Ratings"){
				
				//Displays the page for providing improvement
				RevertToRatings();
			}
		}
		else{
			//Displays the feedback page again
			RevertToFeedback();
		}
		
		//=========================================================
		
	function RevertToRatings(){
				?>
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://wwww.w3.org/TR/xhtml1-strict.dtd">

						<html xmlns = "http://www.w3.org/1999/xhtml" >
						<head><title>Ratings Page</title>
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
									echo "<tr><td><img src='images/feedback_banner.jpg' width='860' height='70' alt='Give us some feedback'/></td></tr>";
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
															"<b><i>Alan Stratton</i></b> is the author of four recent bestselling novels: <a href = 'bookReview.php') title='The Grave Robber's Apprentice - Book Review'>THE GRAVE ROBBER'S APPRENTICE<a/>, ",
															"<a href='bookReview.php' title='The Curse of the Dream Witch - Book Review'>THE CURSE OF THE DREAM WITCH</a>, <a href='bookReview.php' title='Leslie's Journal - Book Review'>LESLIE'S JOURNAL</a> and ",
															"<a href='bookReview.php' title='Borderline - Book Review'>BORDERLINE.</a></p></div></td>";
									echo "<td id='ContentRight'> <div id='mainContent'>",
									"<h2>What would you like to share with us?</h2>",
										"<form name = 'frmRatings' action='feedback.php' method ='post' >",
									"<fieldset id='field1' >",
											"<legend>How would you rate us:</legend>",
											"<p><input type='radio' name='rating' value='Poor'/><label for='Poor'>Poor</label></p>",
											"<p><input type='radio' name='rating' value='Not bad'/><label for='Not bad'>Not bad</label></p>",
											"<p><input type='radio' name='rating' value='Good'/><label for='Good'>Good</label></p>",
											"<p><input type='radio' name='rating' value='Very Good'/><label for='Very Good'>Very Good</label></p>",
											"<p><input type='radio' name='rating' value='Excellent'/><label for='Excellent'>Excellent</label></p></fieldset>",
											"<a href='feedback.php' id='arrow_left'><img src='images/back_sign.jpg' name='back_sign' width='50' height='40'/></a><input type='submit' name='submitRate' value='Submit Rating' id='submitBtn4'/></form>";
									
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
	
		//Rating are as follows:
		/*
		- Poor - 1
		- Not bad - 2
		- Good - 3
		- Very Good - 4
		- Excellent - 5
		
		*/
		
		if(isset($_POST['rating'])){
			if($_POST['rating'] == "Poor"){
				
				//add 1
			}
			elseif($_POST['rating'] == "Not bad"){
				//add 2
				
			}
			elseif($_POST['rating'] == "Good"){
			
				//add 3
			}
			elseif($_POST['rating'] == "Very Good"){
				
				//add 4
			}
			elseif($_POST['rating'] == "Excellent"){
				//add 5
			}
		}
		
		//=====================================================================================================
		
		
		
?>