<%-- 
    Document   : books
   Created on : Apr 25, 2017, 6:48:03 PM
    Author     : Gatty
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Mobiles Page</title>
    </head>
    <body>
        <%@ include file="header.jsp" %>
        <div class="container">
         <div  class="col-md-4">
                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="i7.jpg">
                    </div>
                    <div id = "product1" class="panel-body">
                        <form name="1" method="post" action="">
                            <div class="form-group">
                            Price:
                            <div id="price1">
                                
                            </div>
                            <label for="sel1">Quantity:</label>
                            <input type="text" name="p1">
                          </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="">
                    </div>
                    <div id = "product2" class="panel-body">
                        <form name="2" method="post" action="">
                            <div class="form-group">
                                Price:
                            <div id="price2">
                                
                            </div>
                            <label for="sel1">Quantity:</label>
                            <input type="text" name="p2">

                          </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="">
                    </div>
                    <div id = "product3" class="panel-body">
                        <form name="3" method="post" action="">
                            <div class="form-group">
                                Price:
                            <div id="price3">
                                
                            </div>
                            <label for="sel1">Quantity:</label>
                             <input type="text" name="p3">

                          </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="container">
         <div  class="col-md-4">
                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="">
                    </div>
                    <div id = "product4" class="panel-body">
                        <form name="4" method="post" action="">
                            <div class="form-group">
                                 Price:
                            <div id="price4">
                                
                            </div>
                            <label for="sel1">Quantity:</label>
                            <input type="text" name="p4">

                          </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="images/panel2.jpg">
                    </div>
                    <div id = "product5" class="panel-body">
                        <form name="5" method="post" action="">
                            <div class="form-group">
                                
                                Price:
                            <div id="price5">
                                
                            </div>
                                
                            <label for="sel1">Quantity:</label>
                             <input type="text" name="p5">

                          </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="images/panel3.jpg">
                    </div>
                    <div id = "product6" class="panel-body">
                        <form name="6" method="post" action="">
                            <div class="form-group">
                                Price:
                            <div id="price6">
                                
                            </div>
                            <label for="sel1">Quantity:</label>
                         <input type="text" name="p6">

                          </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <%@ include file="footer.jsp" %>
        <script language="javascript" type="text/javascript">
        function call(){
            
        }
    </script>
    </body>
</html>
