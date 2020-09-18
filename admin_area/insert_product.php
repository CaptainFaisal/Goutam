<?php

include("includes/db.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-ceale=1">
    <title>Insert Products</title>

<link rel="stylesheet" href="css/bootstrap-337.min.css">
<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
 
<div class="row"><!-- row start -->
    <div class="col-lg-12"><!-- col-lg-12 start -->
        <ol class="breadcrumb"><!-- breadcrumb start -->
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products
            </li>
        </ol><!-- breadcrumb end -->
    </div><!-- col-lg-12 end -->
    
</div><!-- row end -->
<div class="row"><!-- row start -->
   <div class="col-lg-12"><!-- col-lg-12 start -->
       <div class="panel panel-default"><!-- panel panel-default start -->
           <div class="panel_heading"><!-- panel_heading start -->
               <h3 class="panel-title"><!-- panel-title start -->
                   <i class="fa fa-money fa-fw"></i>Insert Product
               </h3><!-- panel-title end -->
           </div><!-- panel_heading end -->
           <div class="panel-body"><!-- panel-body start -->
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal start -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Product Title</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <input name="product_title" type="text" class="form-control" required>
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Product Category</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <select name="product_cat" class="form-control"><!-- form-control start -->
                               <option> Select a Category Product </option>
                               <?php 
                               $get_p_cats = "select * from product_categories";
                               $run_p_cats = mysqli_query($con,$get_p_cats);
                               
                               while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                   $p_cat_id = $row_p_cats['p_cat_id'];
                                   $p_cat_title = $row_p_cats['p_cat_title']; 
                                   
                                   echo "
                                   
                                   <option value='$p_cat_id'> $p_cat_title </option>
                                   
                                   ";
                               }
                               ?>
                           </select><!-- form-control end -->
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Category</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <select name="cat" class="form-control"><!-- form-control start -->
                               <option> Select a Category </option>
                               <?php 
                               $get_cat = "select * from categories";
                               $run_cat = mysqli_query($con,$get_cat);
                               
                               while ($row_cat=mysqli_fetch_array($run_cat)){
                                   $cat_id = $row_cat['cat_id'];
                                   $cat_title = $row_cat['cat_title']; 
                                   
                                   echo "
                                   
                                   <option value='$cat_id'> $cat_title </option>
                                   
                                   ";
                               }
                               ?>
                           </select><!-- form-control end -->
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Product Image 1</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <input name="product_img1" type="file" class="form-control" required>
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Product Image 2</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <input name="product_img2" type="file" class="form-control">
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Product Image 3</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <input name="product_img3" type="file" class="form-control">
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Product Price</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <input name="product_price" type="text" class="form-control" required>
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Product Keywords</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <input name="product_keywords" type="text" class="form-control" required>
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> Product Desc</label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <textarea name="product_desc" cols="19" rows="16" class="form-control"></textarea>
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
                   <div class="form-group"><!-- form-group start -->
                       <label class="col-md-3 control-label"> </label>
                       <div class="col-md-6"><!-- col-md-6 start -->
                           <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                       </div><!-- col-md-6 end -->
                   </div><!-- form-group end -->
               </form><!-- form-horizontal end -->
           </div><!-- panel-body end -->
           
       </div><!-- panel panel-default end -->
   </div><!-- col-lg-12 end -->
    
</div><!-- row end -->  
    
        
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea'});</script>    
             
</body>
</html>





<?php

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";
    
    
    $run_product = mysqli_query($con,$insert_product);
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('insert_product.php','_self')</script>";
        
        
        
    }
    
    
}

?>
