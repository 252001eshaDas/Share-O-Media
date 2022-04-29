

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
            <h4 class="heading">Edit Profile</h4>
            <br><br>
            <p class="sub-heading">
              <form method="post" enctype="multipart/form-data" action="update_profile">
                <label>Name:</label>
                <input type="text" name="name" value="<?php echo $userData['name']; ?>">
                <span><?php echo form_error('name'); ?></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <label>Email:</label>
                <input type="text" name="email" id="email"  value="<?php echo $userData['email']; ?>" readonly="readonly">
                <span><?php echo form_error('email'); ?></span>
                <br><br>

                <label>Phone:</label>
                <input type="tel" name="phone" value="<?php echo $userData['phone']; ?>">
                <span><?php echo form_error('phone'); ?></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <label>Gender:</label>
                <input type="radio" name="gender" value="MALE"<?php echo ($userData['gender']=='MALE')?'checked':'' ?> >Male
                <input type="radio" name="gender" value="FEMALE"<?php echo ($userData['gender']=='FEMALE')?'checked':'' ?>   >Female
                <input type="radio" name="gender" value="OTHERS"<?php echo ($userData['gender']=='OTHERS')?'checked':'' ?> >Others
                <span><?php echo form_error('gender'); ?></span>
                <br><br>


                <label>Location:</label>
                <input type="text" name="location" value="<?php echo $userData['location']; ?>">
                <span><?php echo form_error('location'); ?></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 
                <label>Pin:</label>
                <input type="text" name="pin" value="<?php echo $userData['pin']; ?>">
                <span><?php echo form_error('pin'); ?></span>
                <br><br>

                <label>City:</label>
                <input type="text" name="city" value="<?php echo $userData['city']; ?>">
                <span><?php echo form_error('city'); ?></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <label>State:</label>
                <input type="text" name="state" value="<?php echo $userData['state']; ?>">
                <span><?php echo form_error('state'); ?></span>
                <br><br>

                <label>Speaking:</label>
                <input type="text" name="speaking" value="<?php echo $userData['speaking']; ?>">
                <span><?php echo form_error('speaking'); ?></span>
                <br><br>

                <label>Reading:</label>
                <input type="text" name="reading" value="<?php echo $userData['reading']; ?>">
                <span><?php echo form_error('reading'); ?></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <label>Date Of Birth:</label>
                <input type="text" name="dob" value="<?php echo $userData['dob']; ?>">
                <span><?php echo form_error('dob'); ?></span>
                <br><br>
                <label>About Me:</label>
                <textarea cols="50" rows="3" name="about_me"><?php echo $userData['about_me']; ?></textarea>
                <span><?php echo form_error('about_me'); ?></span>
                <br><br>
                  
                        
                <button type="submit" name="update">Update</button>
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

