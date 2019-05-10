<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
   
     <link rel="stylesheet" href="<?php echo base_url().'assets/css/style2.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate-3.7.0.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome-4.7.0.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/fonts/flat-icon/flaticon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-4.1.3.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl-carousel.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/nice-select.css'?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url().'assets/css/mdb.min.css'?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    
</head>
<body>



    <nav class="navbar navbar-expand-sm z-depth-1"  >
	   <a href="index.html" class="navbar-brand" style="font-size:16px;font-weight:bold;color:#EF6C00"><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Bangladesh</span><img src="assets/images/logo.png" alt="logo" height="55" width="55">Police</a>
    	<ul class="navbar-nav justify-content-end w-75">
            <li class="nav-item m-3">
              <a class="nav-link" href="manage_officers" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Officers</a>
            </li>
		    <li class="nav-item m-3">
		      <a class="nav-link" href="manageuser" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage User</a>
		    </li> 
		    <li class="nav-item m-3">
		      <a class="nav-link" href="deploy" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Deploy Duty</a>
		    </li>
		    <li class="nav-item m-3">
		      <a class="nav-link" href="touristplace" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Tourist Place</a>
		    </li>

            <li class="nav-item m-3">
              <a class="nav-link" href="hotelmanage" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Hotels</a>
            </li>
	  	</ul>
	  	<ul class="navbar-nav justify-content-end w-25">
	  		
		    <li class="nav-item m-2">
		      <a class="nav-link" href="#" style="color:black;font-weight:500px;font-size:14px;font-family:sans-serif;padding-right:6px">
		      	
				<i class="fa fa-user-circle-o" style="font-size:30px;color:green;display: block;"></i>
		      	Profile
		      </a>
		    </li>
	  	</ul>
    	
    </nav>

    
     <?php if($this->session->flashdata('result')){ ?>
            <div class="w-100 m-3">
                <div class="alert alert-danger m-auto text-center w-50 "> <?php  echo $this->session->flashdata('result') ?> </div>
            </div>
    <?php } ?>

   

    <div class="container w-100 m-5 card" style="border-radius:10px">
    	
        <div class="row">

    		<div class="col-4">
    			<form action="insert_hotel" method="POST" class="m-3">
    				<div>
    					<label style="display:block;color:green">Insert Hotel Name*</label>
    					<input type="text" required="text" name="placename" class="w-100" style="border:1px solid blue;border-radius:6px;height:37px;margin-top:-4px;padding-left:6px">
    				</div>
    				<div class="mt-3">
    					<label style="display:block;color:green">Contact*</label>
                        <input type="text" required="text" name="hotelcontact_text" class="w-100" style="border:1px solid blue;border-radius:6px;height:37px;margin-top:-4px;padding-left:6px">
    				</div>
    				<div class="mt-4">
    					<label style="display:block;color:green">Location*</label>
    					<select id="hotel_location" onclick="search_officers_by_location()" required="text" name="location" class="w-100" style="border:1px solid blue;border-radius:8px;height:37px;margin-top:-4px">
        					 <option selected="true">Dhaka</option>
                             <option>Chittagong</option>
                             <option>Barisal</option>
                             <option>Khulna </option>
                             <option>Mymensingh</option>
                             <option>Rajshahi</option>
                             <option>Rangpur</option>
                             <option>Sylhet</option>
    					</select>
    				</div>

                    <div class="mt-5">
                        <label style="display:block;color:green">Tourist Place-where hotel is situated</label>

                        <select id="touristplace_list" required="text" name="location" class="w-100" style="border:1px solid blue;border-radius:8px;height:37px;margin-top:-4px">
                             
                        </select>
                       
                    </div>

                    <div class="mt-6">
                        <label style="display:block;color:green">Insert Webpage*</label>
                        <input type="text" required="text" name="hotelwebpage_text" class="w-100" style="border:1px solid blue;border-radius:6px;height:37px;margin-top:-4px;padding-left:6px">
                    </div>

    				<button  name="submit" type="submit"  class="w-100 btn btn-success mt-5" style="border-radius:10px;font-weight:bold
    				">SUBMIT</button>
    				
    			</form>

            </div>
            

            <div class="col-8">
                    
                <table class="table table-bordered table-responsive">

                     <thead>
                    <tr>
                          <td>Hotel id</td>
                          <td>Hotel Name</td>
                          <td>Booking Contact </td>
                          <td> TouristPlace ID</td> 
                          <td> Click To Book</td> 
            
                          <td>
                            Edit/Delete
                         </td>
                     </tr>


                     </thead>

                  <tbody >
                    <?php

                        if($hotel_data)
                        {
                            foreach ($hotel_data as $key ) {?>
            
                                <tr>
                                    <td><?php echo $key->hotel_id;?></td>
                                    <td><?php echo $key->hotel_name;?></td>
                                    <td><?php echo $key->hotel_contact;?></td>
                                    <td><?php echo $key->touristplace_id;?></td>
                                    <td>
                                        <a href="<?php echo $key->hotel_booking_page;?>" target="_blank"><?php echo $key->hotel_booking_page;?></a>
                                    </td>
                                    <td>
                                         <a href="<?php echo 'edit_hotel/'.$key->hotel_id ?>" class="btn btn-info btn-sm" >Edit  </a>
                                          <a href="<?php echo 'delete/'.$key->hotel_id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do You want to Delete this record?');">Delete
                                                  </a> 
                                    </td>
                                 </tr>
                    <?php
                             }
                        }
                    ?>
           
                 </tbody>
        
                 </table>
             </div>
         </div>       
    		
    	</div> 	
    </div>


	
	
	


    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>


    <script type="text/javascript">
        
             function search_officers_by_location(){
               
            
            var location = $('#hotel_location').val();
            //alert(location);
           if(location != '')  
            {  
                $.ajax({  
                    url:"search_places",  
                    method:"POST",  
                    data:{location:location},  
                    success:function(data)  
                    {  
                        $('#touristplace_list').fadeIn();  
                        $('#touristplace_list').html(data);  
                    }  
                });  
            } 
        }


    </script>

     <script type="text/javascript" src="<?php echo base_url().'assets/js/vendor/jquery-ui.min.js'?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>





</body>
</html>