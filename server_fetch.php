<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "house_rent_system");

  // Initialize message variable
   $result = mysqli_query($db, "SELECT * FROM house_info");

    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='col-12 col-md-6 col-xl-4'>";
          echo "<div class='single-featured-property mb-50'>";
            echo "<div class='property-thumb'> ";
              echo "<div id='img_div'>";
              echo "<p>".$row['house_name']."</p>";
              echo "<p>".$row['area']."</p>";
              echo "<a href='http://localhost/trialdataone_update03/index.php/".$row['id']."''>";
                echo "<img src='images/".$row['house_image']."' style='width:100%'>";
              echo "</a>";
              echo "<div class='list-price'>";
              echo "<p>".$row['rent']."</p>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
      
    }
  ?>