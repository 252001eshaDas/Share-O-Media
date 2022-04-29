<!DOCTYPE HTML>

<html>
  <head>
    <title>Community Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload" style="background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)), url(assets/images/restaurant/1900x1200/img_1.jpg)">
    <script src="jquery.js"></script>

    <style>
      ul li a:hover{
    background-color: burlywood;
   
     }

     input{
      border-radius: 15px;
     }

      button[type="submit"]{
          background: transparent;
          border:none;
          outline: none;
          color: #fff;
          background: white;
          padding: 10px 20px;
          cursor: pointer;
          border-radius: 10px;
         }
         button[type=submit]:hover{
        background:burlywood;
        opacity: 0.7;

      }

    </style>
          

        <!-- Wrapper -->
      <div id="wrapper">

        
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

            <!-- Post -->
            <p>
              <article class="post">
                <header>
                  <div class="title">
                    <h2><a href="single.html"></a></h2>
                    <p style="text-align: left; color: blue; font-size: 200%;"><?php echo $searchData['event_title']; ?></p>
                  </div>
                  <div class="meta">
                    <time class="published" datetime="2015-11-01"><?php echo $searchData['created_at']; ?></time>
                    <a href="profile" class="author"><span class="name"><?php echo $userData['name']; ?></span><img src="<?php echo $userData['image']; ?>" style="border-radius: 30%; width: 50%; height: 70%;" alt="" /></a>
                  </div>
                </header>
                <!--<a href="single.html" class="image featured"><img src="assets/images/restaurant/800x975/img_3.jpg" alt="" /></a>-->
              
              
                                <div class="card border-0">      
                                <img class="card-img-top" src="<?php echo $searchData['event_img_main']; ?>" style=" width: 50%; height: 10%;" alt="Image caption here">
                                <div class="card-body pb_p-40">
                                <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold"></small>
                                <h2 class="card-title" style="color: blue;"><a href="#" class="text-danger"><?php echo $searchData['event_desc']; ?></a></h2>
                                <h2 class="card-title"><a href="#" class="text-danger">Price:-<?php echo $searchData['event_amount']; ?><?php echo $searchData['event_currency']; ?></a></h2>
                                
                                <h3 class="card-text"></h3>
                               
                                </div>
                                </div>
                             
                                </p>
                <footer>
                  <ul class="actions">
                    <li><a href="event_details/<?php echo $searchData['id']; ?>" class="button large"><p>Continue Reading</p></a></li>
                  </ul>
                  <ul class="actions">
                    <li><a href="event_details/<?php echo $userData['id']; ?>" class="button large"><p>BOOK NOW</p></a></li>
                  </ul>
                  <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                  </ul>
                </footer>
              </article>
             

        

            <!-- Pagination -->
              <ul class="actions pagination">
                <li><a href="" class="disabled button large previous">Previous Page</a></li>
                <li><a href="#" class="button large next">Next Page</a></li>
              </ul>

          </div>

        <!-- Sidebar -->
          <section id="sidebar">
              <section>    
                <div class="mini-posts">
                 
                    <article class="mini-post">
                     <di style="color: blue;"> 
                    <ul> <li><a href="" ><p>Goals:<?php echo $searchData['event_desc']; ?></p></a></li></ul>
                    <ul><li><a href="" ><p>Category:- <?php
                      if ($searchData['event_type']==0) {
                        echo "Free";
                      }else {
                        echo "Paid";
                      }
                  ?></p></a></li></ul>
                    <ul><li><a href="" ><p>From Age:<?php echo $searchData['from_age']; ?></p></a></li></ul>
                    <ul><li><a href="" ><p>To Age:<?php echo $searchData['to_age']; ?></p></a></li></ul>
                    </div>
                    </article>
                   
                    
          
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