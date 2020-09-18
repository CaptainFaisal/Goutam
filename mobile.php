<?php
$active='Mobile';
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
           </ul><!-- breadcrumb end -->
            
        </div><!-- col-md-12 end -->
        <div class="col-md-3"><!-- col-md-3 start  -->
           

<?php
    
   include("includes/sidebar.php");
?>
        

        </div><!-- col-md-3 end -->
        
        <div class="col-md-9"><!-- col-md-9 start -->
           <?php
            
            if(!isset($_GET['p_cat'])){
                if(!isset($_GET['cat'])){
                
         
            
                echo"
           
                    <div class='box'><!-- box start -->
                        <h1>Mobile Phone</h1>
                        <p>
                            Find here the list of all mobile phones brands of India and Worldwide, Also check latest smartphones from top &amp; best company like Samsung, Apple, Xiaomi,
                        </p>
                    </div><!-- box end -->
            
            ";
                }
            }
            
            ?>
            
            <div class="row"><!-- row start -->
           <?php
            
            if(!isset($_GET['p_cat'])){
                if(!isset($_GET['cat'])){
                 
                    $per_page=12;
                    if(isset($_GET['page'])){
                        
                        $page = $_GET['page'];
                        
                    } else{
                            
                            $page=1;
                            
                        }
                        
                        $start_from = ($page-1) * $per_page;
                     
                        $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                        
                        $run_products = mysqli_query($con,$get_products);
                        
                        while($row_products=mysqli_fetch_array($run_products)){
                            
                            $pro_id = $row_products['product_id'];
                            $pro_title = $row_products['product_title'];
                            $pro_price = $row_products['product_price'];
                            $pro_img1 = $row_products['product_img1'];
                            
                            echo "
                            
                                <div class='col-md-4 col-sm-6 center-responsive'>
                                    <div class='product'>
                                        <a href='details.php?pro_id=$pro_id'> 
                                        
                                            <img class='img-responsive'src='admin_area/product_images/$pro_img1'>
                                        
                                        </a>
                                        
                                        <div class='text'>
                                            <h3>
                                                <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                            </h3>
                                            
                                            <p class='price'>
                                                Tk $pro_price
                                            </p>
                                            <p class='buttons'>
                                                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                                
                                                View Details </a>
                                            </p>
                                            
                                            
                                            
                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            
                            
                            
                            ";

                    }
                    
            ?>
            
            </div><!-- row end -->
            
            <center>
                <ul class="pagination"><!-- pagination start -->
                
                    <?php
                    
                    $query = "select * from products";
                    
                    $result = mysqli_query($con,$query);
                    
                    $total_records = mysqli_num_rows($result);
                    
                    $total_pages = ceil($total_records / $per_page);
                    
                        echo "
                        
                            <li>
                            
                                <a href='mobile.php?page=1'>".'First Page'."</a>
                            
                            </li>
                        
                        ";
                    
                        for($i=1; $i<=$total_pages; $i++){
                            
                            echo "
                            
                             <li>
                            
                                <a href='mobile.php?page=".$i."'>".$i."</a>
                            
                            </li>
                            
                            ";
                            
                            
                        };
                    
                        echo "
                        
                            <li>
                            
                                <a href='mobile.php?page=$total_pages'>".'Last Page'."</a>
                            
                            </li>
                        
                        ";
                    
                            }
                        }
                    
                    ?>
    
               
                </ul><!-- pagination end -->
            </center>
            
       
                
                <?php getpcatpro(); ?>
                
           
            
            
        </div><!-- col-md-9 end -->
        
    </div><!-- container end -->
</div><!-- content end -->





<?php
    include("includes/footer.php");
        ?>
        
        
        
        

        <script src="js/bootstrap-337.min.js"></script>
        <script src="js/jquery-331.min.js"></script>
</body>

</html>










