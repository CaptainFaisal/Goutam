<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-ceale=1">
<title>MobileBaji</title>

<link rel="stylesheet" href="styles/bootstrap-337.min.css">
<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/styles.css">
<link rel="stylesheet" href="styles/footer-style.css">
<link rel="stylesheet" href="styles/mobile-style.css">



</head>
<body>

    <div id="top"><!-- top start -->
        <div class="container"><!-- container start -->
            <div class="col-md-6 offer"><!-- col-mh-6 offe start -->
                <a href="#" class="btn btn-success btn-sm">Wellcome</a>
                <a href="#">info@mobilebaji.com</a>

            </div><!-- col-mh-6 offe end -->
            <div Class="col-md-6"><!-- col-mh-6 start -->
                <ul class="menu"><!-- menu start -->
                <li>
                        <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="../checkout.php">Login</a>
                    </li>

                </ul><!-- menu end -->
                    
               

            </div><!-- col-mh-6 end -->

        </div><!-- container end -->



    </div><!-- top end -->
    
    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default start -->
        
        <div class="container"><!-- container start -->
            <div class="navbar-header"><!-- navbar-header start -->
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home start -->
                  
                  <img src="images/mobilebaji-logo.png" alt="MobileBaji Logo" class="hidden-xs">
                  <img src="images/mobilebaji-logo.png" alt="MobileBaji Logo Mobile" class="visible-xs">
                   
                   
               </a><!-- navbar-brand home end -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   <span class="sr-only">Toggle Navigation</span>
                   <i class="fa fa-align-justify"></i>
                   
                   
               </button>
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   <span class="sr-only">Toggle Search</span>
                   <i class="fa fa-search"></i>
                   
                   
               </button>
                
                
            </div><!-- navbar-header end -->
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start -->
               <div class="padding-nav"><!-- padding-nav start -->
                  
                  <ul class="nav navbar-nav left"><!-- nav navbar-nav left start -->
                     
                     <li class="active">
                         <a href="../index.php">Home</a>
                     </li>
                     <li>
                         <a href="../mobile.php">Mobile</a>
                     </li>
                     <li>
                         <a href="../laptop.php">Laptop</a>
                     </li>
                     <li>
                         <a href="../gadgte.php">Gadgte</a>
                     </li>
                     <li>
                         <a href="../contact.php">Contact Us</a>
                     </li>
                      
                      
                      
                  </ul><!-- nav navbar-nav left end -->
                   
                   
               </div><!-- padding-nav end -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right start -->
                  <i class="fa fa-shopping-cart"></i>
                   <span>4 Item In Your Cart</span>
                   
                   
               </a><!-- btn navbar-btn btn-primary right end -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right start -->
                  <button class="btn btn-primary navbar-btn" id="btn-search" type="button" data-toggle="collapse" data-target="search"><!-- navbar-collapse collapse right start -->
                      
                      <span class="sr-only">Toggle Search</span>
                      <i class="fa fa-search"></i>
                      
                  </button><!-- navbar-collapse collapse right end -->
                   
                   
                   
                   
               </div><!-- navbar-collapse collapse right end -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix start -->
                  
                  <form method="get" action="results.php" class="navbar-form"><!-- navbar-form start -->
                     
                     <div class="input-group"><!-- input-group start -->
                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                        <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary start -->
                            
                            <i class="fa fa-search"></i>
                            
                        </button><!-- btn btn-primary end -->
                         
                         
                         
                     </div><!-- input-group end -->
                   
                  </form><!-- navbar-form end -->
            
               </div><!-- collapse clearfix end -->
  
            </div><!-- navbar-collapse collapse end -->
 
         </div><!-- container end -->
    </div><!-- navbar navbar-default end -->
    
   
  
 



<div id="content"><!-- content Start -->
    <div class="container"><!-- container Start -->
        <div class="col-md-12"><!-- col-md-12 Start -->
           
           <ul class="breadcrumb"><!-- breadcrumb Start -->
               <li>
                   <a href="index.php">Home</a>
               </li>
               <li>
                   my account
               </li>
           </ul><!-- breadcrumb end -->
            
        </div><!-- col-md-12 end -->
        <div class="col-md-3"><!-- col-md-3 start  -->
           

<?php
    include("includes/sidebar.php");
        ?>
        

        </div><!-- col-md-3 end --> 
        

     
    
   </div><!-- container end -->
</div><!-- content end -->





<?php
    include("includes/footer.php");
        ?>
        
        
        
        <script>
        $("#btn-search").click(()=>$("#search").toggleClass("in"))
        </script>

        <script src="js/bootstrap-337.min.js"></script>
        <script src="js/jquery-331.min.js"></script>
</body>

</html>