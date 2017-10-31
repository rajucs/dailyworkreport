<?php 
    session_start();
    require_once('db/database.php');
    // if (isset($_POST['username'])) {
    //     header('Location:index.php');
    // }
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>User Login System</title>
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
        <div class="container" >
            <div class="row">
                <div class="col-md-offset-4 col-md-5" style="margin-top: 150px;background-color:#C7CBD1;">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <h3 class="text-center">Please Sign Up for Login</h3>
                        <div class="form-group">
                            <label class="control-label col-md-4">Employee ID: </label>
                            <div class="col-md-8">
                                <input type="Number" name="employee_id" class="form-control" required="" placeholder="Please Enter Your Employee ID" data-toggle="tooltip" title="Enter Employee ID" placemetn="top">
                            </div>
                        </div>
                         <div class="form-group">
                                <label class="control-label col-md-4">User name : </label>
                                <div class="col-md-8">
                                    <input type="name" name="user_name" class="form-control" required="" placeholder="Enter User Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Password: </label>
                                <div  class="col-md-8">
                                    <input type="Password" name="user_password" class="form-control" required="" placeholder="Enter your Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Email Address: </label>
                                <div class="col-md-8">
                                    <input type="Email" name="user_mail" class="form-control" required="" placeholder="Enter Your Mail Here..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Phone Number: </label>
                                <div class="col-md-8">
                                    <input type="Number" name="user_mobile_num" class="form-control" required="" placeholder="Enter Your Mobile Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-8">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        <p class="text-center">If You SignUp Already. Please <a href="login.php">Login</a> Here</p>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add your site or application content here -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>