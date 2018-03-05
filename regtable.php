<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create conection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check conection
if (!$con) {
    die("conection failed: " . mysqli_conect_error());
}
if(isset($_POST['submit']))
{ 
    $Name = $_POST['regname'];
    $phnno = $_POST['regphnno'];
    $email = $_POST['emailid'];
    $password = $_POST['password'];
    $radiobt = $_POST['radiobutton'];
    $dob = $_POST['dob'];
    $sql = "INSERT INTO regtable(regname,regphnno,emailid,password,radiobutton,dob) 
    VALUES('$Name','$phnno','$email','$password','$radiobt','$dob')";
    
        if (mysqli_query($con, $sql)) {
	     echo "Registered successfully";
		header('Location:topics.php');
    } 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    } 
}



/*
if(isset($_POST['Login'])){
		$email = $_POST['emailid'];
		$password = $_POST['password'];
		$query = "SELECT * FROM regtable WHERE emailid='$email' AND password='$password'";
		$retval = mysqli_query($con,$query);
		if(mysqli_num_rows($retval) == 1){
			echo $emailid;
			header('userloginaft.html');
		    exit();
			
		}
		else{
			echo "Invalid login!";
			exit();
		}
		
	}

*/
?>
    