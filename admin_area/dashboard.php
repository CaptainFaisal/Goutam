<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>"; 
        
    }else{
        
 

?>

   
   

   <div class="row"><!--  row no:1 start -->
    <div class="col-la-12"><!--  col-la-12 start -->
        <h1 class="page-header">Dashboard</h1>
        
        <ol class="breadcrumb"><!--  breadcrumb start -->
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol><!--  breadcrumb end -->
        
    </div><!--  col-la-12 end -->
</div><!--  row no:1 end -->

<div class="row"><!--  row no:2 start -->
   
    <div class="col-lg-3 col-md-6"><!--  col-lg-3 col-md-6 start -->
        <div class="panel panel-primary"><!--  panel panel-primary start -->
            
            <div class="panel-heading"><!--  panel-heading start -->
                <div class="row"><!--  panel-heading row start -->
                    <div class="col-xs-3"><!--  col-xs-3 start -->
                         <i class="fa fa-tasks fa-5x"></i>
                    </div><!--  col-xs-3 end -->
                    
                    <div class="col-xs-9 text-right"><!--  col-xs-9 text-right start -->
                        <div class="huge"> 17 </div>
                        <div> Products </div>
                    </div><!--  col-xs-9 text-right end -->
                    
                </div><!--  panel-heading row end -->
            </div><!--  panel-heading end -->
            
            <a href="index.php?view_products"><!--  a href start -->
                <div class="panel-footer"><!--  panel-footer start -->
                    <span class="pull-left"><!-- pull-left start -->
                        View Details
                    </span><!-- pull-left end -->
                    <span class="pull-right"><!-- pull-right start -->
                        <i class="fa fa-arrow-circle-right"></i>
                    </span><!-- pull-right end -->
                    <div class="clearfix"></div>
                </div><!--  panel-footer end -->
            </a><!--  a href end -->
            
        </div><!--  panel panel-primary end -->
    </div><!--  col-lg-3 col-md-6 end -->
    
    <div class="col-lg-3 col-md-6"><!--  col-lg-3 col-md-6 start -->
        <div class="panel panel-green"><!--  panel panel-green start -->
            
            <div class="panel-heading"><!--  panel-heading start -->
                <div class="row"><!--  panel-heading row start -->
                    <div class="col-xs-3"><!--  col-xs-3 start -->
                         <i class="fa fa-users fa-5x"></i>
                    </div><!--  col-xs-3 end -->
                    
                    <div class="col-xs-9 text-right"><!--  col-xs-9 text-right start -->
                        <div class="huge">7</div>
                        <div> Customers </div>
                        
                    </div><!--  col-xs-9 text-right end -->
                    
                </div><!--  panel-heading row end -->
            </div><!--  panel-heading end -->
            
            <a href="index.php?view_customers"><!--  a href start -->
                <div class="panel-footer"><!--  panel-footer start -->
                    <span class="pull-left"><!-- pull-left start -->
                        View Details
                    </span><!-- pull-left end -->
                    <span class="pull-right"><!-- pull-right start -->
                        <i class="fa fa-arrow-circle-right"></i>
                    </span><!-- pull-right end -->
                    <div class="clearfix"></div>
                </div><!--  panel-footer end -->
            </a><!--  a href end -->
            
        </div><!--  panel panel-green end -->
    </div><!--  col-lg-3 col-md-6 end -->
    
    <div class="col-lg-3 col-md-6"><!--  col-lg-3 col-md-6 start -->
        <div class="panel panel-yellow"><!--  panel panel-yellow start -->
            
            <div class="panel-heading"><!--  panel-heading start -->
                <div class="row"><!--  panel-heading row start -->
                    <div class="col-xs-3"><!--  col-xs-3 start -->
                         <i class="fa fa-tags fa-5x"></i>
                    </div><!--  col-xs-3 end -->
                    
                    <div class="col-xs-9 text-right"><!--  col-xs-9 text-right start -->
                        <div class="huge">5</div>
                        <div> Product Categories </div>
                        
                    </div><!--  col-xs-9 text-right end -->
                    
                </div><!--  panel-heading row end -->
            </div><!--  panel-heading end -->
            
            <a href="index.php?view_p_cats"><!--  a href start -->
                <div class="panel-footer"><!--  panel-footer start -->
                    <span class="pull-left"><!-- pull-left start -->
                        View Details
                    </span><!-- pull-left end -->
                    <span class="pull-right"><!-- pull-right start -->
                        <i class="fa fa-arrow-circle-right"></i>
                    </span><!-- pull-right end -->
                    <div class="clearfix"></div>
                </div><!--  panel-footer end -->
            </a><!--  a href end -->
            
        </div><!--  panel panel-yellow end -->
    </div><!--  col-lg-3 col-md-6 end -->
    
    <div class="col-lg-3 col-md-6"><!--  col-lg-3 col-md-6 start -->
        <div class="panel panel-red"><!--  panel panel-red start -->
            
            <div class="panel-heading"><!--  panel-heading start -->
                <div class="row"><!--  panel-heading row start -->
                    <div class="col-xs-3"><!--  col-xs-3 start -->
                         <i class="fa fa-shopping-cart fa-5x"></i>
                    </div><!--  col-xs-3 end -->
                    
                    <div class="col-xs-9 text-right"><!--  col-xs-9 text-right start -->
                        <div class="huge">25</div>
                        <div> Orders </div>
                        
                    </div><!--  col-xs-9 text-right end -->
                    
                </div><!--  panel-heading row end -->
            </div><!--  panel-heading end -->
            
            <a href="index.php?view_orders"><!--  a href start -->
                <div class="panel-footer"><!--  panel-footer start -->
                    <span class="pull-left"><!-- pull-left start -->
                        View Details
                    </span><!-- pull-left end -->
                    <span class="pull-right"><!-- pull-right start -->
                        <i class="fa fa-arrow-circle-right"></i>
                    </span><!-- pull-right end -->
                    <div class="clearfix"></div>
                </div><!--  panel-footer end -->
            </a><!--  a href end -->
            
        </div><!--  panel panel-red end -->
    </div><!--  col-lg-3 col-md-6 end -->
    
    
    
    
</div><!--  row no:2 end -->



<?php } ?>












