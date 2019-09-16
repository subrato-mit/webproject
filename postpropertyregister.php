<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Title  -->
    <title>Sylhetrentbd</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:sylhetrentbd@gmail.com">sylhetrentbd@gmail.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+880 17 77 03 90 33">+880 17 77 03 90 33</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap">
                            	<span class="top"></span><span class="bottom"></span>
                            </div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="postproperty.php">Post Property</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><form><input type="input"name="input" placeholder="             FIND TO-LET     ">
                    		        <input type="submit" name="submit" value="Search">
                    	             </form></li>
                                
                            </ul> </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                    	<h3 class="breadcumb-title">Post Property</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <a href="postproperty.php"><font size = "5" color="white">Registration</font></a>
                        </div>
                        
                        <div class="header"><form method="post" action="postpropertyregister.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>User ID</label>
      <input type="text" name="userid" value="<?php echo $userid; ?>">
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <label>Phone</label>
      <input type="text" name="phone" value="<?php echo $phone; ?>">
    </div>
    <div class="input-group">
      <label>Gender</label>
      <input type="text" name="gender" value="<?php echo $gender; ?>">
    </div>
    <div class="input-group">
      <label>Address</label>
      <input type="text" name="address" value="<?php echo $address; ?>">
    </div>

    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    
    <p>
        Already a member? <a href="postproperty.php">Sign in</a>
    </p>
  </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    
    <!-- ##### Listing Content Wrapper Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                   
                    <!-- Single Footer Widget -->
                                                <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt="">      +880 17 77 03 90 33</h6>
                                <h6><img src="img/icons/envelope.png" alt="">      Sylhetrentbd@gmail.com</h6>
                                <h6><img src="img/icons/location.png" alt="">      Area 27,Sunam Residential Area, Sunamgonj Road, Ghupal, Jalalabad, Sylhet<br/><br/><br/><br/><br/><br/></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                   
                    <!-- Single Footer Widget -->
                    
        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved:<a href="index.html" target="_blank"><font color="white"> Sylhetrentbd</font></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>