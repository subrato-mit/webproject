

<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $n_id = mysqli_real_escape_string($db, $_POST['n_id']);
  $name = mysqli_real_escape_string($db, $_POST['name']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image, n_id, name) VALUES ('$image', '$n_id', '$name')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "uploaded successfully";
    }else{
      $msg = "Failed to upload ";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>

   }
</style>
</head>
<body>
  <div class="header">
    <h2><td><center><u>Personal Information Update</u></center> </td></h2>
<title>Image Upload</title>

<div id="content">
  
  <form method="POST" action="index.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    
  <div>
      <input type="text" name="n_id" placeholder="Enter NID">
    </div>
  <div>
      <input type="text" name="name" placeholder="Name">
    </div>
  <div>
      Image: <input type="file" name="image">
    </div>
    
    <div>
      <button type="submit" name="upload">Upload</button>
    </div>
  </form>
</div>
</body>
</html>

<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
    echo "<p>".$row['n_id']."</p>";
    echo "<p>".$row['name']."</p>";
        echo "<img src='images/".$row['image']."' >";
      echo "</div>";
    }
  ?>