<?php include "database2.php";?>
<?php 
if(isset($_POST['submit']))
{
    //get post variables
$question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
     $correct_choice= $_POST['correct_choice'];
    //choices array
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];
    $choices[5] = $_POST['choice5'];

//question query
$query ="INSERT INTO `questions`(question_number,text)
VALUES('$question_number','$question_text')";
    //run query
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
    //validate insert
    if($insert_row){
        foreach($choices as $choice => $value){
            if($value !="")
            {
                if($correct_choice == $choice){
                    $is_choice = 1;
                }else
                {
                    $is_choice = 0;
                }
            //choice query
                $query ="INSERT INTO `choices`(question_number,is_choice,text)
                VALUES ('$question_number','$is_choice','$value')";
            //run query
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
                //validate query
                if($insert_row){
                    continue;
                }else{
                    die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
                }
            
            }
            
            
            
        }
        $msg = "question has been added";
    }


}
//get total questions
 $query="SELECT * FROM `questions`";
    //get result
    $results= $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;
    $next=$total+1;
    
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
      <h2>Add a question</h2>
        <?php
        if(isset($msg)){
           echo '<p>'.$msg.'</p>'; 
        }?>
        <form method="post" action="add2.php">
        <p>
            <label>Question number</label>
            <input type="number" value="<?php echo $next;?>" name="question_number" />
            </p>
            <p>
            <label>question Text:</label>
                <input type="text" name="question_text" />
            </p>
            <p>
            <label>choice #1:</label>
                <input type="text" name="choice1" />
            </p>
            <p>
            <label>choice #2:</label>
                <input type="text" name="choice2" />
            </p>
            <p>
            <label>choice #3:</label>
                <input type="text" name="choice3" />
            </p>
            <p>
            <label>choice #4:</label>
                <input type="text" name="choice4" />
            </p>
            <p>
            <label>choice #5:</label>
                <input type="text" name="choice5" />
            </p>
            <p>
            <label>coorect choice number</label>
                <input type="number" name="correct_choice" />
            </p>
<p>
            <input type="submit" name="submit" value="submit"/>
            </p>        
        
        </form>
        </div>
    
    </main>
    <footer>
    <div class="container">
        copyright
        
        
        </div>
    </footer>
    </body>
</html>