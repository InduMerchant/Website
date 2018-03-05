<?php include 'database1.php';  ?>
<?php session_start(); ?>
<?php
//check to see if score is set
if(!isset($_SESSION['score']))
{
    $_SESSION['score']=0;
}
if($_POST){
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;
    //get total questions
    
    $query="SELECT * FROM `questions`";
    //get result
    $results= $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;
    
    
    
    
    
//get correct choice
    $query = "SELECT * FROM `choices`
    WHERE question_number = $number AND is_choice = 1";
    //get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    //get row
    $row = $result->fetch_assoc();
    //set coorect choice
    $correct_choice= $row['id'];
    
    //compare
    if($correct_choice == $selected_choice){
        
        //answer is correct
        $_SESSION['score']++ ;
        
    }
//check if last question
    if($number == $total){
        header("Location: final1.php");
        exit();
    }else{
        header("Location:question1.php?n=".$next);
    }
        }
?>   