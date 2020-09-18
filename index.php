<?php

include("includes/header.php");


?>
    
    <div id="hot"><!-- hot start -->

        <div class="container"><!-- container start -->
           
           <div class="col-md-12"><!-- col-md-12 start -->
              <h2>
                  Latest Mobile
              </h2>
               
               
           </div><!-- col-md-12 end -->
 
        </div><!-- container end -->
        
 
   
    </div><!-- hot end -->  
    
  

    <div id="content" class="container"><!-- container start --> 
       
        <div class="row"><!-- row start -->
        
        <?php
        
        getPro();
            
        ?>
            
        </div><!-- row end --> 
        
           
<!--------------------------------------my start--------------------------------------------->
            <div id="hot"><!-- hot start -->
       
        <div class="container"><!-- container start -->
           
           <div class="col-md-12"><!-- col-md-12 start -->
              <h2>
                  Upcoming Mobile
              </h2>
               
               
           </div><!-- col-md-12 end -->
 
        </div><!-- container end -->
   
    </div><!-- hot end -->
 
        <div class="row"><!-- row start --> 
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start --> 
              
              <div class="products"><!-- products start -->
                 
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/product_images/mobile-1-1.jpg">
                 </a> 
                 
                 <div class="text"><!-- text start -->
                    <h3>
                        <a href="details.php">
                            Samsung Galaxy M21
                        </a>
                    </h3>
                    <p class="price">Tk 15000</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">Compare</a>
                    </p>
                     
                 </div><!-- text end -->
                  
              </div><!-- products end -->

           </div><!-- col-sm-4 col-sm-6 single end -->
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start --> 
              
              <div class="products"><!-- products start -->
                 
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/product_images/mobile-2-1.jpg">
                 </a> 
                 
                 <div class="text"><!-- text start -->
                    <h3>
                        <a href="details.php">
                            Samsung Galaxy M21
                        </a>
                    </h3>
                    <p class="price">Tk 15000</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">Compare</a>
                    </p>
                     
                 </div><!-- text end -->
                  
              </div><!-- products end -->

           </div><!-- col-sm-4 col-sm-6 single end -->
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start --> 
              
              <div class="products"><!-- products start -->
                 
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/product_images/mobile-3-1.jpg">
                 </a> 
                 
                 <div class="text"><!-- text start -->
                    <h3>
                        <a href="details.php">
                            Samsung Galaxy M21
                        </a>
                    </h3>
                    <p class="price">Tk 15000</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">Compare</a>
                    </p>
                     
                 </div><!-- text end -->
                  
              </div><!-- products end -->

           </div><!-- col-sm-4 col-sm-6 single end -->
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start --> 
              
              <div class="products"><!-- products start -->
                 
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/product_images/mobile-4-1.jpg">
                 </a> 
                 
                 <div class="text"><!-- text start -->
                    <h3>
                        <a href="details.php">
                            Realme f9 Pro
                        </a>
                    </h3>
                    <p class="price">Tk 12000</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">Compare</a>
                    </p>
                     
                 </div><!-- text end -->
                  
              </div><!-- products end -->

           </div><!-- col-sm-4 col-sm-6 single end -->
            
        </div><!-- row end -->
       
<!----------------------------------------my end------------------------------------------->   
        
    </div><!-- container end --> 
    
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