<?php 
	session_start();
	require_once('db/database.php');
	// if(!isset($_POST['username'])) {
	// 	header('Location:login.php');
	// }
	if (empty($_SESSION['password'])){
    	header('Location:login.php');
    }
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>User Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link rel="stylesheet" href="css/style.css"> 
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container">
	       	<div class="row">
				<nav class="navbar navbar-default" id="navfix">
		        	<div class="container-fluid">
		        		<div class="navbar-header">
		        			<a href="" class="navbar-brand">ARENA</a>
		        		</div>
		        		<ul class="nav navbar-nav pull-right">
		        			<li><a href="dailywork.php">Daily Work</a></li>
		        			<li><a href="">Notice</a></li>
		        			<li><a href="">Report</a></li>
		        			<li><a href="">Office</a></li>
		        			<li class="dropdown">
		        				<a class="dropdown-toggle"  data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
		        				<ul class="dropdown-menu pull-right">
		        					<li><a href="">Edit Profile</a></li>
		        					<li><a href="logout.php">LogOut</a></li>
		        				</ul>
		        			</li>
		        		</ul>
		        	</div>
		        </nav>
			</div>
	        <div class="row">
	        	<div class="col-md-12" style="background-color: #FFF;height: 200px;">
	        		<div class="">
	        			
	        		</div>
	        	</div>
	        </div>
        </div>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> -->
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script> -->

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>