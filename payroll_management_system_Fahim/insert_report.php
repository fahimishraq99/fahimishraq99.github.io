<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['eid']) && isset($_POST['approval'])){
	// write the query to check if this username and password exists in our database
	$a = $_POST['eid'];
	$b = $_POST['approval'];
	$sql = " insert into leave_report values ( '$a', '$b' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_reports.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_report.php");
	}
	
}


?>
