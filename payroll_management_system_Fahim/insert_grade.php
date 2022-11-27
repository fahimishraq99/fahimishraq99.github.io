<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['gid']) && isset($_POST['gname']) && isset($_POST['psuccess'])){
	// write the query to check if this username and password exists in our database
	$a = $_POST['gid'];
	$b = $_POST['gname'];
	$c = $_POST['psuccess'];
	$sql = " insert into grade values ( '$a', '$b', '$c' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_grades.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_grade.php");
	}
	
}


?>
