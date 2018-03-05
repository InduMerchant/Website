<?php include "database3.php"; ?>
<?php
// get questions
$query="SELECT * FROM questions";
//get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

?>
<html>
<head>
    <title>WELCOME OF QUIZZLER</title>
    
    </head>
<body>
    <header>
    <div class="container">
        
        
        <h1>PHP container</h1>
        </div>
    
    </header>
    <main>
    <div class="container">
        <h2>this is quiz to test your knowledge</h2>
        <ul>
        <li><strong>number of questions:</strong><?php echo $total;  ?>      </li>
            <li><strong>type:</strong>multiple choice</li>
              <li><strong>estimated time:</strong><?php echo  $total * .5; ?> </li>
        </ul>
      <a href="question3.php?n=1" class="start">Start Quiz</a>
        </div>
    
    </main>
    <footer>
    <div class="container">
        copyright
        
        
        </div>
    </footer>
    </body>
</html>