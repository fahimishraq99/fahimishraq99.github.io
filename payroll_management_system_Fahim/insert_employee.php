<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['eid']) && isset($_POST['ename']) && isset($_POST['address']) && isset($_POST['salary']) && isset($_POST['dob']) && isset($_POST['sex']) && isset($_POST['assigned'])){
	// write the query to check if this username and password exists in our database
	$t = $_POST['eid'];
	$u = $_POST['ename'];
	$v = $_POST['address'];
	$w = $_POST['salary'];
	$x = $_POST['dob'];
	$y = $_POST['sex'];
	$z = $_POST['assigned'];
	$sql = " insert into employee values ( '$t', '$u', '$v', '$w', '$x', '$y', '$z' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_employees.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_employee.php");
	}
	
}


?>
