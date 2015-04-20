<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ViAcard.co.th</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/navbar-fixed-top.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="screen">
	
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/count-to.js"></script>	
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.nicescroll.min.js"></script>	 
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
    
<style type="text/css">
.back-to-top {
    display: none;
    position: fixed;
    bottom: 18px;
    right: 15px;
}

.back-to-top i {
    display: block;
    width: 36px;
    height: 36px;
    line-height: 36px;
    color: #fff;
    border-radius: 2px;
	-webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
    text-align: center;
    background-color: #444;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
}
#loading{
	background-color: #17607d;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 1;
	margin-top: 0px;
	top: 0px;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
	}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 200px;
	width: 200px;
	margin-top: -100px;
	margin-left: -100px;
	-ms-transform: rotate(-135deg); 
   	-webkit-transform: rotate(-135deg); 
    transform: rotate(-135deg);

}
.object{

	-moz-border-radius: 50% 50% 50% 50%;
	-webkit-border-radius: 50% 50% 50% 50%;
	border-radius: 50% 50% 50% 50%;
	position: absolute;
	border-top: 5px solid #FFF;
	border-bottom: 5px solid transparent;
	border-left:  5px solid #FFF;
	border-right: 5px solid transparent;
	
	-webkit-animation: animate 2s infinite;
	animation: animate 2s infinite;	
	}
#object_one{
	left: 75px;
	top: 75px;
	width: 50px;
	height: 50px;
	}
							
#object_two{
	left: 65px;
	top: 65px;
	width: 70px;
	height: 70px;
	-webkit-animation-delay: 0.2s;
    animation-delay: 0.2s;
	}
		
#object_three{
	left: 55px;
	top: 55px;
	width: 90px;
	height: 90px;
	-webkit-animation-delay: 0.4s;
    animation-delay: 0.4s;
	}
#object_four{
	left: 45px;
	top: 45px;
	width: 110px;
	height: 110px;
	-webkit-animation-delay: 0.6s;
    animation-delay: 0.6s;	
	}	

@-webkit-keyframes animate {

50% {

	-ms-transform: rotate(360deg) scale(0.8); 
   	-webkit-transform: rotate(360deg) scale(0.8); 
    transform: rotate(360deg) scale(0.8); 
  }	  
}

@keyframes animate {
	
50% {

	-ms-transform: rotate(360deg) scale(0.8); 
   	-webkit-transform: rotate(360deg) scale(0.8); 
    transform: rotate(360deg) scale(0.8); 
  }	
	
	}

</style>
</head>
<body>
  <!-- <div id="loading">
	<div id="loading-center">
	<div id="loading-center-absolute">
	<div class="object" id="object_four"></div>
	<div class="object" id="object_three"></div>
	<div class="object" id="object_two"></div>
	<div class="object" id="object_one"></div>
</div>
</div>
 
</div>	 -->