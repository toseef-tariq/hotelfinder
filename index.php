<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				
		<title>Home</title>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130309251-1"></script>
					<meta name="description" content="SaaSAppoint- Online Multi Business Appointment Scheduling & Reservation Booking Calendar- SaaS Booking Software, Cleaner Booking, Multi Business Booking Software, Online Appointment Scheduling, Appointment Booking Calendar, Reservation System, Multi Business directory, Rendez-vous logiciel, Limpieza reserva, Saas appointment, Cleaning services business software, Scheduling SaaS, Booking Calendar, SAAS Appointment Calendar, Cleaning Appointment, Maid Booking Software">
			
		<!-- Bootstrap core CSS -->
		<link href="includes/vendor/bootstrap/css/bootstrap.min81a8.css?1553259831" rel="stylesheet">
		<link href="includes/vendor/font-awesome/css/font-awesome.min81a8.css?1553259831" rel="stylesheet" type="text/css">
		
		<!-- Custom fonts for this template -->
		<link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet'>
		
		<!-- Custom styles for this template -->
		<link href="includes/css/saasappoint-business-directory81a8.css?1553259831" rel="stylesheet">
	<style>
a{
text-decoration:none;
color:black;
}
a:hover{
color:#509bb5;
}
</style>
	</head>
	<body style="background-color:white;">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div id="saasappoint-main-menu-collapse" class="navbar navbar-expand navbar-light bg-light saasappoint_header_bg_clr">
			<div class="navbar-brand" style="width:100%">
					<a class="btn btn-link btn-sm saasappoint-bd-link-font" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
					<a class="btn btn-link btn-sm saasappoint-bd-link-font" href="https://kfueit.edu.pk"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
					<a class="btn btn-link btn-sm saasappoint-bd-link-font" href="contact.html"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
				
				
				
				
				
				
				
				
				<div class="pull-right">
					<a class="btn btn-link btn-sm saasappoint-bd-link-font" href="backend/index.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
					<a class="btn btn-link btn-sm saasappoint-bd-link-font" href="backend/register.html"><i class="fa fa-user-plus" aria-hidden="true"></i> SignUp</a>
				</div>
			</div>	
		</div>
		<div class= "saasappoint-banner-overlay " >
			<div class="container text-center">
				<div class="col-md-12">
					<div class="saasappoint-banner-heading ">
						<div class="row justify-content-center">
							<div class="col-12 col-md-10 col-lg-8">
								<div class="saasappoint-bsearch-result-heading ">
									<h3>Looking for Popular and Nearby Hotels</h3>
									<p>The easiest way to book your room.</p>
									<div class="saasappoint-heading-border text-center"></div>
									<p>
										<!-- Search form -->
										<div class="card card-sm">
											<div class="card-body row no-gutters align-items-center">
												<!--end of col-->
												<script type="text/javascript" src="auto_complete.js"></script>								
												<div class="col" >
													<input id="txtHint"   onkeyup="showName(this.value)" id="saasappoint_pagination_search_keyword" class="form-control form-control-lg saasappoint-form-control-borderless" type="text" placeholder="Search by place or keywords" autocomplete="off" />
												</div>												
												<!--end of col-->
												<div class="col-auto">
													<a type="submit"  id="saasappoint_search_business_btn"  class="btn btn-lg btn-success" ><i class="fa fa-search" aria-hidden="true"></i></a>
												</div>
												<!--end of col-->
											</div>
												
										</div>
									</p>
								</div>
								<p><span style="border:1px solid transparent;" id="txtName"></span></p>
											
							</div>
							<!--end of col-->
						</div>
					</div>
				</div>
			</div>
		</div>

<!-- Jssor Slider Begin -->
<!-- You can move inline styles to css file or css block. -->
<div id="slider1_container"     style="position: relative;  width: 1400px; height: 80px; overflow: hidden;">
    <!-- Slides Container -->
    <div u="slides"          style="width: 1400px; height: 80px;overflow: hidden;">
   
        <div ><a style="cursor:pointer;" onclick="window.location='www.google.com'"><img u="image" alt="android"  src="slider/img/logo2.jpg"/></a></div>
        <div><img u="image" alt="amazon" src="slider/img/logo3.jpg"/></div>
        <div><img u="image" alt="android" src="slider/img/logo4.jpg"/></div>
        <div><img u="image" alt="amazon" src="slider/img/logo5.jpg"/></div>
        <div><img u="image" alt="amazon" src="slider/img/logo7.jpg"/></div>
        <div><img u="image" alt="android" src="slider/img/logo8.jpg"/></div>
        <div><img u="image" alt="android" src="slider/img/logo10.jpg"/></div>
        <div><img u="image" alt="amazon" src="slider/img/logo11.jpg"/></div>
        <div><img u="image" alt="android" src="slider/img/logo13.jpg"/></div>
        <div><img u="image" alt="android" src="slider/img/logo16.jpg"/></div>
        <div><img u="image" alt="android" src="slider/img/logo17.jpg"/></div>
        <div><img u="image" alt="android" src="slider/img/logo20.jpg"/></div>
        <div><img u="image" alt="android" src="slider/img/logo21.jpg"/></div>
    </div>
