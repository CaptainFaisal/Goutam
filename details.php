<?php
$active='mobile';
include("includes/header.php");


?>
     
 



<div id="content"><!-- content Start -->
    <div class="container"><!-- container Start -->
        <div class="col-md-12"><!-- col-md-12 Start -->
           
           <ul class="breadcrumb"><!-- breadcrumb Start -->
               <li>
                   <a href="index.php">Home</a>
               </li>
               <li>
                   mobile
               </li>
                <li>
                   <a href="mobile.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
               </li>
               
               <li> <?php echo $pro_title; ?> </li>
               
           </ul><!-- breadcrumb end -->
            
        </div><!-- col-md-12 end -->
        <div class="col-md-3"><!-- col-md-3 start  -->
           

<?php
    include("includes/sidebar.php");
        ?>
        

        </div><!-- col-md-3 end -->
        
        <div class="col-md-9"><!-- col-md-9 start -->
            <div id="productMain" class="row"><!-- row start -->
                <div class="col-sm-6"><!-- col-md-6 start -->
                    <div id="mainImage"><!-- mainImage start -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide start -->
                            <ol class="carousel-indicators"><!-- carousel-indicators start -->
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol><!-- carousel-indicators end -->
                            
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img  class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="mobile-4-1"></center>
                                </div>
                                <div class="item">
                                    <center><img  class="img-responsive"  src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="mobile-4-2"></center>
                                </div>
                                <div class="item">
                                    <center><img  class="img-responsive"  src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="mobile-4-3"></center>
                                </div>
                            </div>
                            
                            <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carosel-control start -->
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- left carosel-control end -->
                             <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carosel-control start -->
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- right carosel-control end -->
                            
                        </div><!-- carrousel slide end -->
                    </div><!-- mainImage end -->
                    
 <!----------------------------------------my start----------------------------------------------------->                   
 <div class="row" id="thumbs"><!-- row start -->

            <div class="col-xs-4"><!-- col-xs-4 start -->

                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb start -->

                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="mobile-1-1" class="img-responsive">

                </a><!-- thumb end -->

            </div><!-- col-xs-4 end -->

            <div class="col-xs-4"><!-- col-xs-4 start -->

                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb start -->

                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="mobile-1-1" class="img-responsive">

                </a><!-- thumb end -->

            </div><!-- col-xs-4 end -->

            <div class="col-xs-4"><!-- col-xs-4 start -->

                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!-- thumb start -->

                    <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="mobile-1-1" class="img-responsive">

                </a><!-- thumb end -->

            </div><!-- col-xs-4 end -->

       

        </div><!-- row end -->
 
 
 <!-----------------------------------------mY end---------------------------------------------------->                   
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div><!-- col-md-6 end -->
<!-- Products price start ----------------------------------------------------------------------------------------------->

   

    <div class="col-sm-6"><!-- col=sm-6 start -->

        <div class="box"><!-- box start -->

            <h1 class="text-center"><?php echo $pro_title; ?></h1>

           

            <form action="index.php?add_cart=<?php echo $pro_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal start -->

                <div class="form-group"><!-- form-group start -->

                    <label for="" class="col-md-5 control-label">RAM</label>

                   

                    <div class="col-md-7"><!-- col-md-7 start -->

                        <select name="product_qty" id="" class="form-control"><!-- form-control start -->

                            <option>4 GB</option>

                            <option>8 GB</option>

            

                        </select><!-- form-control end -->

                    </div><!-- col-md-7 end -->

                   

                </div><!-- form-group end -->

               

                <div class="form-group"><!-- form-group start -->

                    <label class="col-md-5 control-label">ROM</label>

                    <div class="col-md-7"><!-- col-md-7 start -->

                        <select name="product_size" class="form-control"><!-- form-control start -->

                            <option>32 GB</option>

                            <option>64 GB</option>

                            <option>128 GB</option>


                        </select><!-- form-control end -->

                    </div><!-- col-md-7 end -->

                </div><!-- form-group end -->

                <div class="form-group"><!-- form-group start -->

                    <label class="col-md-5 control-label">Camera</label>

                    <div class="col-md-7"><!-- col-md-7 start -->

                        <select name="product_size" class="form-control"><!-- form-control start -->

                            <option>13 MP</option>

                            <option>20 MP</option>

                            <option>40 MP</option>


                        </select><!-- form-control end -->

                    </div><!-- col-md-7 end -->

                </div><!-- form-group end -->

               

                <p class="price">Tk <?php echo $pro_price; ?></p>

        

                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">Add to Cart</button></p>

               

                

            </form><!-- form-horizontal end -->

        </div><!-- box end -->

       

 <!----------------------------------------my TO OUT----------------------------------------------------->

   

    </div><!-- col=sm-6 end -->

   
     
</div><!-- row end -->
    <!-- Products price end ------------------------------------------------------------------------------------------------------->

   
                
                

            
    <!-- Products Detials start ------------------------------------------------------------------------------------------------------->

    <div class="box" id="details"><!-- box start -->

        <h3>Product Deatils</h3>

        <p>

            <?php echo $pro_desc; ?>

        </p>


       <!-- My Coustom products details start -->

       
       <h4>
           <p>
               
           </p>
       </h4>
       
       <!-- My Coustom products details end -->

        <hr>

   

    </div><!-- box end -->

   

    <div id="row same-height-row"><!-- row same-height-row start -->
    

        <?php  
         
         $get_products = "select * from products order by 1 DESC LIMIT 0,4";
         
         $run_products = mysqli_query($con,$get_products);
         
         while($row_products=mysqli_fetch_array($run_products)){
             
             $pro_id = $row_products['product_id'];
             $pro_title= $row_products['product_title'];
             $pro_img1 = $row_products['product_img1'];
             $pro_price = $row_products['product_price'];
             
             echo "
             
                <div class='col-md-3 col-sm-6 details-down'>
                    <div class='product same-height'>
                        <a href='details.php?pro_id=$pro_id'>
                            <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                    
                        </a>
                        
                        <div class='text'>
                            <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                            
                           
                            
                            <p class='price'>Tk $pro_price </p>

                            
                        </div>
                    </div>
                
                </div>
             ";
             
         }
         
         ?>
      
          
  
        
        
 </div><!-- row same-height-row end -->

    <!-- Products Detials end ------------------------------------------------------------------------------------------------------->
        </div><!-- col-md-9 end -->
        
    </div><!-- container end -->
</div><!-- content end -->





<?php
    include("includes/footer.php");
        ?>
        
        
        
        

        
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
</body>

</html>










