<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['did']) && isset($_POST['dtname']) && isset($_POST['dtdescription'])){
	// write the query to check if this username and password exists in our database
	$a = $_POST['did'];
	$b = $_POST['dtname'];
	$c = $_POST['dtdescription'];
	$sql = " insert into department values ( '$a', '$b', '$c' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_department.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_department.php");
	}
	
}


?>
