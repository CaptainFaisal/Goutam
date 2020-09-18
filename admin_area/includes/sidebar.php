<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>"; 
        
    }else{
        
 

?>

   

   
   <div class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top start -->
    <div class="navbar-header"><!-- navbar-header start -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle start -->
           
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle end -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div><!-- navbar-header end -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav start -->
        <li class="dropdown"><!-- dropdown start -->
          
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle start -->
               <i class="fa fa-user"></i> Gpaik <b class="caret"></b>
           </a><!-- dropdown-toggle end -->  
            
            <ul class="dropdown-menu"><!-- dropdown-menu start -->
                <li><!-- li start -->
                    <a href="index.php?user_profile"><!-- a href start -->
                       <i class="fa fa-fw fa-user"></i> Profile 
                    </a><!-- a href end -->
                </li><!-- li end -->
                <li><!-- li start -->
                    <a href="index.php?view_product"><!-- a href start -->
                       <i class="fa fa-fw fa-envelope"></i> Products
                       
                       <span class="badge">7</span>
                       
                    </a><!-- a href end -->
                </li><!-- li end -->
                <li><!-- li start -->
                    <a href="index.php?view_customers"><!-- a href start -->
                       <i class="fa fa-fw fa-users"></i> Customers
                       
                       <span class="badge">11</span>
                       
                    </a><!-- a href end -->
                </li><!-- li end -->
                <li><!-- li start -->
                    <a href="index.php?user_profile"><!-- a href start -->
                       <i class="fa fa-fw fa-gear"></i> Product Categories
                       
                       <span class="badge">4</span>
                       
                    </a><!-- a href end -->
                </li><!-- li end -->
                
                <li class="divider"></li>
                
                <li><!-- li start -->
                    <a href="logout.php"><!-- a href start -->
                       <i class="fa fa-fw fa-power-off"></i> Log Out
                    </a><!-- a href end -->
                </li><!-- li end -->
            </ul><!-- dropdown-menu end -->
            
        </li><!-- dropdown end -->
    </ul><!-- nav navbar-right top-nav end -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse start -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav start -->
           
            <li><!-- li start -->
               <a href="index.php?dashboard"><!-- a start -->
                <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </a><!-- a end -->
            </li><!-- li end -->
            
            <li><!-- li start -->
               <a href="#" data-toggle="collapse" data-target="#products"><!-- a start -->
                <i class="fa fa-fw fa-tag"></i> Products
                <i class="fa fa-fw fa-caret-down"></i>
                </a><!-- a end -->
                <ul id="products" class="collapse"><!-- collapse start -->
                    <li><!-- li start -->
                        <a href="index.php?insert_product"> Insert Product </a>
                    </li><!-- li end -->
                    <li><!-- li start -->
                        <a href="index.php?view_products"> View Products </a>
                    </li><!-- li end -->
                </ul><!-- collapse end -->
            </li><!-- li end -->
            
            <li><!-- li start -->
               <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a start -->
                <i class="fa fa-fw fa-edit"></i> Product Categories
                <i class="fa fa-fw fa-caret-down"></i>
                </a><!-- a end -->
                <ul id="p_cat" class="collapse"><!-- collapse start -->
                    <li><!-- li start -->
                        <a href="index.php?insert_p_cat"> Insert Product Category </a>
                    </li><!-- li end -->
                    <li><!-- li start -->
                        <a href="index.php?view_p_cats"> View Products Categories </a>
                    </li><!-- li end -->
                </ul><!-- collapse end -->
            </li><!-- li end -->
            
            <li><!-- li start -->
               <a href="#" data-toggle="collapse" data-target="#cat"><!-- a start -->
                <i class="fa fa-fw fa-book"></i> Categories
                <i class="fa fa-fw fa-caret-down"></i>
                </a><!-- a end -->
                <ul id="cat" class="collapse"><!-- collapse start -->
                    <li><!-- li start -->
                        <a href="index.php?insert_cat"> Insert Category </a>
                    </li><!-- li end -->
                    <li><!-- li start -->
                        <a href="index.php?view_cats"> View Categories </a>
                    </li><!-- li end -->
                </ul><!-- collapse end -->
            </li><!-- li end -->
            
            <li><!-- li start -->
                <a href="index.php?view_customers"><!-- a href start -->
                    <i class="fa fa-fw fa-users"></i> View Customers
                </a><!-- a href end -->
            </li><!-- li end -->
            
            <li><!-- li start -->
                <a href="index.php?view_orders"><!-- a href start -->
                    <i class="fa fa-fw fa-pencil"></i> View Order
                </a><!-- a href end -->
            </li><!-- li end -->
            
            <li><!-- li start -->
                <a href="index.php?view_payments"><!-- a href start -->
                    <i class="fa fa-fw fa-money"></i> View Payments
                </a><!-- a href end -->
            </li><!-- li end -->
            
            <li><!-- li start -->
               <a href="#" data-toggle="collapse" data-target="#users"><!-- a start -->
                <i class="fa fa-fw fa-users"></i> Users
                <i class="fa fa-fw fa-caret-down"></i>
                </a><!-- a end -->
                <ul id="users" class="collapse"><!-- collapse start -->
                    <li><!-- li start -->
                        <a href="index.php?insert_user"> Insert User </a>
                    </li><!-- li end -->
                    <li><!-- li start -->
                        <a href="index.php?view_users"> View Users </a>
                    </li><!-- li end -->
                    <li><!-- li start -->
                        <a href="index.php?user_profile"> Edit User Profile </a>
                    </li><!-- li end -->
                </ul><!-- collapse end -->
            </li><!-- li end -->
            
            <li><!-- li start -->
                <a href="logout.php"><!-- a href start -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href end -->
            </li><!-- li end -->
            
        </ul><!-- nav navbar-nav side-nav end -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse end -->
    
</div><!-- navbar navbar-inverse navbar-fixed-top end -->


<?php } ?>















