<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home</title>
    <meta name="description" content="free Bootstrap 4 Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">


    <link href="assets/theme/vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="assets/theme/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/theme/vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/theme/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="assets/theme/vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="assets/theme/vendors/animate-css/animate.css" rel="stylesheet">
        
        <link href="assets/theme/css/style.css" rel="stylesheet">
        <link href="assets/theme/css/responsive.css" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/theme/css/colors/default.css" title="default">
        <link rel="alternate stylesheet" href="assets/theme/css/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" href="assets/theme/css/colors/pink.css" title="pink">
        <link rel="alternate stylesheet" href="assets/theme/css/colors/violet.css" title="violet">
        <link rel="alternate stylesheet" href="assets/theme/css/colors/blue.css" title="blue">
        <link rel="alternate stylesheet" href="assets/theme/css/colors/past.css" title="past">



         <script src="assets/theme/js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/theme/js/bootstrap.min.js"></script>
        <!-- Extra plugin js -->
        <script src="assets/theme/vendors/counter-up/waypoints.min.js"></script>
        <script src="assets/theme/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="assets/theme/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="assets/theme/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/theme/vendors/owl-carousel/owl.carousel.min.js"></script>

        <script src="assets/theme/vendors/style-switcher/styleswitcher.js"></script>
        <script src="assets/theme/vendors/style-switcher/switcher-active.js"></script>
        <script src="assets/theme/vendors/animate-css/wow.min.js"></script>
       
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="assets/theme/js/gmaps.min.js"></script>
        
        <!-- contact js -->
        <script src="assets/theme/js/jquery.form.js"></script>
        <script src="assets/theme/js/jquery.validate.min.js"></script>
        <script src="assets/theme/js/contact.js"></script>
        
        <script src="assets/theme/js/theme.js"></script>
    
  </head>
  <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    

    <div class="probootstrap-loader"></div>
    <!-- END loader -->
    <style>
    
      ul li a:hover{
    background-color: burlywood;
   
     }
    </style>

   <section class="about_person_area pad cover-bg-black cover-bg-opacity-4" id="about" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0.6)), url(assets/images/restaurant/1900x1200/img_12.jpg)">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="person_img">
                                <img src="<?php echo $userData['image']; ?>" alt="">
                                <br><br>
                                <div class="row">
                                  <a href="edit_profile"><button class="btn btn-primary">Edit Profile</button></a>
                                  <a href="edit_image"><button class="btn btn-success">Change Image</button></a>
                                  <a href="edit_password"><button class="btn btn-danger">Change Password</button></a>
                                  <a href="settings"><button class="btn btn-default">Settings</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                              <p><h2 style="text-align: left; color: white"><?php echo $userData['name']; ?> </h2></p>
                              <p style="text-align: left; color: white"><?php echo $userData['about_me']; ?></p>
                              <p style="text-align: left; color: white">Email:- <?php echo $userData['email']; ?></p> 
                              <p style="text-align: left; color: white">Phone:- <?php echo $userData['phone']; ?></p>
                              <p style="text-align: left; color: white">DOB:- <?php echo $userData['dob']; ?></p>
                              <p style="text-align: left; color: white">Gender:- <?php echo $userData['gender']; ?></p>

                              <p style="text-align: left; color: white">City:- <?php echo $userData['city']; ?></p>
                              <p style="text-align: left; color: white">Pin Code:- <?php echo $userData['pin']; ?></p> 
                              <p style="text-align: left; color: white">State:- <?php echo $userData['state']; ?></p>
                              <p style="text-align: left; color: white">Reading Language:- <?php echo $userData['reading']; ?></p>
                              <p style="text-align: left; color: white">Speaking Language:- <?php echo $userData['speaking']; ?></p>
                            </div>
                    </div>
                </section>
                
