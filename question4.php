<?php include 'database4.php'; ?>
<?php session_start();?>
<?php
//set question number
$number =(int) $_GET['n'];


 //get total questions
    
    $query="SELECT * FROM `questions`";
    //get result
    $results= $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;
    
    
 //get question
$query = "SELECT * FROM `questions`
WHERE question_number = $number";

//get result
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();

//get choices
$query = "SELECT * FROM `choices`
WHERE question_number = $number";
//get results
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

?>


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
	<div id="subject">Subject-Name:Mathematics</div>
    <div  id="changesubject"><a href="topics.php" style="text-decoration:none;">Change Subject</a></div>
</div>
<div id="leftnavigation"><marquee  direction="up"  height="300" width="250"  style="margin-top:20%;">
	<div id="leftcontent">Mathematics is essential in many fields, including natural science, engineering, medicine, finance and the social sciences. Applied mathematics has led to entirely new mathematical disciplines, such as statistics and game theory. Mathematicians also engage in pure mathematics, or mathematics for its own sake, without having any application in mind. There is no clear line separating pure and applied mathematics, and practical applications for what began as pure mathematics are often discovered.</div></marquee>
</div>
        <div id="center">
    <main>
    <div class="container" align="center">
   <div class="current"  style="color:red;font-family:Showcard Gothic;">Question <?php echo $question['question_number'];?>of <?php echo $total;?></div>
        <P class="question"  style="color:red;font-family:Showcard Gothic;">
       <?php echo $question['text'];?>
        </P>
        <form method="post" action="process4.php">
        <ul class="choices"  style="color:red;font-family:Showcard Gothic;">
            <?php while($row = $choices->fetch_assoc()): ?>
            <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"/><?php echo $row['text']; ?></li> 
            
            <?php endwhile; ?> 
            
    
            </ul>
        <input type="submit" value="Submit" />
            <input type="hidden" name="number" value="<?php echo $number; ?>"/>
        </form>
        </div>
    
    </main>
        </div>
        <div id="rightnavigation">
<marquee behavior="scroll" direction="down"  height="350" width="250" style="margin-top:25%;">
<table cellspacing="0px">
	<tr><td><img  height="200" width="250"src="m1.JPG"></td></tr>
    <tr><td><img  height="200" width="250"src="m2.JPG"></td></tr>
    <tr><td><img  height="200" width="250"src="m3.JPG"></td></tr>
    <tr><td><img height="200" width="250"src="m4.JPG"></td></tr>
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