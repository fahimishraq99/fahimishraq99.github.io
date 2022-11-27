<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['tid']) && isset($_POST['gid']) && isset($_POST['salary']) && isset($_POST['bonus']) && isset($_POST['tsalary'])){
	// write the query to check if this username and password exists in our database
	$a = $_POST['tid'];
	$b = $_POST['gid'];
	$c = $_POST['salary'];
	$d = $_POST['bonus'];
	$e = $_POST['tsalary'];
	$sql = " insert into salary values ( '$a', '$b', '$c', '$d', '$e' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_salary.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_salary.php");
	}
	
}


?>
