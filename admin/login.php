<?php 
    require_once('db/database.php');
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
        <link rel="stylesheet" href="css/main.css"> 
    </head>
    <body >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container-fluid maincontent" >
            <div class="row">
                <div class="col-md-offset-1 col-md-4" style="margin-top: 150px;background-color:#C7CBD1;padding-top: 20px;">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-md-4">Admin ID: </label>
                            <div class="col-md-8">
                                <input type="name" name="admin_id" class="form-control" required="" placeholder="Enter User Name">
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Password: </label>
                                <div  class="col-md-8">
                                    <input type="Password" name="admin_password" class="form-control" required="" placeholder="Enter your Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-8">
                                    <button type="submit" name="admin_login" value="Submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="col-md-offset-2 col-md-4" style="margin-top: 150px;background-color: #C7CBD1;padding-top: 20px;">
                    <form action="" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-md-4">Admin Id: </label>
                            <div class="col-md-8">
                                <input type="number" name="admin_id" class="form-control" required="" placeholder="Enter Admin ID">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Admin Name:</label>
                            <div class="col-md-8">
                                <input type="name" name="admin_name" class="form-control" required="" placeholder="Enter admin Full name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Admin Email:</label>
                            <div class="col-md-8">
                                <input type="Email" name="admin_mail" class="form-control" required="" placeholder="Enter admin Email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Admin Mobile: </label>
                            <div class="col-md-8">
                                <input type="number" name="admin_mobile_num" class="form-control" required="" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-8">
                                <button type="submit" name="admin_signup" class="btn btn-primary" value="Submit">Submit</button>
                            </div>
                        </div>
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