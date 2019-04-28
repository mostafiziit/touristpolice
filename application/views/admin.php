<!DOCTYPE html>
<html>
<head>
	<title>test</title>
   
    <link rel="stylesheet" href="assets/css/style2.css">

	<link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body style="background-image:url('assets/images/scenery2.jpg');">
	<?php

       echo $navbar;
    ?>

    	<section class="w-100" style="margin-top:50px;">
    		<form>
	    		<div class="form-col mt-5 w-50 m-auto " style="border:2px solid white;border-radius:20px;background-color:rgba(245,245,245,.7);">
	                      
	                        <div class="row m-auto">
	                                    
	                            <div class="m-auto w-50">
	                            	<label style="color:blue;font-weight: bold;">Place Name</label>
	                            	<input type="text" name="placename" required="text" class="form-control" placeholder="Place Name" style="border: 1.1px solid blue;width:100%;background-color:rgba(245,245,245,.7);border-radius: 10px;">
	                            </div>
	                            
	                        </div>

	                         <div class="row ml-auto mr-auto mt-3">
	                                    
	                            <div class="m-auto w-50">
	                            	<label style="color:blue;font-weight: bold;">Location</label>
	                            	<input placeholder="Location" type="text" name="placename" required="text" class="form-control" style="border: 1.1px solid blue;width:100%;background-color:rgba(245,245,245,.7);border-radius: 10px;">
	                            </div>
	                            
	                        </div>

	                         <div class="row ml-auto mr-auto mt-4">
	                                    
	                            <div class="m-auto w-50">
	                            	<label style="color:blue;font-weight: bold;">Description</label>
	                            	<input type="text" placeholder="Description" name="placename" required="text" class="form-control" style="border: 1.1px solid blue;width:100%;background-color:rgba(245,245,245,.7);border-radius: 10px;height:120px;text-align:top">
	                            </div>
	                            
	                        </div>

	                        <div class="row ml-auto mr-auto mt-5 mb-4">
	                               <div class="m-auto w-50">     
	                          			<button style="background-color:blue;color: white;font-weight:bold;border-radius: 10px;height:40px;width:160px;">Choose Image</button>
	                          			<button style="background-color:blue;color: white;font-weight:bold;border-radius: 10px;height:40px;width:160px;" type="submit">Add Place</button>
	                           		</div>
	                            
	                        </div>
	                </div>        
	                       
                </form>
                    
    </section>


    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>