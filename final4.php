<?php session_start(); ?>
<html>
<head>
  <title>questons-quizzler</title>

<link href="question.css" type="text/css" rel="stylesheet"/>
 <link href="social.css" rel="stylesheet" type="text/css">
    
    </head>
  <body><div id="topcover">
<center><span id="welcome">Welcome To Quizzler</span></center><br>
<div id="menubar">
	<a href="index.html">Logout</a>
	<a href="contactus.html">Contact Us</a>
	<a href="aboutus.html">About Us</a>
	<a href="index.html">Home</a>
</div>
<div id="strip">
	<div id="subject">Subject-Name:English</div>
    <div  id="changesubject"><a href="topics.php" style="text-decoration:none;">Change Subject</a></div>
</div>
<div id="leftnavigation"><marquee  direction="up"  height="300" width="250"  style="margin-top:20%;">
	<div id="leftcontent">English  is a West Germanic language that was first spoken in early medieval England and is now a global lingua franca. Named after the Angles, one of the Germanic tribes that migrated to England, it ultimately derives its name from the Anglia (Angeln) peninsula in the Baltic Sea. It is closely related to the Frisian languages, but its vocabulary has been significantly influenced by other Germanic languages, particularly Norse (a North Germanic language), as well as by Latin and Romance languages, particularly French.[6]</div></marquee>
</div> 
          <div id="center" align="center">

      
      <main>
    <div class="container">
        <h2 style="color:red;font-family:Showcard Gothic;">youre done</h2>
        <p style="color:red;font-family:Showcard Gothic;">congrats u have completed the test</p>
        <p style="color:red;font-family:Showcard Gothic;">final score: <?php echo $_SESSION['score'];?></p>
        <a href="question4.php?n=1" class="start" style="color:white;font-family:Showcard Gothic;">start again</a>
        </div>
    
    </main>
</div>
    
     <div id="rightnavigation">
<marquee behavior="scroll" direction="down"  height="350" width="250" style="margin-top:25%;">
<table cellspacing="0px">
	<tr><td><img  height="200" width="250"src="e1.JPG"></td></tr>
    <tr><td><img  height="200" width="250"src="e2.JPG"></td></tr>
    <tr><td><img  height="200" width="250"src="e3.JPG"></td></tr>
    <tr><td><img height="200" width="250"src="e4.JPG"></td></tr>
</table></marquee>
</div>
      </div>
<div id="footer">
	<div id="socialheading">Follow Us</div>
<div class="footer-social-icons">
  <ul class="social-icons">
        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>
 <div id="copyrights">Copyright © 2017 Quizworks B.V. All Rights Reserved</div>
    </div>
    </body>
    
</html>
<?php session_destroy();?>