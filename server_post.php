<?php
session_start();

if(empty($_SESSION['isLogged'])) {



  header('location: postproperty.php');
} 

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
$image = "";
$errors = array();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'house_rent_system');

 $msg = "";
if (isset($_POST['submit_form'])) {

   // echo '<pre>';

   //      var_dump('hehee', $query);
        
   //      print_r($_POST, $_FILE);
 $image = $_FILES['image']['name'];

  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $housename = mysqli_real_escape_string($db, $_POST['housename']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $area = mysqli_real_escape_string($db, $_POST['area']);

  $house_category = mysqli_real_escape_string($db, $_POST['house_category']);
            $house_type = mysqli_real_escape_string($db, $_POST['house_type']);
            $utility = mysqli_real_escape_string($db, $_POST['utility']);
            $rent = mysqli_real_escape_string($db, $_POST['rent']);
            $bedroom = mysqli_real_escape_string($db, $_POST['bedroom']);
            $bathroom = mysqli_real_escape_string($db, $_POST['bathroom']);
            $balcony = mysqli_real_escape_string($db, $_POST['balcony']);
            $size = mysqli_real_escape_string($db, $_POST['size']);
            $floor = mysqli_real_escape_string($db, $_POST['floor']);
         


 $target = "images/".basename($image);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($housename)) { array_push($errors, "housename is required"); }
  if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($area)) { array_push($errors, "area is required"); }
  if (empty($rent)) { array_push($errors, "rent is required"); }
  if (empty($bedroom)) { array_push($errors, "bedroom is required"); }
   if (empty($bathroom)) { array_push($errors, "bathroom is required"); }
  
  if (count($errors) == 0) {
    $query = "SELECT * FROM owner_info WHERE user_name='$username'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['user_name'] = $username;
      $_SESSION['success'] = "Your Information Posted Successfully";
      header('location: postpropertylogged.php');
    }else {
      array_push($errors, "Wrong User name");
    }
 }    
  
     $query = "INSERT INTO `house_info` (`user_name`, `house_name`, `bedroom`, `bathroom`, `balcony`, `city`, `area`, `floor`, `utility`, `size`, `rent`, `house_type`, `house_catagory`, `house_image`) 
     VALUES ('$username', '$housename', '$bedroom','$bathroom', '$balcony', '$city', '$area','$floor', '$utility', '$size', '$rent','$house_type', '$house_category','$image');";

     
     /*
     if(!empty($_POST)) {

        echo '<pre>';

        var_dump('hahasss', $query, $_SESSION);

        $res =  mysqli_query($db, $query);

        var_dump($res, mysqli_error($db));

       exit();
      }

*/

/*      

$qry = 'select * from where ';

$arr = [];

  // by adding (array_push()) corresponding error unto $errors array
  if (!empty($city)) { $arr['house_type'] = $house_type }
  if (!empty($area)) { $arr['area'] = $area }

 if(!empty($arr)) {

    $qry = 'select * from `house_info`; ';

    //direct ............

 } else {

  $sep = '';

  foreach ($arr as $key => $value) {
    
    $qry .= $sep." `$key` like `$value`";

    $sep = ' and ';

  }

  mysqli_query($db, $qry);

 }   

//*/


  if (empty($housename)) { array_push($errors, "housename is required"); }
  if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($area)) { array_push($errors, "area is required"); }
  if (empty($rent)) { array_push($errors, "rent is required"); }
  if (empty($bedroom)) { array_push($errors, "bedroom is required"); }
   if (empty($bathroom)) { array_push($errors, "bathroom is required"); }

    mysqli_query($db, $query);  //inserting into db
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "uploaded successfully";
    }else{
      $msg = "Failed to upload ";
    }
     

    //$_SESSION['user_name'] = $username;
    //$_SESSION['success'] = "You are now logged in";
   // header('location: postpropertylogged.php');
  
}
