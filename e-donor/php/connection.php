<?php
	session_start(); 
	$name = "";
	$age = "";
	$weight = "";
	$errors = array();
	$errors1 = array();
	$curYear = date('Y'); 
	
	//connecting to the database
	$db = mysqli_connect('localhost','root','','e-donor');

	//Validate Applicant if Next Button Is pressed
	if (isset($_POST['next'])) {
		
		$age = mysqli_real_escape_string($db, $_POST['age']);
		$weight = mysqli_real_escape_string($db, $_POST['weight']);
		

		//ensure all fields are filled properly
		
		if (empty($age)) {
			array_push($errors, "Your Age is required");
		}
		else {
			if (($curYear - $age) < 18 ) {
			array_push($errors, "You must be above 18 years of age");
			}
			elseif (($curYear - $age) > 60) {
			 	array_push($errors, "You can't be a donor if you're above 60 years of age");
			 } 
		}
		if (empty($weight)) {
			array_push($errors, "Your Weight is required");
		}
		else {
			if ($weight < 50) {
			array_push($errors, "Weight must be greater than 50");
			}

		}
		

		
		//if there are no errors, save user to the database
		if (count($errors) == 0) {
			$_SESSION['age'] = ($curYear - $age);
			$_SESSION['weight'] = $weight;
			header('location: php/aftervalidate.php?age=valid'); //redirecting to the rest of the sign up form
			exit();
		}
		else {
			include('php/donor_signup.php');
		}
	}
	
	
	//Register Donor
	if (isset($_POST['submit'])) {
		#echo "yeeees!";
		#$bloodType = $_POST['bloodType'];
		#echo $bloodType;
		#$subcounty = $_POST['subcounty'];
		#echo $subcounty;
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$age = mysqli_real_escape_string($db, $_POST['age']);
		$weight = mysqli_real_escape_string($db, $_POST['weight']);
		$bloodType = mysqli_real_escape_string($db, $_POST['bloodType']);
		$county = mysqli_real_escape_string($db, $_POST['county']);
		$subcounty = mysqli_real_escape_string($db, $_POST['subcounty']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$idno = mysqli_real_escape_string($db, $_POST['idno']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);
		$username = mysqli_real_escape_string($db, $_POST['username']);

		if (empty($name)) {
			array_push($errors, "Your Name is required");
		}
		if (empty($weight)) {
			array_push($errors, "Your Weight is required");
		}
		else {
			if ($weight < 50) {
			array_push($errors, "Weight must be greater than 50");
			}

		}
		if ($bloodType == "default") {
			array_push($errors, "*Please select your blood type*");
		}
		if ($county == "empty") {
			array_push($errors, "*Please select your county*");
		}
		if ($subcounty == "0") {
			array_push($errors, "*Please select your subcounty*");
		}
		if (empty($phone)) {
			array_push($errors, "*Please fill in your phone Number*");
		}
		else {
			if (strlen($phone) != 10 ) {
				array_push($errors, "*The phone number doesn't seem to be valid, Must contain 10 digits*");
			}
		}
		if (empty($idno)) {
			array_push($errors, "*Please fill in your ID Number*");
		}
		else {
			if (strlen($idno) != 8 ) {
				array_push($errors, "*The ID number doesn't seem to be valid, Must contain 8 digits*");
			}
		}
		if (empty($username)) {
			array_push($errors, "*Please input a Username*");
		}
		if (empty($password1)) {
			array_push($errors, "*Please set a password*");
		}
		if ($password1 != $password2) {
			array_push($errors, "*The two passwords don't match*");
		}

		if (count($errors) == 0) {
			$sqldonor = "INSERT INTO donor(name, age, weight, bloodtype, county, subcounty, phone, idno, username, password) VALUES('$name','$age','$weight','$bloodType','$county','$subcounty','$phone','$idno','$username','$password1')";
			mysqli_query($db, $sqldonor);
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $name;
			$_SESSION['donor'] = "Donor";
			header('location: dashboard.php');
		}

	}

	//Take In Recipient Details
	if (isset($_POST['recsubmit'])) {
		$recname = mysqli_real_escape_string($db, $_POST['recname']);
		$recidno = mysqli_real_escape_string($db, $_POST['recidno']);
		$recbloodType = mysqli_real_escape_string($db, $_POST['recbloodType']);
		$reccounty = mysqli_real_escape_string($db, $_POST['reccounty']);
		$recsubcounty = mysqli_real_escape_string($db, $_POST['recsubcounty']);

		if ($recbloodType == "default") {
			array_push($errors, "*Please select Recipient's blood type*");
		}
		if ($reccounty == "empty") {
			array_push($errors, "*Please select Recipient's county*");
		}
		if ($recsubcounty == "0") {
			array_push($errors, "*Please select Recipient's subcounty*");
		}

		if (count($errors) == 0) {
			$sqlrec = "INSERT INTO recipient(name, idno, bloodtype, county, subcounty) VALUES('$recname', '$recidno', '$recbloodType', '$reccounty', '$recsubcounty')";
			mysqli_query($db, $sqlrec);
			
			$_SESSION['recipient'] = $recname;
			$_SESSION['recsubcounty'] = $recsubcounty;
			$_SESSION['recbloodType'] = $recbloodType;
			$_SESSION['reccounty'] = $reccounty;
			header('location: dashboard.php');
		}
	}

	//Login Donor
	if (isset($_POST['login'])) {
		#$usernameErr = "";
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		//ensure all fields are filled properly
		if (empty($username)) {
			#$usernameErr = "USername is required"
			array_push($errors, "*Username is required*");
		}
		if (empty($password)) {
			array_push($errors, "*Password is required*");
		}

		if (count($errors) == 0 ) {
			
			$query = "SELECT * FROM donor WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Welcome user $username";
				header('location: dashboard.php'); //redirect to home page
			} else{
				array_push($errors, "*The username/password combination do not exist*");
			}
		}
	}

	
	

	
	//Log the user out
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['recipient']);
		header('location: index.php');
	}