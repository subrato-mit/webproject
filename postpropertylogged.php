<?php include('server_post.php') ?>

<!-- php echo '<pre>'; print_r($_SESSION); ? -->

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
                                 <li><a href="logout.php">Logout</a></li>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="postproperty.php">Post Property</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><form><input type="input"name="input" placeholder="FIND TO-LE">
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
                        <div class="search-titles">
                            <a href="postproperty.php"><font size = "5" color="white">GIVE / UPDATE YOUR Property Details </font></a>
                        </div>
                        
                        <div class="headerlog">
                        	<form method="post" action="postpropertylogged.php" enctype="multipart/form-data" >
                                <input type="hidden" name="size" value="1000000">
                                <?php include('errors.php'); ?>
                        		<div class="row">

                        		<div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>User_name</b></p>
                                    	<input type="Text"name="username" value ="<?php echo $_SESSION['userName']; ?>" placeholder="Type user id" class="form-control">
                                        
                                    </div>
                                </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <p align="center"><b>House_name</b></p>
                                        <input type="text"name="housename" placeholder="Type user id" class="form-control">
                                        
                                    </div>
                                </div>

                       
                                                       <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>City</b></p>
                                    	<select name="city" id="city" class="form-control">
                                         <option value="">Any</option>
                                          <option value="Sylhet">Sylhet</option>
                                            </select>
                                    </div>
                                </div>


                                 <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>Area</b></p>
                                        <select name="area" class="form-control" id="area">

                                            <option value="">Any</option>
                                            <option value="Amborkhana">Amborkhana</option>
                                            <option value="Lamabazar">Lamabazar</option>
                                            <option value="Londoni road">Londoni road</option>
                                            <option value="Medical">Medical</option>
                                            </select>
                                    </div>
                                </div>

                           
                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>House_category</b></p>
                                        <select name="house_category" class="form-control" id="property_category">
                                            <!--input type="checkbox" name="vehicle" value="Bike" /> I have a bike<br /-->
                                            <option value="">Any</option>
                                            <option value="Building">Building</option>
                                            <option value="Duplex">Duplex</option>
                                            <option value="Flat/Apartment">Flat/Apartment</option>
                                            <option value="Tinshed">Tinshed</option>
                        
                                            </select>
                                            </div>
                                      </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>House Type</b></p>
                                        <select name="house_type" class="form-control" id="rentsharing">
                                            <!--input type="checkbox" name="vehicle" value="Bike" /> I have a bike<br /-->
                                            <option>Any</option>
                                            <option value="Room">Room</option>
                                            <option value="Room_mate">Room_mate</option>
                                            <option value="Sublet">Sublet</option>
                                            <option value="Full_house">Full_house</option>
                                            <option value="Hostel">Hostel</option>
                                        </select></select>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>Utility</b></p>
                                        <select name="utility" class="form-control" id="furniture">
                                            <!--input type="checkbox" name="vehicle" value="Bike" /> I have a bike<br /-->
                                            <option value="">Any</option>
                                            <option value="Include Electricity_bill">Include Electricity_bill</option>
                                            <option value="Include Gas,Electricity and Water_bill,">Include Gas,Electricity and Water_bill</option>
                                            <option value="Include Gas,Electricity_bill">Include Gas,Electricity_bill</option>
                                            <option value="Include Gas_bill">Include Gas_bill</option>
                                            <option value="Include Water_bill">Include Water_bill</option>
                                            <option value="None">None</option>
                                        </select></select>
                                        </select>
                                    </div>
                                </div>


                               
                                 <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>Bedroom</b></p>
                                    	<input type="number"name="bedroom" placeholder="Type no of Bedrooms" class="form-control">
                                        
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>Bathroom</b></p>
                                    	<input type="number"name="bathroom" placeholder="Type no of Bathrooms" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <p align="center"><b>Balcony</b></p>
                                        <input type="number"name="balcony" placeholder="Type no of Balcony" class="form-control">
                                        
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                               
                                    <div class="form-group">
                                    	<p align="center"><b>Size (SQ.FT.)</b></p>
                                    	<input type="number"name="size" placeholder="Type Area in Sq.ft." class="form-control">
                                        </div>
                                    </div>
                                
                                
                                 <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>Rent </b></p>
                                    	<input type="number"name="rent" placeholder="Type expected rent price" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>Floor</b></p>
                                    	<input type="text"name="floor" placeholder="Type which floor" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                    	<p align="center"><b>House_image</b></p>
                                         <input type="file" name="image">
                                        
                                         </div>
                               
                               

                                <div class="form-group mb-0">
                                	<p align="center"><br></b></p>
                                    <button type="submit" class="btn south-btn" name="submit_form">Submit</button>
                                    </div>
                                </div>
                            </div>
                        
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