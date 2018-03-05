<?php include "database.php"; ?>
<?php
// get questions
$query="SELECT * FROM questions";
//get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

?>


<html>
<head>

  <link href="menubarnfooter.css" rel="stylesheet" type="text/css">
  <link href="social.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .imgb{
            width: 100%;
            height: 400px;
        }
        
        .make{
            width: 80%;
            margin-left: 100px;
            margin-top: 50px;
            border: 0px solid rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.16), 0 1px 1px rgba(0, 0, 0, 0.23);
            padding: 20px;
            background-image: url(yayaback.jpg);
        }
        
        
        
        body{
            background-image:url(yayaback2.png);
            background-size: cover; 
        }
        
    .wrapper {
  display: flex;
  width: 100%;
  border: 0px solid rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.16), 0 1px 1px rgba(0, 0, 0, 0.23);
  background-color:transparent;
  margin: 10px 5px 20px;
  height: 250px;
}
    .wrapper1 {
  display: flex;
  width: 100%;
  border: 0px solid rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.16), 0 1px 1px rgba(0, 0, 0, 0.23);
  background-color:transparent;
  margin: 10px 5px 20px;
  height: 250px;
        position: relative;
        right: 3px;
}
        
        
.wrapper:hover {
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

        .wrapper1:hover {
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
.link {
	display: block;
	width: 350px;
	height: 180px;
	overflow: hidden;
	position: relative;
	left: 20px;
	top: 7px;
	border-right: 2px solid #ddd;
	border-radius: 50%;
	background-image: url(question-social.html);    
}

.blur {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  width: 100%;
  height: 100%;
  filter: blur(5px);
}

.pic {
  width: calc(100% - 20px);
  max-width: 100%;
  height: auto;
  margin: auto;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 5;
}

.pic:hover {
  transition: all 1s ease-out;
  transform: scale(1.5);
  text-decoration: none;
  border: none;
}

.content {
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 100%;
  padding: 20px;
  overflow-x: hidden;
}
        

  #menubar{
	background-color:black;	
	text-align:right;
	padding:1%;
	height:40px;
}
        a{
	color:white;
	font-size:25px;
	text-decoration:none;
	padding:2%;
	
}
            
        

.text {
  margin: 5px;
    color: black;
}
        .text:hover{
            font-weight: 400;
        }
    

    
    .link1 {
	display: block;
	width: 350px;
	height: 170px;
	overflow: hidden;
	position: relative;
	right: -760px;
	top: 16px;
	border-right: 2px solid #ddd;
	background-image: url(question-maths.html);  
}
        
        .content1 {
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 100%;
  padding: 20px;
  overflow-x: hidden;
    position: relative;
    right: 300px;
}
        .start{
            
            font-family: Showcard Gothic;
            color:black;
            text-decoration: underline;
            font-size: 13px;
            text-align-last: right;
            overflow: hidden;
        }
    
    
    </style>
    
<title>topics</title>
</head>
<body>
<center><span id="welcome">Welcome To Quizzler</span></center><br>
   <div id="menubar">
   <a href="index.html">LogOut</a>
	<a href="contactus.html">Contact Us</a>
	<a href="aboutus.html">About Us</a>
	<a href="index.html">Home</a>
</div>

    <div>
    
    
        <div class="make">
    <div class="wrapper">
  <a href="question-chemistry.html" class="link">
    <div class="blur" style="background: url(giphy%20(1).gif) 50% 50% / cover;"></div>
    <img src="giphy%20(1).gif" alt="Title" class="pic" />
  </a>

  <div class="content">
      <h3 style="font-family: Showcard Gothic;text-decoration: underline;">CHEMISTRY</h3>
    <p class="text" style="font-family: Lucida Handwriting;font-weight: 200;" >Chemistry is one of the basic sciences. Knowledge of chemistry is indispensable for the pursuit of any of the other sciences. We need it for the study of Technology, Pharmacology, Mineralogy, and what not. It is indispensable for the study of physics, geology, biology and physiology. Hence it is a compulsory subject of study for every science student. </p>
        <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
</div>
    
        
           <div class="wrapper1">
  <a href="question-maths.html" class="link1">
    <div class="blur" style="background: url(7361825_orig.gif) 50% 50% / cover;"></div>
    <img src="7361825_orig.gif" alt="Title" class="pic" />
  </a>

  <div class="content1">
   <h3 style="font-family: Showcard Gothic;text-decoration: underline;">MATHEMATICS</h3>
    <p class="text"style="font-family: Lucida Handwriting;font-weight: 200;" >The importance of maths in everyday life. Mathematics is a methodical application of matter. ... Certain qualities that are nurtured by mathematics are power of reasoning, creativity, abstract or spatial thinking, critical thinking, problem-solving ability and even effective communication skills </p>
      <a href="question4.php?n=1" class="start">Start Quiz</a>
               </div>
</div>
      <div class="wrapper">
  <a href="question-social.html" class="link">
    <div class="blur" style="background: url('hisback.gif') 50% 50% / cover;"></div>
    <img src="hisback.gif" alt="Title" class="pic" />
  </a>

  <div class="content">
      <h3 style="font-family: Showcard Gothic;text-decoration: underline;">PHYSICS</h3>
    <p class="text" style="font-family: Lucida Handwriting;font-weight: 200;">Physics describes how the natural world works through applied mathematical formulas. It deals with the fundamental forces of the universe and how they interact with  galaxies and planets to atoms and quarks and everything in between. Physics theory is responsible for the breakthroughs in electronics that precipitate advances in modern computers and electronic media.</p>
    <a href="question1.php?n=1" class="start">Start Quiz</a>  
          </div>
</div>
    
        
           
            <div class="wrapper1" >
  <a href="question-english.html" class="link1">
    <div class="blur" style="background: url('english.jpg') 50% 50% / cover;"></div>
    <img src="english.jpg" alt="Title" class="pic" />
  </a>

  <div class="content1">
       <h3 style="font-family: Showcard Gothic;text-decoration: underline;font-weight: bolder;">ENGLISH</h3>
    <p class="text" style="font-family: Lucida Handwriting;font-weight: 200;"> English is language of communication between the people with different cultures . It is also the language of computers that help to communicate with the people around the world through Internet technology and e-mail,it is the language of the modern era </p>
    <a href="question2.php?n=1" class="start">Start Quiz</a>
                </div>
</div>
               <div class="wrapper">
  <a href="question-phy.html" class="link">
    <div class="blur" style="background: url(giphy.gif) 50% 50% / cover;"></div>
    <img src="giphy.gif" alt="Title" class="pic" />
  </a>

  <div class="content">
   <h3 style="font-family: Showcard Gothic;text-decoration: underline;">GEOGRAPHY</h3>
    <p class="text" style="font-family: Lucida Handwriting;font-weight: 200;" >Geography is a focus within the curriculum for understanding and resolving issues about the environment and sustainable development. It is also an important link between the natural and social sciences. As pupils study geography, they encounter different societies and cultures </p>
    <a href="question3.php?n=1" class="start">Start Quiz</a>
                   </div>
</div>
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