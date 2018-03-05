<?php include "database.php"; ?>
<?php
// get questions
$query="SELECT * FROM questions";
//get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

?>
<html>




<html>
<head>
<title>questons-quizzler</title>

<link href="question.css" type="text/css" rel="stylesheet"/>
 <link href="social.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="topcover">
<center><span id="welcome">Welcome To Quizzler</span></center><br>
<div id="menubar">
	<a href="index.html">Logout</a>
	<a href="contactus.html">Contact Us</a>
	<a href="aboutus.html">About Us</a>
	<a href="index.html">Home</a>
</div>
<div id="strip">
	<div id="subject">Subject-Name:Physics</div>
    <div  id="changesubject"><a href="topics.html" style="text-decoration:none;">Change Subject</a></div>
</div>
<div id="leftnavigation"><marquee  direction="up"  height="300" width="250"  style="margin-top:20%;">
	<div id="leftcontent">Physics "knowledge of nature","nature" is the natural science that involves the study of matter and its motion and behavior through space and time, along with related concepts such as energy and force.One of the most fundamental scientific disciplines, the main goal of physics is to understand how the universe behaves.Physics is one of the oldest academic disciplines, perhaps the oldest through its inclusion of astronomy.Physics also makes significant contributions through advances in new technologies that arise from theoretical breakthroughs. </div></marquee>
</div>
<div id="center">
      <h2 style="color:red;">this is quiz to test your knowledge</h2>
        <ul>
        <li style="color:red;"><strong>number of questions:</strong><?php echo $total;  ?>      </li>
            <li style="color:red;"><strong>type:</strong>multiple choice</li>
              <li style="color:red;"><strong>estimated time:</strong><?php echo  $total * .5; ?> </li>
        </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
    
    
    </div>
<div id="rightnavigation">
<marquee behavior="scroll" direction="down"  height="350" width="250" style="margin-top:25%;">
<table cellspacing="0px" >
	<tr><td><img  height="200" width="250"src="p1.JPG"></td></tr>
    <tr><td><img  height="200" width="250"src="p2.JPG"></td></tr>
    <tr><td><img  height="200" width="250"src="p3.JPG"></td></tr>
    <tr><td><img height="200" width="250"src="p4.JPG"></td></tr>
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
</div>
</div>
</body>
</html>