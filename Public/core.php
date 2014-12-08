<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>KT - Dashboard | Keystone Community</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Keystone Core</a>
        </div>
        <div class="navbar-collapse collapse">
          <!--<form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form> -->
        </div><!--/.navbar-collapse -->
      </div>
    </div>

     <ol class="breadcrumb">
	  <li><a href="index.html">Home</a></li>
	  <li class="active">Keystone Core</li>
	</ol>
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!-- <div class="jumbotron">
      <div class="container">
        <img src="keystone-arch.png" class="img-responsive">
      </div>
    </div>
	<div class="clearfix"><br></div>-->
    <div class="container-fluid content-container">
      <!-- Example row of columns -->
      <div class="row">
		
		<!-- left bar -->
		<?php include('leftside.inc'); ?>
		<!-- end left bar -->
        
        <div class="col-sm-8">
          <div class="row">
			
			<div class="col-md-12">
		      <div class="row">
		        <img class="img-responsive" src="img/keystone-core.png" style="width: 100%;">
		      </div>
		    </div>
		    
          </div>
        </div>
        
        <!-- Right Start -->
        <div class="col-sm-2">
		  <div class="panel panel-default">
			<div class="panel-heading">Today's Menu</div>
			<div class="panel-body">
			  <div class="list-group">
				<a href="#" class="list-group-item">
				  <h4 class="list-group-item-heading">Breakfast</h4>
				  <p class="list-group-item-text">7 - 9 AM<br>Eggs<br>Sausage<br>Toast</p>
				</a>
			  </div>
			  <div class="list-group">
			    <a href="#" class="list-group-item">
				  <h4 class="list-group-item-heading">Lunch</h4>
				  <p class="list-group-item-text">11 - 1 PM<br>Salad Bar<br>Turkey<br>Roast Beef</p>
				</a>
			  </div>
			  <div class="list-group">
				<a href="#" class="list-group-item">
				  <h4 class="list-group-item-heading">Dinner</h4>
				  <p class="list-group-item-text">5 - 7 PM<br>Homemade Lasagna<br>Bread Sticks</p>
				</a>
		  	  </div>
		    		  
		    </div>
		  </div>
		</div>
		<!-- Right End -->
		
      </div> <!-- end row -->

      <hr>

      <footer>
		<div class="row">
		  <div class="col-sm-10">
		    <p>&copy; Keystone Technologies, LLC 2014</p>
		  </div>
		  
		  <!--<div class="col-sm-2">
		    Powered By<img class="img-responsive" src="img/foresite-logo.png" style="float: right">
		  </div>-->
		</div>
        
      </footer>
      
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        
        <script>
			$('li a').click(function (e) {
				$('#myModal img').attr('src', $(this).attr('data-img-url'));
			});
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
