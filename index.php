<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Bank</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
		
    
    <div id="tooplate_header">
        <div id="site_title"><h1 style='font-size:500%'>Blood Bank</h1></div>
        <div id="tooplate_menu">
            <ul>
                <li class=""><a href="index.php" class="current">Home</a></li>
                <li class=""><a href="benefits.html">Donation Benefits</a></li>
                <li><a href="registrationpage.html">Registration</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Log In</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="login.php">Donor</a>
                    </li>
                    <li>
                      <a href="plogin.php">Patient</a>
                    </li>
                    <li>
                      <a href="admin_login.php">Admin</a>
                    </li>
                </li>
                
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle">
    	<div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="" title="" /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="" title="" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="" title="" /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="" title="" /></a>
            
        </div>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_allw300">
        	<h2>Who Can Donate?</h2>
            <p><em> 
               To ensure the safety of blood donation for both donors and recipients, all volunteer blood donors must be evaluated to determine their eligibility to give blood. The final determination will be made on the day of the donation at the blood drive or blood donation center. If you were deferred from donating in the past, you may be able to donate again. </p>
            <div class="cleaner"></div>
        </div>
        
        <div class="col_allw300">
        	<h2>What Happens to Donated Blood?</h2>
            <p><em>Blood donations help millions of patients in need.  To make the journey from “arm to arm,” every unit goes through a series of steps and tests to ensure that it is as safe as can be.
            </em></p>
            <ul>
	            <li>Step 1:The Donation</li>
                <li>Stpe 2:Processing</li>
                <li>Step 3:Testing</li>
                <li>Step 4:Storage</li>
                <li>Step 5:Distribution</li>
                

            </ul>
            
        </div>
        
	
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

        
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
	
    	Copyright © CSE12
		
    </div>
</div>
</body>
</html>