<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shoppers Stop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


   

</head>

<body>
    <!--top bar for login signup-->
    <div class="top-bar">
        <div class="container">
            <div class ="row">
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                    
                </div>
                <div class="col-md-2">
                    
                </div>
                <div class="col-sm-1">
                    <!-- Large modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Sign In</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" data-toggle="validator" name="loginForm" class="form-horizontal" action="Login" method="POST">
                                <div class="form-group">
                                    <label for="phone" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input required type="number" data-minlength="10" data-maxlength="10" class="form-control" name="mobile" id="phone" placeholder="10 digit phone" />
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobilePassword" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" required class="form-control" name="mobilePassword" id="mobilePassword" placeholder="enter your password" />
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <!--change ends here-->
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form data-toggle="validator" role="form" name="registrationForm" class="form-horizontal" method="GET" action="Register">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <input required type="text" class="form-control" name="fullname" placeholder="Full Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" required class="form-control" name="email" id="email" placeholder="tom@some.com" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="number" data-minlength="10" data-maxlength="10" required class="form-control" name="mobile" id="mobile" placeholder="10 digit phone number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" required class="form-control" name="password" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Save & Continue</button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="http://www.facebook.com" class="btn btn-primary">Facebook</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <div class="col-sm-1">
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                  </button>
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#index.html">SHOPPERS STOP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="DisplayProducts?category=Mobile">Mobiles</a>
                    </li>
                    <li>
                        <a href="DisplayProducts?category=Books">Books</a>
                    </li>
                    <li>
                        <a href="DisplayProducts?category=music">Sarees </a>
                    </li>
                    
                    
                        
                </ul>
            </div>
            <!-- /.navbar-collapse -->
		</div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/sale.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Everyday sales....Checkout Today's deals</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/guitar.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/cellsale.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
			 <div class="item">
                <div class="fill" style="background-image:url('images/booksale.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
			 
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
		<hr>
		  
    </header>
     
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
				<h3 class="page-header" style="text-align:center; color:rgb(153, 0, 0);">
                   Shoppers Stop - A new meaning to shopping.... enjoy the latest trends
				   <p><i>Where shopping never Stops!</i></p>
                </h3> 
				<hr>
				
            </div>
			
			
			
            
        </div>
    </div>
        <!-- Footer -->
        <footer class="footer">
			<div class = "row">
				<div class ="col-md-12">
				
			
				</div>
			</div>
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy;  <%= new java.util.Date().getYear() + 1900 %>
                </div>
            </div>
        </footer>

    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        <script src="js/validator.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
