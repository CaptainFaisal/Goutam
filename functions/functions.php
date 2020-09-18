<?php

$db = mysqli_connect("localhost","root","","ecom_store");

/// start getPro functions ///

function getPro(){
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,10";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
            <div class='product'>
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                </a>
                <div class='text'>
                    <h3>
                        
                        <a href='details.php?pro_id=$pro_id'>
                          $pro_title
                        </a>
                    </h3>
                    <p class='price'>
                       Tk $pro_price
                    </p>
                    <p class='button'>
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                          View Details
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
        ";
        
    }
    
    
}
/// end getPro functions ///


/// start getPCats functions ///


function getPCats(){
    
     global $db;
    
    $get_p_cats = "select * from product_categories";
    
    $run_p_cats = mysqli_query($db,$get_p_cats);
    
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        
        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];
        
        echo "
            <li>
            
            <a href='mobile.php?p_cat=$p_cat_id'> $p_cat_title </a>
            
            
            </li>
        
        ";
    }
    
}


/// end getPCats functions ///

/// start getpcatpro functions ///

function getpcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products where p_cat_id='$p_cat_id' LIMIT 0,12";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                    <h1>No Products Found In This Products Categories</h1>
                </div>
            
            ";
        }else{
            
            echo "
            
                <div class='box'>
                    <h1> $p_cat_title </h1>
                    <p> $p_cat_desc </p>
                </div>
            
            ";
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
          
                $pro_id = $row_products['product_id'];
                $pro_title = $row_products['product_title'];
                $pro_price = $row_products['product_price'];
                $pro_img1 = $row_products['product_img1']; 
            
                echo "
                
                    <div class='col-md-4 col-sm-6 single center-responsive'>
            <div class='product'>
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                </a>
                <div class='text'>
                    <h3>
                        
                        <a href='details.php?pro_id=$pro_id'>
                          $pro_title
                        </a>
                    </h3>
                    <p class='price'>
                       Tk $pro_price
                    </p>
                    <p class='button'>
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                          View Details
                        </a>
                    </p>
                </div>
            </div>
        </div>
                
                ";    
                

        }
        
    }
    
    
}


/// end getpcatpro functions ///

?>


























