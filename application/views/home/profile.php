<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/theme/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Profile Page </title>

        <!-- Icon css link -->
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


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="dark_bg" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="80" data-scroll-animation="true">
       
        <div id="preloader">
            <div id="preloader_spinner">
                <div class="spinner"></div>
            </div>
        </div>
       
        <!--================ Frist hader Area =================-->
        <header class="header_area" >
            <div class="container" >
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="assets/theme/img/logo.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right" >
                           <li><a href="homecontroller">Home</a></li>
                            <li class="active"><a href="#about">PROFILE</a></li>
                            <li><a href="community">COMMUNITY</a></li>
                            <li><a href="#education">CREATE EVENT</a></li>
                            <li><a href="#service">SEARCH EVENT</a></li>
                           <!-- <li><a href="#portfolio">PORTFOLIO</a></li>
                            <li><a href="#news">News</a></li>
                            <li><a href="#contact">SETTINGS</a></li>-->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </header>
        <!--================End Footer Area =================-->
        
        <!--================Total container Area =================-->
        <div class="container main_container">
            <div class="content_inner_bg row m0">
                <section class="about_person_area pad" id="about">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="person_img">
                                <img src="assets/images/restaurant/800x975/img_11.jpg" alt="">
                                <a class="download_btn" href="#"><span>BIO</span></a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row person_details">
                                <h3><span><?php echo $userData['name']; ?></span></h3>
                                <h4>Web Designer and Web Developer</h4>
                                <p>My name is Bernard Shelly. I am 32 years old. Lorem ipsum dolor sit amet, consectetur ascing elits, sed do eiusmod tempor incidunt ut labore et dolore mafgna aliqua. Ut enim ad mini vniam quis nerci, tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autes irure dolor in reprehenderit in etrs voluptate velit esse cillum dolore eu fugiat nulla pariatur. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                <div class="person_information">
                                    <ul>
                                        <li><a href="#">Email</a></li>
                                        <li><a href="#">Phone</a></li>
                                        <li><a href="#">DOB</a></li>
                                        <li><a href="#">location</a></li>
                                        <li><a href="#">Gender</a></li>
                                        <li><a href="#"></a></li>
                                       
                                    </ul>
                                    <ul>
                                        <li><a href="#"><span><?php echo $userData['email']; ?></span></a></li>
                                        <li><a href="#"><span><?php echo $userData['phone']; ?></span></a></li>
                                        <li><a href="#"><span><?php echo $userData['dob']; ?></span></a></li>
                                        <li><a href="#"><span><?php echo $userData['location']; ?></span></a></li>
                                        <li><a href="#"><span><?php echo $userData['gender']; ?></span></a></li>
                                        <!--<li><a href="#"><span><?php echo $userData['']; ?></span></a></li>
                                        <li><a href="#"><span><?php echo $userData['']; ?></span></a></li>-->
                                    </ul>
                                </div>
                                <ul class="social_icon">
                                    <li><a href="edit_profile"><button type="submit">Edit Profile</button></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="myskill_area pad" id="skill">
                    <div class="main_title">
                        <h2>My Skill</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 wow fadeInUp animated">
                            <div class="skill_text">
                                <h4>Web development Skills</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text.</p>
                            </div>


                            <div class="skill_item_inner">
                                <div class="single_skill">
                                    <h4>Wordpress</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">85</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>Php & MySQL</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">65</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>Html & Css</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">75</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>JavaScript</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">95</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp animated">
                            <div class="skill_text">
                                <h4>Web Design Skills</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text.</p>
                            </div>
                            <section>
                            <div class="skill_item_inner">
                                <div class="single_skill">
                                    <h4>Creative Design</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow=".85" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">85</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>Photoshop</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">65</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>Illustrator</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">75</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>Photography</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">95</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>_-->
                <section class="education_area pad" id="education">
                    <div class="main_title">
                        <h2>EVENTS</h2>
                    </div>
                    <div class="education_inner_area">
                        <div class="education_item wow fadeInUp animated" data-line="S" >
                            <h6 style="color: chocolate">2005-2007</h6>
                            <a href="#"><h4>31st Night Event</h4></a>
                            <h5>St. Nicholas High School</h5>
                            <p>Lorem ipsum dolor sit amets, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                        <div class="education_item wow fadeInUp animated" data-line="H">
                            <h6 style="color: chocolate">2005-2007</h6>
                            <a href="#"><h4>1st January </h4></a>
                            <h5>St. Nicholas High School</h5>
                            <p>Lorem ipsum dolor sit amets, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                        <div class="education_item wow fadeInUp animated" data-line="o">
                            <h6 style="color: chocolate">2005-2007</h6>
                            <a href="#"><h4>Secondary School</h4></a>
                            <h5>St. Nicholas High School</h5>
                            <p>Lorem ipsum dolor sit amets, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                        <div class="education_item wow fadeInUp animated" data-line="M">
                            <h6 style="color: chocolate">2005-2007</h6>
                            <a href="#"><h4>Secondary School</h4></a>
                            <h5>St. Nicholas High School</h5>
                            <p>Lorem ipsum dolor sit amets, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                        <div class="education_item wow fadeInUp animated" data-line="D">
                            <h6 style="color: chocolate">2005-2007</h6>
                            <a href="#"><h4>Secondary School</h4></a>
                            <h5>St. Nicholas High School</h5>
                            <p>Lorem ipsum dolor sit amets, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </section>
                <section class="service_area" id="service">
                    <div class="main_title">
                        <h2>SERVICES</h2>
                    </div>
                    <div class="service_inner row">
                        <div class="col-md-6">
                            <div class="service_item wow fadeInUp animated">
                                <i class="fa fa-wordpress" aria-hidden="true"></i>
                                <a href="#"><h4>Wordpress Development</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service_item wow fadeInUp animated">
                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                                <a href="#"><h4>Creative Design</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service_item wow fadeInUp animated">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <a href="#"><h4>Mobile Apps Development</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service_item wow fadeInUp animated">
                                <i class="fa fa-maxcdn" aria-hidden="true"></i>
                                <a href="#"><h4>Social Media Marketing</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service_item wow fadeInUp animated">
                                <i class="fa fa-camera" aria-hidden="true"></i>
                                <a href="#"><h4>Professional Photography</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service_item wow fadeInUp animated">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                <a href="#"><h4>Website Development</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="portfolio_area pad" id="portfolio">
                    <div class="main_title">
                        <h2>Trending</h2>
                    </div>
                    <div class="porfolio_menu">
                        <ul class="causes_filter">
                            <li class="active" data-filter="*"><a href="">All</a></li>
                            <li data-filter=".photo"><a href="">Photography</a></li>
                            <li data-filter=".design"><a href="">Design</a></li>
                            <li data-filter=".marketing"><a href="">Marketing</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="portfolio_list_inner">
                            <div class="col-md-4 photo marketing">
                                <div class="portfolio_item">
                                    <div class="portfolio_img">
                                        <img src="assets/theme/img/portfolio/portfolio-1.png" alt="">
                                    </div>
                                    <div class="portfolio_title">
                                        <a href="#"><h4>Dreams visualization</h4></a>
                                        <h5>Photography</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 design">
                                <div class="portfolio_item">
                                    <div class="portfolio_img">
                                        <img src="assets/theme/img/portfolio/portfolio-2.png" alt="">
                                    </div>
                                    <div class="portfolio_title">
                                        <a href="#"><h4>Dreams visualization</h4></a>
                                        <h5>Photography</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 photo marketing">
                                <div class="portfolio_item">
                                    <div class="portfolio_img">
                                        <img src="assets/theme/img/portfolio/portfolio-3.png" alt="">
                                    </div>
                                    <div class="portfolio_title">
                                        <a href="#"><h4>Dreams visualization</h4></a>
                                        <h5>Photography</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 design marketing">
                                <div class="portfolio_item">
                                    <div class="portfolio_img">
                                        <img src="assets/theme/img/portfolio/portfolio-4.png" alt="">
                                    </div>
                                    <div class="portfolio_title">
                                        <a href="#"><h4>Dreams visualization</h4></a>
                                        <h5>Photography</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 photo">
                                <div class="portfolio_item">
                                    <div class="portfolio_img">
                                        <img src="assets/theme/img/portfolio/portfolio-5.png" alt="">
                                    </div>
                                    <div class="portfolio_title">
                                        <a href="#"><h4>Dreams visualization</h4></a>
                                        <h5>Photography</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 marketing">
                                <div class="portfolio_item">
                                    <div class="portfolio_img">
                                        <img src="assets/theme/img/portfolio/portfolio-6.png" alt="">
                                    </div>
                                    <div class="portfolio_title">
                                        <a href="#"><h4>Dreams visualization</h4></a>
                                        <h5>Photography</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="news_area pad" id="news">
                    <div class="main_title">
                        <h2>News</h2>
                    </div>
                    <div class="news_inner_area">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="twitter_area wow fadeInLeft animated">
                                    <div class="w_title">
                                        <h3><i class="fa fa-twitter"></i>Twitter</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">@themexart:</a> Lorem ipsum dolors sit amets consectetur adipicing elit sed do eiusmod tempor incididunt ut labore.</li>
                                        <li><a href="#">@themexart:</a> Lorem ipsum dolors sit amets consectetur adipicing elit sed do eiusmod tempor incididunt ut labore.</li>
                                        <li><a href="#">@themexart:</a> Lorem ipsum dolors sit amets consectetur adipicing elit sed do eiusmod tempor incididunt ut labore.</li>
                                        <li><a href="#">@themexart:</a> Lorem ipsum dolors sit amets consectetur adipicing elit sed do eiusmod tempor incididunt ut labore.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog_slider_area wow fadeInUp animated">
                                    <div class="w_title">
                                        <h3>Blog</h3>
                                    </div>
                                    <div class="blog_slider_inner">
                                        <div class="item">
                                            <img src="assets/theme/img/blog/blog-1.jpg" alt="">
                                            <a href="#"><h3>The Importance of User Experience</h3></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                            <h5>Posted by <a href="http://rocky.obaidul.com">Rocky</a> at 04 Feb, 2017</h5>
                                        </div>
                                        <div class="item">
                                            <img src="assets/theme/img/blog/blog-2.jpg" alt="">
                                            <a href="#"><h3>The Importance of User Experience</h3></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                            <h5>Posted by <a href="http://rocky.obaidul.com">Rocky</a> at 04 Feb, 2017</h5>
                                        </div>
                                        <div class="item">
                                            <img src="assets/theme/img/blog/blog-3.jpg" alt="">
                                            <a href="#"><h3>The Importance of User Experience</h3></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                            <h5>Posted by <a href="http://rocky.obaidul.com">Rocky</a> at 04 Feb, 2017</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="instagram_area wow fadeInRight animated">
                                    <div class="w_title">
                                        <h3><i class="fa fa-instagram"></i>Instagram</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-6.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-7.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-8.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/theme/img/instagram/instagram-9.jpg" alt=""></a></li>
                                    </ul>
                                    <a class="follow_btn" href="#"><i class="fa fa-instagram"></i> Follow on Instagram</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact_area pad" id="contact">
                    <div class="main_title">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left_contact_details wow fadeInUp animated">
                                <div class="contact_title">
                                    <h3>Contact Info</h3>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the et majori have suffered alteration in some form, by injected humour, Domised words which don't look even slightly believable. If you are going to use a pas of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Address</h4>
                                        <p>Freedom Way, Jersey City, NJ 07305, USA</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Phone</h4>
                                        <p>+1 (234) 456 789</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Email</h4>
                                        <p>backpiper.com@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_from_area wow fadeInUp animated">
                                <div class="contact_title">
                                    <h3>Send Message</h3>
                                </div>
                                <div class="row">
                                    <form action="contact_process.php" method="post" id="contactForm">
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="First Name*">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="last" id="last" placeholder="Last Name*">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" rows="1" id="message" name="message" placeholder="Write Message"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="btn btn-default contact_btn" type="submit"><span>Send Massage</span></button>
                                        </div>
                                    </form>
                                    <div id="success">
                                        <p>Your text message sent successfully!</p>
                                    </div>
                                    <div id="error">
                                        <p>Sorry! Message not sent. Something went wrong!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--================Map Area =================-->
                <div id="mapBox" class="mapBox row m0" 
                data-lat="37.3818288" 
                data-lon="-122.0658212" 
                data-zoom="13"></div>
                <!--================End Map Area =================-->
            </div>
        </div>
        <!--================End Total container Area =================-->
        
        <!--================footer Area =================-->
        <footer class="footer_area">
            <div class="footer_inner">
                <div class="container">
                    <img src="assets/theme/img/footer-logo.png" alt="">
                    <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="pull-left">
                        <h5><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p></h5>
                    </div>
                    <div class="pull-right">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">ABOUT ME </a></li>
                            <li><a href="#">Skill</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">SERVICES</a></li>
                            <li><a href="#">PORTFOLIO</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">CONTACT</a></li>
                             
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End footer Area =================-->
        
       <!-- <div class="envalab-style-switch" id="switch-style">
            <div class="switch-button" id="toggle-switcher"><i class="fa fa-gears"></i></div>
            <div class="switched-options">
                <div class="config-title">Color Panel </div>
                <ul class="styles">
                    <li>
                        <a href=# onclick='return ("white"),!1' title="white"></a>
                    </li>
                   
                </ul>
            </div>
        </div>
        
        
         jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
    </body>
</html>