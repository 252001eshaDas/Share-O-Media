<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Community Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload" style="background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));">
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

    <script type="text/javascript">
    	function selectEvent(evtValue){

    		if (evtValue=='hosting') {
    			var selectVal = $('#host_id').val();

    			if (selectVal!='Select') {
    				$('#attend_id').attr('disabled','disabled');
    			    $('#past_id').attr('disabled','disabled');
    			}else{
    				$('#attend_id').removeAttr('disabled','disabled');
					$('#past_id').removeAttr('disabled','disabled');	
    			}
    			
    		}

    		if (evtValue=='attending') {
    			var selectVal = $('#attend_id').val();

    			if (selectVal!='Select') {
    				$('#host_id').attr('disabled','disabled');
    			    $('#past_id').attr('disabled','disabled');
    			}else{

					$('#past_id').removeAttr('disabled','disabled');
					$('#host_id').removeAttr('disabled','disabled');	
    			}
    	    }

    		if (evtValue=='past') {
    			var selectVal = $('#past_id').val();

    			if (selectVal!='Select') {
    				$('#host_id').attr('disabled','disabled');
    			    $('#attend_id').attr('disabled','disabled');
    			}else{
  					$('#attend_id').removeAttr('disabled','disabled');
					$('#host_id').removeAttr('disabled','disabled');	
    			}
    			
    		}
    	}
    </script>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<!-- <header id="header">
						<h1><a href="index.html">SHAREOMEDIA</a></h1>
						<nav class="links">
							<ul>
								<li><a href="homecontroller">Home</a></li>
								<li><a href="profile">My Profile</a></li>
								<li><a href="#">Create Experiences</a></li>
								<li><a href="#">Search Experiences</a></li>
								<li><a href="#">Book Event</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header> -->

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Log In</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">
						<h1 style="color: white;">Paid Events</h1>

						<?php 
						  // echo "<pre>";
						  // print_r($eventData);
						  // die();
						 ?>

						<!-- Post -->
						<p><?php foreach ($eventData as $event_key => $event_value) { ?>
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="single.html"></a></h2>
										<p style="text-align: left; color: blue; font-size: 200%;"><?php echo $event_value['event_title'] ?></p>
										<h3>
											<?php if ($event_value['post_type']==1) { ?>

												<?php echo $event_value['name'] ?> is hosting a new experience on <?php echo date('d-m-Y h:i:sa', strtotime($event_value['created_at'])); ?>

										  <?php } else if($event_value['post_type']==2) {?>-

										  		<?php echo $event_value['name'] ?> attending a new experience.

										  <?php } else if($event_value['post_type']==3) {?>

										  		<?php echo $event_value['name'] ?> Sharing new experience.

										  <?php } else if($event_value['post_type']==4) {?>

										  		<?php echo $event_value['name'] ?> Texting A new Post.
										  		 TEXT:-<?php echo $event_value['post_text']; ?>

										  <?php } else if($event_value['post_type']==5) {?>

										  		<?php echo $event_value['name'] ?> Image Post.
										  		IMAGE:-<img src="<?php echo $event_value['post_image']; ?>"style=" display: block; margin-left: auto; margin-right: auto; border:5px solid #ddd; opacity: 1;  width: 70%;" alt="" /></a>


										  <?php } else if($event_value['post_type']==6) {?>

										  		<?php echo $event_value['name'] ?> Text And Image Post<br>
										    <div class = "meta">
										  TEXT:-<?php echo $event_value['post_text']; ?></div>
                                        <div class = "meta">
										IMAGE:-<img src="<?php echo $event_value['post_image']; ?>" style=" display: block; margin-left: auto; margin-right: auto; border:5px solid #ddd; opacity: 1;  width: 70%;" alt="" /></a>
								        </div>
										  						
										  						
										  <?php } ?>
										  	


										</h3>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?php echo $event_value['created_at']; ?></time>
										<a href="profile" class="author"><span class="name"><?php echo $event_value['name']; ?></span><img src="<?php echo $event_value['image']; ?>" style="border-radius: 30%; width: 50%; height: 70%; " alt="" /></a>
									</div>
								</header>
								<!--<a href="single.html" class="image featured"><img src="assets/images/restaurant/800x975/img_3.jpg" alt="" /></a>-->
							
              
                                <div class="card border-0">      
                                <img class="card-img-top" src="<?php echo $event_value['event_img_main'] ?>" alt="Image caption here">
                                <div class="card-body pb_p-40">
                                <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold"><?php echo date('d-m-Y h:i:sa', strtotime($event_value['created_at'])); ?></small>
                                <h2 class="card-title"><a href="#" class="text-danger"><?php echo $event_value['event_title'] ?></a></h2>
                                <h2 class="card-title"><a href="#" class="text-danger">

                                	<?php if ($event_value['event_amount']==0) { ?>
                                		Free
                                	<?php } else {
                                		echo $event_value['event_currency'] ?><?php echo $event_value['event_amount'];
                                	 } ?>
                                		

                                	</a></h2>
                                <h3 class="card-text"><?php echo $event_value['event_desc'] ?></h3>
                               
                                </div>
                                </div>
                             
                                </p>
								<footer>
									<ul class="actions">
										<li><a href="event_details/<?php echo $event_value['id']; ?>" class="button large"><p>Continue Reading</p></a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							   <?php } ?>


						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button large previous">Previous Page</a></li>
								<li><a href="#" class="button large next">Next Page</a></li>
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="assets/images/restaurant/800x975/img_7.jpg" alt="" /></a>
								<header>
									<h2 style="color: white;">SHAREOMEDIA</h2>
									<p style="color: white;"> THE EXPERIENCES <a href="http://html5up.net">HAVE FUN</a>
									</p>

								</header>
								<form method="post" action="<?=base_url('create_post')?>" enctype="multipart/form-data">
									<span style="color: white;">Hosting Experience</span>
									<select id="host_id" name="event_id" value="Hosting_event" style="color: white;" onchange="selectEvent('hosting')">
										<option value="Select">Select Hosting Experience</option>
										<?php foreach ($hostingData as $event_key => $event_value) { ?>
											<option value="<?php echo $event_value['id']; ?>"><?php echo $event_value['event_title']; ?></option>
										<?php } ?>
									</select>
									<br>
									<span style="color: white;">Attending Experience</span>
									<select id="attend_id" name="event_id" style="color: white;" onchange="selectEvent('attending')">
										<option value="Select">Select Attending Experience</option>
										<option value="1">Attending</option>
										<option value="2">Attending</option>
										<option value="3">Attending</option>
									</select>

									<br>
									<span style="color: white;">Past Experience</span>
									<select id="past_id" name="event_id" style="color: white;" onchange="selectEvent('past')">
										<option value="Select">Select Past Experience</option>
										<option value="1">Past_event</option>
										<option value="2">Past_event</option>
										<option value="3">Past_event</option>
									</select>
									<br>
									<textarea placeholder="Write Something" name="post_text" style="color: white;"></textarea>
									<br>
									<input type="file" name="post_image" id="image" value="" >
									<br><br>
		                            <input type="checkbox" name="post_status" value="0" id="post_status" />
		                            <label for="privacy">Public</label>
		                            <input type="checkbox" name="post_status" value="1" id="post_status" />
		                            <label for="privacy">Private</label><br>



									<button  name="create" style="color: white;">create</button>
								</form>

							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">
									<h2 style="color: white;">Free Events</h2>

									<!-- Mini Post -->
										<p><?php foreach ($freeventData as $event_key => $event_value) {
											?></p>
										<article class="mini-post">
									       <ul class="actions">
										<li><a href="event_details/<?php echo $event_value['id']; ?>" class="button large"><p>Continue Reading</p></a></li>
									</ul>
											<header>
												<h3><a href="single.html"><?php echo $event_value['event_title'] ?></a></h3>
												<!-- <h3><a href="single.html">
												<?php echo $event_value['event_desc'] ?></a></h3> -->
												<h3 style="color: red"><a href="single.html">

													<?php if($event_value['event_type']==0) { ?>
														Free

													<?php } ?>
											   </a></h3>
												<time class="published" datetime=""><?php echo $event_value['created_at'] ?></time>
												<a href="#" class="author"><img src="<?php echo $event_value['image']; ?>" alt="" /><?php echo $event_value['name']; ?></a>
											
											<a href="single.html" class="image"><img src="<?php echo $event_value['event_img_main'] ?>" alt="" /></a>
									            </header>
											 

										</article>
										<?php } ?>

								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="assets/images/restaurant/800x975/oop9.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
												<time class="published" datetime="2015-10-15">October 15, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="assets/images/restaurant/800x975/img_9.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
												<time class="published" datetime="2015-10-10">October 10, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="assets/images/restaurant/800x975/img_4.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
												<time class="published" datetime="2015-10-08">October 8, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="assets/images/restaurant/800x975/img_3.jpg"alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
												<time class="published" datetime="2015-10-06">October 7, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="assets/images/restaurant/800x975/img_9.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>