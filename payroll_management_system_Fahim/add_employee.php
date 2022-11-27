<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> THE TITLE </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#33FF33;"> GROUP 4 </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="show_employees.php" style="color:#33FF33;"> View Employees </a> 
			</div>
			<div class="col-md-10" style="text-align: center"> 
				<a href="home.php" style="color:#33FF33;"> Home </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title" style="color:#17202A;"> Add New Employee </div>
		
		<form action="insert_employee.php" class="form_design" method="post">
		    <div style="color:#17202A;"> 
			    Employee ID: <input type="text" name="eid"> <br/>
			    Employee Name: <input type="text" name="ename"> <br/>
				Address: <input type="text" name="address"> <br/>
				Salary: <input type="text" name="salary"> <br/>
				Date of Birth: <input type="text" name="dob"> <br/>
				Sex: <input type="text" name="sex"> <br/>
				Assigned to: <input type="text" name="assigned"> <br/>
			</div>
			<input type="submit" value="Add to Database">
		</form>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

