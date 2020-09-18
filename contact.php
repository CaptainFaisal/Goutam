<?php

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
                   contact
               </li>
           </ul><!-- breadcrumb end -->
            
        </div><!-- col-md-12 end -->
        <div class="col-md-3"><!-- col-md-3 start  -->
           

<?php
    include("includes/sidebar.php");
        ?>
        

        </div><!-- col-md-3 end -->
        
       
      
     
    <!------------------------>
    <div class="col-md-9"><!-- col-md-9 start -->

        <div class="box"><!-- box start -->

            <div class="box-header"><!-- box-header start -->

                <center><!-- center start -->

                    <h2>Feel Free to Contact Us</h2>

                    <p class="text-muted"><!-- text-muted start -->

                        If you have any Quesation feel free to Contact us.

                    </p><!-- text-muted end -->

                </center><!-- center end -->

               

                <form action="contact.php" method="post"><!-- form start -->

                    <div class="form-group"><!-- form-group start -->

                        <label>Name</label>

                        <input type="text" class="form-control" name="name" required>

                    </div><!-- form-group end -->

                   

                    <div class="form-group"><!-- form-group start -->

                        <label>Email</label>

                        <input type="text" class="form-control" name="email" required>

                    </div><!-- form-group end -->

                   

                    <div class="form-group"><!-- form-group start -->

                        <label>Subject</label>

                        <input type="text" class="form-control" name="subject" required>

                    </div><!-- form-group end -->

                   

                    <div class="form-group"><!-- form-group start -->

                        <label>Message</label>

                        <textarea name="message" class="form-control"></textarea>

                    </div><!-- form-group end -->

                   

                    <div class="text-center"><!-- text-center start -->

                        <button type="submit" name="submit" class="btn btn-primary">

                            <i class="fa fa-user-md"></i>Send Message

                        </button>

                    </div><!-- text-center end -->

                   

                </form><!-- form end -->

               

                

            </div><!-- box-header end -->

        </div><!-- box end -->

    </div><!-- col-md-9 end -->  
    
    
    
    
    
    <!------------------------>
   
  
 
















  </div><!-- container end -->
</div><!-- content end -->





<?php
    include("includes/footer.php");
        ?>
        
        
        
        

        
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
</body>

</html>