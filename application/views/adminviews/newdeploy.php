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
<body style="background-image: url('<?php echo base_url().'assets/images/deploy1.jpg'?>');">

    <header>
        <nav class="navbar navbar-expand-sm bg-white z-depth-1.8" >
       <a href="index.html" class="navbar-brand" style="font-size:16px;font-weight:bold;color:#EF6C00"><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Bangladesh</span><img src="<?php echo base_url().'assets/images/logo.png'?>" alt="logo" height="55" width="55">Police</a>
        <ul class="navbar-nav justify-content-end w-75">
            <li class="nav-item m-3">
              <a class="nav-link" href="manageuser" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage User</a>
            </li> 
            <li class="nav-item m-3">
              <a class="nav-link" href="deploy" style="color:#FFA000;font-weight:500px;font-size:18px;font-family:sans-serif;">Deploy Duty</a>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="touristplace" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Tourist Place</a>
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
    </header>
    

    
    <?php if(isset($error)){ ?>
        <div class="mt-3 w-100">
            <div class="alert alert-info w-50 m-auto" style="text-align:center;"> <?php echo $error ?></div>
        </div>
        
    <?php } ?>

    <section class="container col-10 col-sm-8 col-xl-5 mt-4">
        <div class="w-75 card py-3" style="border-radius:12px;background-color:rgba(255,255,255,.18);">

           <form class="w-75 m-auto" action="add_deploy" method="POST" >
           <div>
                <label style="display:block;color:#64DD17">District*</label>
                <select required="text" name="district" class="w-100" style="border:1px solid blue;border-radius:8px;height:37px;margin-top:-4px;background-color:rgba(233,233,233,.3);border:none;outline:none;color:black">
                    <option selected="true">Dhaka</option>
                    <option>Chittagong</option>
                    <option>Sylhet</option>
                    <option>Comilla</option>
                </select>
            </div>
            <div class="mt-4">
                <label style="display:block;color:#64DD17">Area Name*</label>
                <select required="text" name="areaname" class="w-100" style="border:1px solid blue;border-radius:8px;height:37px;margin-top:-4px;background-color:rgba(233,233,233,.3);border:none;outline:none;color:black">
                    <option selected="true">Lal Bagh</option>
                    <option>Shajek</option>
                    <option>Cox's Bazar</option>
                    <option>Ahsan Monzil</option>
                </select>
            </div>
            <div class="mt-4">
                <label style="display:block;color:#64DD17">Police Officers Name*</label>
                <select required="text" name="officer_name" class="w-100" style="border:1px solid blue;border-radius:8px;height:37px;margin-top:-4px;background-color:rgba(233,233,233,.3);border:none;outline:none;color:black">
                    <option selected="true">Atiq</option>
                    <option>Alamgir</option>
                    <option>Hridoy</option>
                    <option>Rakib</option>
                </select>
            </div>
            <div class="mt-4">
                <label style="display:block;color:#64DD17">Route Name*</label>
                <select required="text" name="routename" class="w-100" style="border:1px solid blue;border-radius:8px;height:37px;margin-top:-4px;background-color:rgba(233,233,233,.3);border:none;outline:none;color:black">
                    <option selected="true">abj,78,road</option>
                    <option>149/4 arambagh, motijheel</option>
                    <option>23/5,lal bagh </option>
                    <option>34/1,shylet,ramchaon</option>
                </select>
            </div>
            <div class="mt-4">
                <label style="display:block;color:#64DD17">phone*</label>
                <select required="text" name="phone" class="w-100" style="border:1px solid blue;border-radius:8px;height:37px;margin-top:-4px;background-color:rgba(233,233,233,.3);border:none;outline:none;color:black">
                    <option selected="true">01795-528288</option>
                    <option>01911-207127</option>
                </select>
            </div>
            <div class="mt-5 mb-2 w-100" >
                <button type="submit" name="submit" class="btn-md  w-75 m-auto" style="height:38px;border-radius:10px;outline: none;border:none;color:#CDDC39;background-color:rgba(253,253,253,.3);">Deploy</button>
            </div>


            <input type="text" hidden="true" name="type" value="<?php echo $type ?>">
             <?php if(isset($id)){ ?>
            <input type="text" hidden="true" name="id" value="<?php echo $id ?>" >

            <?php } ?>
        </form>
        </div>
    </section>

    

	


    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
</body>
</html>