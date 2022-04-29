

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home</title>
    <meta name="description" content="free Bootstrap 4 Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
  </head>
  <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    

    <div class="probootstrap-loader"></div>
    <!-- END loader -->
    <style>
    
      ul li a:hover{
    background-color: burlywood;
   
     }

     input{
      border-radius: 15px;
     }

     button{
      border-radius: 15px;
     }
    </style>


                
    <style>
       button[type="submit"]{
          background: transparent;
          border:none;
          outline: none;
          color: #fff;
          background: #03a9f4;
          padding: 10px 20px;
          cursor: pointer;
          border-radius: 10px;
         }
         button[type=submit]:hover{
        background:#003366;
        opacity: 0.7;

      }
    </style> 
    
    <section class="pb_md_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(assets/images/restaurant/1900x1200/img_1.jpg)" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-9  order-md-1">
            <h4 class="heading">Edit Image</h4>
            <br><br>
            <p class="sub-heading">
              <img src="<?php echo $userData['image']; ?>" style=" height:300px; width:300px;border-radius:50%;">

              <form method="post" action="update_image" enctype="multipart/form-data">
                <label></label>
                <input type="file" name="image"><br><br>
                 <span><?php echo form_error('image'); ?></span>
                <br><br>
                <button type="submit" name="update">Update Image</button>
            </form></p>
          </div>  
        </div>
      </div>
    </section>
    <!-- END section -->

   

    

    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>
    

      
  </body>
</html>