<!--     <section class="pb_section" id="section-menu">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center">
            <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Menu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">

            <ul class="nav justify-content-center pb_tab_v1">
              <li class="nav-item">
                <a class="nav-link active p-3" data-toggle="list" href="#food" role="tab">Food</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-3" data-toggle="list" href="#drinks" role="tab">Drinks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-3" data-toggle="list" href="#salads" role="tab">Salads</a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane fade show active" id="food" role="tabpanel">
                <div class="row">
                  <div class="col-md">
                    <ul class="list-unstyled pb_food-menu">
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Eggplant Parmiagana</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>13.95</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Fried Calamari</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>15.50</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Sausage and Pepper</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>17.35</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Potato and Egg</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>11.50</span></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md">
                    <ul class="list-unstyled pb_food-menu">
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Eggplant Parmiagana</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>20.75</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Fried Calamari</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>18.00</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Sausage and Pepper</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>10.25</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Potato and Egg</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>21.95</span></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="drinks" role="tabpanel">
                <div class="row">
                  <div class="col-md">
                    <ul class="list-unstyled pb_food-menu">
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Fountain Soda</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>10.95</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Fresh Juices</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>12.50</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Coffee/Tea</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>5.35</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Unsweetened Tea</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>12.50</span></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md">
                    <ul class="list-unstyled pb_food-menu">
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Fountain Soda</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>10.95</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Fresh Juices</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>12.50</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Coffee/Tea</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>5.35</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Unsweetened Tea</h3>
                            <p class="mb-0">Far far away, behind the word mountains..</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>12.50</span></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="salads" role="tabpanel">
                <div class="row">
                  <div class="col-md">
                    <ul class="list-unstyled pb_food-menu">
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Caesars Salad</h3>
                            <p class="mb-0">Romaine lettuce, croutons, and grated cheese</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>13.95</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Garden Salad</h3>
                            <p class="mb-0">Mixed greens, tomato, cucumber &amp; black olives</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>15.50</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Baby Greens</h3>
                            <p class="mb-0">Mixed greens, fresh mozzarella, tomato &ampl toasted peppers</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>17.35</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Cold Antipasto</h3>
                            <p class="mb-0">Romaine lettuce, croutons, and grated cheese</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>11.50</span></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md">
                    <ul class="list-unstyled pb_food-menu">
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Caesars Salad</h3>
                            <p class="mb-0">Romaine lettuce, croutons, and grated cheese</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>22.95</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Garden Salad</h3>
                            <p class="mb-0">Mixed greens, tomato, cucumber &amp; black olives</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>11.50</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Baby Greens</h3>
                            <p class="mb-0">Mixed greens, fresh mozzarella, tomato &ampl toasted peppers</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>14.35</span></div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-10">
                            <h3 class="pb_font-18 font-weight-bold">Cold Antipasto</h3>
                            <p class="mb-0">Romaine lettuce, croutons, and grated cheese</p>
                          </div>
                          <div class="col-lg-2"><span class="price"><sup>$</sup>15.50</span></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->
    <!-- END section -->
    <section class="pb_section bg-light" id="section-events">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center">
            <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Events</h2>
          </div>
        </div>
        <div class="row">
          <div class="card-deck">

            <?php foreach ($eventData as $event_key => $event_value) { ?>
              
               <div class="card border-0">      
                <img class="card-img-top" src="<?php echo $event_value['event_img_main'] ?>" alt="Image caption here">
                <div class="card-body pb_p-40">
                  <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold"><?php echo $event_value['created_at'] ?></small>
                  <h4 class="card-title"><a href="#" class="text-danger"><?php echo $event_value['event_title'] ?></a></h4>
                  <p class="card-text"><?php echo $event_value['event_desc'] ?></p>
                  <p><a href="event_details/<?php echo $event_value['id']; ?>">More Details....</a></p>
                </div>
              </div>
            <?php } ?>
             


           <!--  <div class="card border-0">
              <img class="card-img-top" src="<?php //echo base_url() ?>assets/images/restaurant/800x975/img_4.jpg" alt="Image caption here">
              <div class="card-body pb_p-40">
                <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold">December 10th, 2017</small>
                <h4 class="card-title"><a href="#" class="text-danger">Make Us Your Learning Guide</a></h4>
                <p class="card-text">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>

            <div class="card border-0">
              <img class="card-img-top" src="<?php //echo base_url() ?>assets/images/restaurant/800x975/img_7.jpg" alt="Image caption here">
              <div class="card-body pb_p-40">
                <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold">December 23rd, 2017</small>
                <h4 class="card-title"><a href="#" class="text-danger">For Every Generation</a></h4>
                <p class="card-text">It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
            </div> -->



          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

   
    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>
    

      
  </body>
</html>