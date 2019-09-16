<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$userid   = "";
$phone   = "";
$gender   = "";
$address   = "";
$housename = "";
$bedroom = "";
$bathroom = "";
$balcony = "";
$city = "";
$area = "";
$utility = "";
$rent = "";
$house_type = "";
$house_category = "";

$errors = array();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'house_rent_system');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
            $phone = mysqli_real_escape_string($db, $_POST['phone']);
            $gender = mysqli_real_escape_string($db, $_POST['gender']);
            $address = mysqli_real_escape_string($db, $_POST['address']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($userid)) { array_push($errors, "User ID is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM owner_info WHERE userid='$userid' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userid'] === $userid) {
      array_push($errors, "User ID already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = base64_encode($password_1);//encrypt the password before saving in the database

  	//$query = "INSERT INTO `owner_info` (`owner_id`, `userid`, `user_name`, `email`, `pass_word`, `phone`, `gender`, `address`) VALUES (NULL,'$userid','$username', '$email', '$password','$phone', '$gender','$address')";
    $query = "INSERT INTO `owner_info` ( `userid`, `user_name`, `email`, `pass_word`, `phone`, `gender`, `address`) VALUES ('$userid','$username', '$email', '$password','$phone', '$gender','$address')";
  	mysqli_query($db, $query);
  	$_SESSION['userid'] = $userid;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: postpropertylogged.php');
  }
}

    if (isset($_POST['login_user'])) {
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($userid)) {
    array_push($errors, "User ID is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $passwordo=base64_encode($password);
    $query = "SELECT * FROM owner_info WHERE userid='$userid' AND pass_word='$passwordo'";
    $results = mysqli_query($db, $query);

    $firstrow = mysqli_fetch_assoc($results);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['isLogged'] = true;
      $_SESSION['userid'] = $userid;
      $_SESSION['userName'] = $firstrow['user_name'];
      $_SESSION['userDbId'] = $firstrow['id'];
      //$_SESSION['pass_word'] = $passwordo;
      $_SESSION['success'] = "Welcome To Our Online House Rent System";
      header('location: postpropertylogged.php');
    }else {
      array_push($errors, "Wrong User ID / Password Combination!");
    }
  }
}




?>
