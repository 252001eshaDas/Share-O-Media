   
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
              background-color: burlywood; }
              input{
                border-radius: 15px;
               }

              button{
               border-radius: 15px;
              }
              </style>


                
    
     <section class="pb_md_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(assets/images/restaurant/1900x1200/img_1.jpg)" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-9  order-md-1">
            <section class="pb_section bg-light" id="section-events">
             <div class="container">
               <p style="font-size: 250%; font-family: cursive;">EVENT DETAILS</p>
        

                <?php foreach ($eventData as $event_key => $event_value) { ?>
              
                <div class="card border-0">      
                <img class="card-img-top" style=" width: 30%; height: 40%; align-self: center;"  src="<?php echo $event_value['event_img_main'] ?>"  alt="Image caption here">
                <div class="card-body pb_p-40" >
              
                 <div align="center">
                <p style="color: brown" >Event Title:-<?php echo $event_value['event_title']; ?></p> 
                <p style=" color:brown ">Event Description:- <?php echo $event_value['event_desc'];?></p>
                <p style=" color:brown ">Location:- <?php echo $event_value['location'];?></p>
                <p style=" color: brown">City:- <?php echo $event_value['city'];?></p>
                <p style=" color: brown">state:- <?php echo $event_value['state'];?></p>
                <p style=" color: brown">Pincode:-<?php echo $event_value['pin'];?></p>
                <p style=" color: brown">Country:- <?php echo $event_value['country'];?></p>
                <p style=" color: brown">Event Amount:- <?php echo $event_value['event_amount'];?></p>
                <p style=" color: brown">Event Currency:- <?php echo $event_value['event_currency'];?></p>
                <p style=" color: brown">Event Gender:- 
                  <?php
                      if ($event_value['event_gender']==1) {
                        echo "Male";
                      }elseif ($event_value['event_gender']==2) {
                        echo "Female";
                      }else{
                        echo "All";
                      }
                  ?></p>
                <p style=" color: brown">From Age:- <?php echo $event_value['from_age'];?></p>
                <p style=" color: brown">To Age:- <?php echo $event_value['to_age'];?></p>
                <p style=" color: brown">From Time:- <?php echo $event_value['from_time'];?></p>
                <p style=" color: brown">To Time:- <?php echo $event_value['to_time'];?></p>

                  </div>
                  </div>
                  </div>
                  <?php } ?>
                  
                         <p><a href="<?php echo base_url(); ?>community">Back....</a></p>
                   </div>
               </section>
                </div>
                </div>
               </section>
             <!-- END section -->
             <!-- loader -->
              <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>  
</body>
</html>

 


   