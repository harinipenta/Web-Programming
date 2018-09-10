<%-- 
    Document   : userlogin
    Created on : Apr 25, 2017, 6:48:03 PM
    Author     : Gatty
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        
        <%@ include file="header.jsp" %>
<!--        <div id="user-fullname" >Welcome. Hello</div>
        <h1>Login Success</h1>-->
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
                    <h2>Checkout our new collection.</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/guitar.jpg');"></div>
               
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/cellsale.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
			 <div class="item">
                <div class="fill" style="background-image:url('images/booksale.jpg');"></div>
                
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
        <%@ include file="footer.jsp" %>
    </body>
</html>
