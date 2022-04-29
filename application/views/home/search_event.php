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
           <br><br><section>
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>submit_search">
                <div class="col-md-10  order-md-2">
                  <ul class="actions">
                    <li><p><input type="text" name="event_title" placeholder="TITLE" ></p> <span><?php echo form_error('event_title');?></span></a></li>
                     <li><p><input type="text" name="city" placeholder="CITY"></p><?php echo form_error('city'); ?></span></a></li>
                     <li><p><input type="text" name="from_age" placeholder="FROM AGE"></p><?php echo form_error('from_age'); ?></span></a></li>
                     <li><p><input type="text" name="to_age" placeholder="TO AGE"></p><?php echo form_error('to_age'); ?></span></a></li>
                    <li><p><input type="submit" name="submit" value="search"></p></a></li>
                  </ul>
              </div>
            </form>
              </section>

        <!-- Wrapper -->
     
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
            <h1 style="color: white;">Paid Events</h1>

            <!-- Post -->
            <p><?php foreach ($eventData as $event_key => $event_value) { ?>
              <article class="post">
                <header>
                  <div class="title">
                    <h2><a href="single.html"></a></h2>
                    <p style="text-align: left; color: blue; font-size: 200%;"><?php echo $event_value['event_title'] ?></p>
                  </div>
                  <div class="meta">
                    <time class="published" datetime="2015-11-01"><?php echo $event_value['created_at']; ?></time>
                    <a href="profile" class="author"><span class="name"><?php echo $event_value['name']; ?></span><img src="<?php echo $event_value['image']; ?>" style="border-radius: 30%; width: 50%; height: 70%;" alt="" /></a>
                  </div>
                </header>
                <!--<a href="single.html" class="image featured"><img src="assets/images/restaurant/800x975/img_3.jpg" alt="" /></a>-->
              
              
                                <div class="card border-0">      
                                <img class="card-img-top" src="<?php echo $event_value['event_img_main'] ?>" alt="Image caption here">
                                <div class="card-body pb_p-40">
                                <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold"><?php echo $event_value['created_at'] ?></small>
                                <h2 class="card-title"><a href="#" class="text-danger"><?php echo $event_value['event_title'] ?></a></h2>
                                <h2 class="card-title"><a href="#" class="text-danger">Price:-<?php echo $event_value['event_currency'] ?><?php echo $event_value['event_amount'] ?></a></h2>
                                
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

            <!-- Post -->
              <!--<article class="post">
                <header>
                  <div class="title">
                    <h2><a href="single.html">Ultricies sed magna euismod enim vitae gravida</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                  </div>
                  <div class="meta">
                    <time class="published" datetime="2015-10-25">October 25, 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                  </div>
                </header>
                <a href="single.html" class="image featured"><img src="assets/images/restaurant/800x975/oop9.jpg" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
                <footer>
                  <ul class="actions">
                    <li><a href="single.html" class="button large">Continue Reading</a></li>
                  </ul>
                  <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                  </ul>
                </footer>
              </article>

            <!-- Post -->
              <!--<article class="post">
                <header>
                  <div class="title">
                    <h2><a href="single.html">Euismod et accumsan</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                  </div>
                  <div class="meta">
                    <time class="published" datetime="2015-10-22">October 22, 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="assets/images/restaurant/800x975/img_1.jpg" alt="" /></a>
                  </div>
                </header>
                <a href="single.html" class="image featured"><img src="assets/images/restaurant/800x975/img_1.jpg" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
                <footer>
                  <ul class="actions">
                    <li><a href="single.html" class="button large">Continue Reading</a></li>
                  </ul>
                  <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                  </ul>
                </footer>
              </article>

            <!-- Post -->
            <!--
              <article class="post">
                <header>
                  <div class="title">
                    <h2><a href="#">Elements</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                  </div>
                  <div class="meta">
                    <time class="published" datetime="2015-10-18">October 18, 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                  </div>
                </header>

                <section>
                  <h3>Text</h3>
                  <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                  This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                  This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
                  <hr />
                  <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                  <hr />
                  <h2>Heading Level 2</h2>
                  <h3>Heading Level 3</h3>
                  <h4>Heading Level 4</h4>
                  <hr />
                  <h4>Blockquote</h4>
                  <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                  <h4>Preformatted</h4>
                  <pre><code>i = 0;

while (!deck.isInOrder()) {
  print 'Iteration ' + i;
  deck.shuffle();
  i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
                </section>

                <section>
                  <h3>Lists</h3>
                  <div class="row">
                    <div class="col-6 col-12-medium">
                      <h4>Unordered</h4>
                      <ul>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Sagittis adipiscing.</li>
                        <li>Felis enim feugiat.</li>
                      </ul>
                      <h4>Alternate</h4>
                      <ul class="alt">
                        <li>Dolor pulvinar etiam.</li>
                        <li>Sagittis adipiscing.</li>
                        <li>Felis enim feugiat.</li>
                      </ul>
                    </div>
                    <div class="col-6 col-12-medium">
                      <h4>Ordered</h4>
                      <ol>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Etiam vel felis viverra.</li>
                        <li>Felis enim feugiat.</li>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Etiam vel felis lorem.</li>
                        <li>Felis enim et feugiat.</li>
                      </ol>
                      <h4>Icons</h4>
                      <ul class="icons">
                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <h3>Actions</h3>
                  <div class="row">
                    <div class="col-6 col-12-medium">
                      <ul class="actions">
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                      </ul>
                      <ul class="actions small">
                        <li><a href="#" class="button small">Small</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                      </ul>
                      <ul class="actions stacked">
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                      </ul>
                      <ul class="actions stacked">
                        <li><a href="#" class="button small">Small</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                      </ul>
                    </div>
                    <div class="col-6 col-12-medium">
                      <ul class="actions stacked">
                        <li><a href="#" class="button fit">Default</a></li>
                        <li><a href="#" class="button fit">Default</a></li>
                      </ul>
                      <ul class="actions stacked">
                        <li><a href="#" class="button small fit">Small</a></li>
                        <li><a href="#" class="button small fit">Small</a></li>
                      </ul>
                    </div>
                  </div>
                </section>

                <section>
                  <h3>Table</h3>
                  <h4>Default</h4>
                  <div class="table-wrapper">
                    <table>
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Item One</td>
                          <td>Ante turpis integer aliquet porttitor.</td>
                          <td>29.99</td>
                        </tr>
                        <tr>
                          <td>Item Two</td>
                          <td>Vis ac commodo adipiscing arcu aliquet.</td>
                          <td>19.99</td>
                        </tr>
                        <tr>
                          <td>Item Three</td>
                          <td> Morbi faucibus arcu accumsan lorem.</td>
                          <td>29.99</td>
                        </tr>
                        <tr>
                          <td>Item Four</td>
                          <td>Vitae integer tempus condimentum.</td>
                          <td>19.99</td>
                        </tr>
                        <tr>
                          <td>Item Five</td>
                          <td>Ante turpis integer aliquet porttitor.</td>
                          <td>29.99</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="2"></td>
                          <td>100.00</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>

                  <h4>Alternate</h4>
                  <div class="table-wrapper">
                    <table class="alt">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Item One</td>
                          <td>Ante turpis integer aliquet porttitor.</td>
                          <td>29.99</td>
                        </tr>
                        <tr>
                          <td>Item Two</td>
                          <td>Vis ac commodo adipiscing arcu aliquet.</td>
                          <td>19.99</td>
                        </tr>
                        <tr>
                          <td>Item Three</td>
                          <td> Morbi faucibus arcu accumsan lorem.</td>
                          <td>29.99</td>
                        </tr>
                        <tr>
                          <td>Item Four</td>
                          <td>Vitae integer tempus condimentum.</td>
                          <td>19.99</td>
                        </tr>
                        <tr>
                          <td>Item Five</td>
                          <td>Ante turpis integer aliquet porttitor.</td>
                          <td>29.99</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="2"></td>
                          <td>100.00</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </section>

                <section>
                  <h3>Buttons</h3>
                  <ul class="actions">
                    <li><a href="#" class="button large">Large</a></li>
                    <li><a href="#" class="button">Default</a></li>
                    <li><a href="#" class="button small">Small</a></li>
                  </ul>
                  <ul class="actions fit">
                    <li><a href="#" class="button fit">Fit</a></li>
                    <li><a href="#" class="button fit">Fit</a></li>
                    <li><a href="#" class="button fit">Fit</a></li>
                  </ul>
                  <ul class="actions fit small">
                    <li><a href="#" class="button fit small">Fit + Small</a></li>
                    <li><a href="#" class="button fit small">Fit + Small</a></li>
                    <li><a href="#" class="button fit small">Fit + Small</a></li>
                  </ul>
                  <ul class="actions">
                    <li><a href="#" class="button icon solid fa-download">Icon</a></li>
                    <li><a href="#" class="button icon solid fa-upload">Icon</a></li>
                    <li><a href="#" class="button icon solid fa-save">Icon</a></li>
                  </ul>
                  <ul class="actions">
                    <li><span class="button disabled">Disabled</span></li>
                    <li><span class="button disabled icon solid fa-download">Disabled</span></li>
                  </ul>
                </section>

                <section>
                  <h3>Form</h3>
                  <form method="post" action="#">
                    <div class="row gtr-uniform">
                      <div class="col-6 col-12-xsmall">
                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                      </div>
                      <div class="col-12">
                        <select name="demo-category" id="demo-category">
                          <option value="">- Category -</option>
                          <option value="1">Manufacturing</option>
                          <option value="1">Shipping</option>
                          <option value="1">Administration</option>
                          <option value="1">Human Resources</option>
                        </select>
                      </div>
                      <div class="col-4 col-12-small">
                        <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                        <label for="demo-priority-low">Low</label>
                      </div>
                      <div class="col-4 col-12-small">
                        <input type="radio" id="demo-priority-normal" name="demo-priority">
                        <label for="demo-priority-normal">Normal</label>
                      </div>
                      <div class="col-4 col-12-small">
                        <input type="radio" id="demo-priority-high" name="demo-priority">
                        <label for="demo-priority-high">High</label>
                      </div>
                      <div class="col-6 col-12-small">
                        <input type="checkbox" id="demo-copy" name="demo-copy">
                        <label for="demo-copy">Email me a copy</label>
                      </div>
                      <div class="col-6 col-12-small">
                        <input type="checkbox" id="demo-human" name="demo-human" checked>
                        <label for="demo-human">Not a robot</label>
                      </div>
                      <div class="col-12">
                        <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                      </div>
                      <div class="col-12">
                        <ul class="actions">
                          <li><input type="submit" value="Send Message" /></li>
                          <li><input type="reset" value="Reset" /></li>
                        </ul>
                      </div>
                    </div>
                  </form>
                </section>

                <section>
                  <h3>Image</h3>
                  <h4>Fit</h4>
                  <div class="box alt">
                    <div class="row gtr-uniform">
                      <div class="col-12"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                      <div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                    </div>
                  </div>
                  <h4>Left &amp; Right</h4>
                  <p><span class="image left"><img src="images/pic07.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                  <p><span class="image right"><img src="images/pic04.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                </section>

              </article>
            -->

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
                  <p style="color: white;"> THE EXPERIENCES <a href="http://html5up.net">HAVE FUN</a></p>
                  <h2 style="color: white;">Free Events</h2>
                </header>
              </section>

            <!-- Mini Posts -->
              <section>
                    
                <div class="mini-posts">

                  <!-- Mini Post -->
                  <p><?php foreach ($freeventData as $event_key => $event_value) {
                      ?></p>
                    <article class="mini-post">
                         <ul class="actions">
                    <li><a href="event_details/<?php echo $event_value['id']; ?>" class="button large"><p>Continue Reading</p></a></li>
                  </ul>
                      <header>
                        <h3><a href="single.html"><?php echo $event_value['event_title'] ?></a></h3>
                        <time class="published" datetime=""><?php echo $event_value['created_at'] ?></time>
                        <a href="#" class="author"><img src="<?php echo $event_value['image']; ?>" alt="" /><?php echo $event_value['name']; ?></a>
                      
                      <a href="single.html" class="image"><img src="<?php echo $event_value['event_img_main'] ?>" alt="" /></a>
                              </header>
                       

                    </article>
                    <?php } ?>
                    
            
      <!-- Mini Post
                    <article class="mini-post">
                      <header>
                        <h3><a href="single.html">Rutrum neque accumsan</a></h3>
                        <time class="published" datetime="2015-10-19">October 19, 2015</time>
                        <a href="#" class="author"><img src="assets/images/restaurant/800x975/img_4.jpg" alt="" /></a>
                      </header>
                      <a href="single.html" class="image"><img src="assets/images/restaurant/800x975/img_6.jpg" alt="" /></a>
                    </article>

                  <!-- Mini Post
                    <article class="mini-post">
                      <header>
                        <h3><a href="single.html">Odio congue mattis</a></h3>
                        <time class="published" datetime="2015-10-18">October 18, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                      </header>
                      <a href="single.html" class="image"><img src="assets/images/restaurant/800x975/img_1.jpg" alt="" /></a>
                    </article>

                  <!-- Mini Post 
                    <article class="mini-post">
                      <header>
                        <h3><a href="single.html">Enim nisl veroeros</a></h3>
                        <time class="published" datetime="2015-10-17">October 17, 2015</time>
                        <a href="#" class="author"><img src="assets/images/restaurant/800x975/img_3.jpg" alt="" /></a>
                      </header>
                      <a href="single.html" class="image"><img src="assets/images/restaurant/800x975/img_7.jpg" alt="" /></a>
                    </article>

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