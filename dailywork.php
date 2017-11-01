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
	        	<div class="col-md-12" style="background-color: #FFF;min-height: 200px;">
	        		<h3 class="text-center text-success">Daily Work Form</h3>
	        		<form action="" method="post">
	        			<table class="table table-bordered table-condensed">
		        			<tbody>
		        				<tr>
		        					<th class="text-center">SL No.</th>
		        					<th class="text-center">Assigned Job</th>
		        					<th class="text-center">project Name</th>
		        					<th class="text-center">Progress(%)</th>
		        					<th class="text-center">Remarks</th>
		        				</tr>
		        				<tr>
		        					<td><input type="number" name="DWF_SL_NO" class="form-control" required=""></td>
		        					<td><textarea class="form-control"  name="dwf_assigned_job" rows="1" required=""></textarea></td>
		        					<td><input type="text" name="DWF_project_name" class="form-control" required=""></td>
		        					<td><input type="text" name="DWF_progress" class="form-control" required=""></td>
		        					<td><input type="text" name="DWF_remarks" class="form-control" required=""></td>
		        				</tr>
		        			</tbody>
		        		</table>
		        		<div class="row">
		        			<div class="col-md-offset-3 col-md-4">
			        			<button type="submit" class="btn btn-success btn-sm text-center">Add More Field +</button>
			        			<button type="submit" class="btn btn-success btn-sm text-center" name="dwf_submit" value="submit">SUBMIT</button>
			        		</div>
			        		<div class="col-md-3">
			        			<input type="Date" name="date_by_daily_work">
			        			<button type="button" name="date_by_daily_work_search" class="btn btn-success btn-sm">Search</button>
			        		</div>
		        		</div>
	        		</form>
	        	</div>
	        </div>
	        <div class="row">
	        	<div class="col-md-12" style="background-color: #fff;min-height: 200px;">
	        		<table class="table table-bordered text-justify">
	        			<tr>
	        				<th>SL No.</th>
	        				<th>Assigned Job</th>
	        				<th>Project Name</th>
	        				<th>Progress(%)</th>
	        				<th>Remarks</th>
	        			</tr>
	        			<tr>
	        				<td>test</td>
	        				<td>test</td>
	        				<td>test</td>
	        				<td>test</td>
	        				<td>test</td>
	        			</tr>
	        		</table>
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