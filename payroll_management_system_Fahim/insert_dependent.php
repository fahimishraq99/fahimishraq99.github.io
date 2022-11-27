<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['eid']) && isset($_POST['dname']) && isset($_POST['sex']) && isset($_POST['dob']) && isset($_POST['relationship'])){
	// write the query to check if this username and password exists in our database
	$a = $_POST['eid'];
	$b = $_POST['dname'];
	$c = $_POST['sex'];
	$d = $_POST['dob'];
	$e = $_POST['relationship'];
	$sql = " insert into dependent values ( '$a', '$b', '$c', '$d', '$e' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_dependents.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_dependent.php");
	}
	
}


?>