</div>


	<script type="text/javascript" src="slider/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="slider/js/jssor.js"></script>
<script type="text/javascript" src="slider/js/jssor.slider.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 0,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 4,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 3000,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 7,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
                window.setTimeout(ScaleSlider, 30);
        }

        ScaleSlider();

        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            $(window).bind('resize', ScaleSlider);
        }


        //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
        //    $(window).bind("orientationchange", ScaleSlider);
        //}
        //responsive code end
    });
</script>

<link rel="stylesheet" href="css/style.css">  

<div id="inner-wrap" style="height:100px;left: 0;bottom: 0;width: 100%;">
<svg class="waves" xmlns="http://www.w3.org/2000/svg" width="1440" height="160" viewBox="0 0 960 214.5" preserveAspectRatio="xMinYMid meet"><defs>
<style>.waves>path{-webkit-animation:a 17390ms ease-in-out infinite alternate-reverse both;-moz-animation:a 17390ms ease-in-out infinite alternate-reverse both;-ms-animation:a 17390ms ease-in-out infinite alternate-reverse both;-o-animation:a 17390ms ease-in-out infinite alternate-reverse both;animation:a 17390ms ease-in-out infinite alternate-reverse both;-webkit-animation-timing-function:cubic-bezier(.25,0,.75,1);-moz-animation-timing-function:cubic-bezier(.25,0,.75,1);-ms-animation-timing-function:cubic-bezier(.25,0,.75,1);-o-animation-timing-function:cubic-bezier(.25,0,.75,1);animation-timing-function:cubic-bezier(.25,0,.75,1);-webkit-will-change:transform;-moz-will-change:transform;-ms-will-change:transform;-o-will-change:transform;will-change:transform}.waves>path:nth-of-type(1){-webkit-animation-duration:20580ms;-moz-animation-duration:20580ms;-ms-animation-duration:20580ms;-o-animation-duration:20580ms;animation-duration:20580ms}.waves>path:nth-of-type(2){-webkit-animation-delay:-2690ms;-moz-animation-delay:-2690ms;-ms-animation-delay:-2690ms;-o-animation-delay:-2690ms;animation-delay:-2690ms;-webkit-animation-duration:13580ms;-moz-animation-duration:13580ms;-ms-animation-duration:13580ms;-o-animation-duration:13580ms;animation-duration:13580ms}g>path:nth-of-type(1){-webkit-animation-delay:-820ms;-moz-animation-delay:-820ms;-ms-animation-delay:-820ms;-o-animation-delay:-820ms;animation-delay:-820ms;-webkit-animation-duration:10730ms;-moz-animation-duration:10730ms;-ms-animation-duration:10730ms;-o-animation-duration:10730ms;animation-duration:10730ms}.waves>path:nth-of-type(1),g>path:nth-of-type(2){-webkit-animation-direction:alternate;-moz-animation-direction:alternate;-ms-animation-direction:alternate;-o-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes a{0%{-webkit-transform:translateX(-750px);transform:translateX(-750px)}100%{-webkit-transform:translateX(-20px);transform:translateX(-20px)}}@-moz-keyframes a{0%{-moz-transform:translateX(-750px);transform:translateX(-750px)}100%{-moz-transform:translateX(-20px);transform:translateX(-20px)}}@-ms-keyframes a{0%{-ms-transform:translateX(-750px);transform:translateX(-750px)}100%{-ms-transform:translateX(-20px);transform:translateX(-20px)}}@-o-keyframes a{0%{-o-transform:translateX(-750px);transform:translateX(-750px)}100%{-o-transform:translateX(-20px);transform:translateX(-20px)}}@keyframes a{0%{-webkit-transform:translateX(-750px);-moz-transform:translateX(-750px);-ms-transform:translateX(-750px);-o-transform:translateX(-750px);transform:translateX(-750px)}100%{-webkit-transform:translateX(-20px);-moz-transform:translateX(-20px);-ms-transform:translateX(-20px);-o-transform:translateX(-20px);transform:translateX(-20px)}}</style>
<linearGradient id="a">
<stop stop-color="#00A8DE"/>
<stop offset="0.2" stop-color="#333391"/>
<stop offset="0.4" stop-color="#E91388"/>
<stop offset="0.6" stop-color="#EB2D2E"/>
</linearGradient>
</defs>
<path fill="url(#a)" d="M2662.6 1S2532 41.2 2435 40.2c-19.6-.2-37.3-1.3-53.5-2.8 0 0-421.3-59.4-541-28.6-119.8 30.6-206.2 75.7-391 73.3-198.8-2-225.3-15-370.2-50-145-35-218 37-373.3 36-19.6 0-37.5-1-53.7-3 0 0-282.7-36-373.4-38C139 26 75 46-1 46v106c17-1.4 20-2.3 37.6-1.2 130.6 8.4 210 56.3 287 62.4 77 6 262-25 329.3-23.6 67 1.4 107 22.6 193 23.4 155 1.5 249-71 380-62.5 130 8.5 209 56.3 287 62.5 77 6 126-18 188-18 61.4 0 247-38 307.4-46 159.3-20 281.2 29 348.4 30 67 2 132.2 6 217.4 7 39.3 0 87-11 87-11V1z"/>
<path fill="#F2F5F5"   d="M2663.6 73.2S2577 92 2529 89c-130.7-8.5-209.5-56.3-286.7-62.4s-125.7 18-188.3 18c-5 0-10-.4-14.5-.7-52-5-149.2-43-220.7-39-31.7 2-64 14-96.4 30-160.4 80-230.2-5.6-340.4-18-110-12-146.6 20-274 36S820.4 0 605.8 0C450.8 0 356 71 225.2 62.2 128 56 60.7 28-.3 11.2V104c22 7.3 46 14.2 70.4 16.7 110 12.3 147-19.3 275-35.5s350 39.8 369 43c27 4.3 59 8 94 10 13 .5 26 1 39 1 156 2 250-70.3 381-62 130.5 8.2 209.5 56.3 286.7 62 77 6.4 125.8-18 188.3-17.5 5 0 10 .2 14.3.6 52 5 145 49.5 220.7 38.2 32-5 64-15 96.6-31 160.5-79.4 230.3 6 340 18.4 110 12 146.3-20 273.7-36l15.5-2V73l1-.5z"/>
<g fill="none" stroke="url(#a)" stroke-width="1">
<path d="M0 51.4c3.4.6 7.7 1.4 11 2.3 133.2 34 224.3 34 308.6 34 110.2 0 116.7 36.6 229.8 26 113-11 128.7-44 222-42.6C865 73 889 38 1002 27c113-10.8 119.6 25.6 229.8 25.6 84.4 0 175.4 0 308.6 34 133 34.2 277-73 379.4-84.3 204-22.5 283.6 128.7 283.6 128.7"/>
<path d="M0 6C115.7-6 198.3 76.6 308 76.6c109.6 0 131.8-20 223-28.3 114.3-10.2 238.2 0 238.2 0s124 10.2 238.3 0c91-8.2 113.2-28 223-28S1425 103 1541 91c115.8-11.8 153.3-69 269.3-84.6 116-15.5 198.4 71 308 71 109.8 0 131.8-20 223-28 114-10.2 237.7 0 237.7 0s37.4 2.4 82.8 3.7"/>
</g>
</svg>
</div>
<div style="left: 0;bottom: 0;width: 100%;background: linear-gradient(0.09turn,#EB2D2E,#1082C5,#7F257D)!important; 	color: white;text-align: center;padding:20px;0px 20px 0px" >

  <p> © 2017-2019 | Khwaja Fareed University of Engineering & Information Technology | Department of Computer Sciences |  kfueit.edu.pk</p>
</div>
		<script>
		document.getElementById("saasappoint_search_business_btn").onclick = function () { 
		var txt=document.getElementById("txtName").innerHTML;
		var val=document.getElementById("txtHint").value;
		if(txt.search("no match found")==-1 && txt.toUpperCase() === val.toUpperCase() && txt.length>0)
		{
		window.location='search.php?q='+val;	
		}
		else
			document.getElementById("txtName").innerHTML = "no match found";
				};

		
		</script>
		<script src="includes/vendor/jquery/jquery.min81a8.js?1553259831"></script>
		<script src="includes/js/saasappoint-business-directory81a8.js?1553259831"></script>
	</body>
</html>