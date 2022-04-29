

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
            <h4 class="heading">Create Event</h4>
           <br>
            <p class="sub-heading">
              <form method="post" enctype="multipart/form-data" action="event_submit">
                <table align="center">

                  <tr>
                  <td><label>Event Gender:</label></td>
                  <td><input type="radio" name="event_type" value="1">FREE
                      <input type="radio" name="event_type" value="2">PAID
                     </td>
                </tr>
               
                <tr>
                  <td> <label>Event Title:</label></td>
                  <td>
                      <input type="text" name="event_title" value=""  class="form-control">
                      <span><?php echo form_error('event_title'); ?></span>
                  </td>
                </tr>
                
                 <tr>
                  <td><label>Event Description:</label></td>
                <td>
                  <textarea name="event_desc" style="border-radius:10%" rows="5" cols="22"  class="form-control"></textarea>
                  <span><?php echo form_error('event_desc'); ?></span></td></tr>
                
                <tr>
                 <td><label>Image:</label></td>
                <td><input type="file" name="event_img" value=""  class="form-control">
                <span><?php echo form_error('event_img'); ?></span></td>
                    
              </tr>

                 <tr>
                 <td><label>Location</label></td>
                <td><input type="text" name="location" value=""  class="form-control">
                <span><?php echo form_error('location'); ?></span></tr></td>
                  
                <tr>
                 <td><label>City</label></td>
                <td><input type="" name="city" value=""  class="form-control">
                <span><?php echo form_error('city'); ?></span></td></tr>
                  
                 <tr>
                 <td><label>State</label></td>
                <td><select name="state"  class="form-control">
                   <option value="choose city">select</option>
                   <option value="West Bengal">West Bengal</option>
                   <option value="Andhra Pradesh">Andhra Pradesh</option>
                   <option value="Maharashtra">Maharashtra</option>
                  </select>
                 <span><?php echo form_error('state'); ?></span></td></tr>
                 
                <tr>
                 <td><label>Pin Code</label></td>
                <td><input type="text" name="pin" value=""  class="form-control">
                 <span><?php echo form_error('pin'); ?></span></td></tr>
                 
                <tr>
                 <td><label>Country:</label></td>
                <td><select name="country" class="form-control">
                   <option value="choose city">select</option>
                   <option value="India">India</option>
                   <option value="Italy">Italy</option>
                   <option value="America">America</option>
                  </select>
                 <span><?php echo form_error('country'); ?></span></td></tr>
                 
                <tr>
                 <td><label>Event Amount:</label></td>
                <td><input type="text" name="event_amount" value=""  class="form-control">
                 <span><?php echo form_error('event_amount'); ?></span></td></tr>
                 
                <tr>
                 <td><label>Event Currency:</label></td>
                <td><input type="text" name="event_currency" value=""  class="form-control">
                <span><?php echo form_error('event_currency'); ?></span></td>
                  </tr>

                

               <!--  <tr>
                  <td> <label>Event Type:</label></td>
                  <td>
                       <td>z000000<input type="radio" name="event_type" value="0" class="form-control">FREE
                      <input type="radio" name="event_type" value="1" class="form-control">PAID
                     </td>
                  </td>
                </tr> -->

                <tr>
                  <td><label>Event Gender:</label></td>
                  <td><input type="radio" name="event_gender" value="1">MALE
                      <input type="radio" name="event_gender" value="2">FEMALE
                      <input type="radio" name="event_gender" value="3">ALL</td>
                </tr>
                <tr>
                 <td><label>From Age</label></td>
                <td><input type="text" name="from_age" value=""  class="form-control">
                    <span><?php echo form_error('from_age'); ?></span></td>
              </tr>
                <tr>
                <td><label>To Age</label></td>
                <td><input type="text" name="to_age" value=""  class="form-control">
                <span><?php echo form_error('to_age'); ?></span></td>
                  </tr>

                 <td><label>From Time:</label></td>
                <td><input type="text" name="from_time" value=""  class="form-control">
                 <span><?php echo form_error('from_time'); ?></span></td>
                 </tr>
                <tr>
                 <td><label>To Time:</label></td>
                <td><input type="text" name="to_time" value=""  class="form-control">
                 <span><?php echo form_error('to_time'); ?></span></td>
                 </tr>
                
                 </table>
                 <br>       
                <button type="submit" name="update">Create</button>
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

