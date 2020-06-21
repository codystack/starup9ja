<?php
include('./controllers/dbconnect.php');


// LOGIN USER
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_fetch_assoc($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = header("Location: dashboard");
      exit();
  	}else {
  		$errors = header("Location: ?error=loginnotsuccess");
      exit();
  	}
  }
}


// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
  $state_of_origin = mysqli_real_escape_string($db, $_POST['state_of_origin']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $date_of_birth = mysqli_real_escape_string($db, $_POST['date_of_birth']);
  $age_category = mysqli_real_escape_string($db, $_POST['age_category']);
  $performance_category = mysqli_real_escape_string($db, $_POST['performance_category']);


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      $errors = //header("Location: ?error=regnotsuccess");
      exit();
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (first_name, last_name, email, phone_number, state_of_origin, address, date_of_birth, age_category, performance_category) 
  			  VALUES('$first_name', '$last_name', '$email', '$phone_number', '$state_of_origin', '$address', '$date_of_birth', '$age_category', '$performance_category')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = header("Location: ?success=regsuccess");
    exit();
  }
}


?>