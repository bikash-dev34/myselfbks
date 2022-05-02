<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sunshine - Responsive vCard Template</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="description" content="Sunshine - Responsive vCard Template" />
    <meta
      name="keywords"
      content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio"
    />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/transition-animations.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="my-photo">
          <img src="images/my_photo.png" alt="image" />
          <div class="mask"></div>
        </div>

        <div class="site-title-block">
          <h1 class="site-title">Alex Smith</h1>
          <p class="site-description">Web Designer</p>
        </div>

        <!-- Navigation & Social buttons -->
        <div class="site-nav">
          <!-- Main menu -->
          <ul id="nav" class="site-main-menu">
            <!-- About Me Subpage link -->
            <li>
              <a
                class="pt-trigger"
                href="#home"
                data-animation="58"
                data-goto="1"
                >Home</a
              ><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
            </li>
            <!-- /About Me Subpage link -->
            <!-- About Me Subpage link -->
            <li>
              <a
                class="pt-trigger"
                href="#about_me"
                data-animation="59"
                data-goto="2"
                >About me</a
              >
            </li>
            <!-- /About Me Subpage link -->
            <li>
              <a
                class="pt-trigger"
                href="#resume"
                data-animation="60"
                data-goto="3"
                >Resume</a
              >
            </li>
            <li>
              <a
                class="pt-trigger"
                href="#portfolio"
                data-animation="61"
                data-goto="4"
                >Portfolio</a
              >
            </li>
            <li>
              <a
                class="pt-trigger"
                href="#blog"
                data-animation="58"
                data-goto="5"
                >Blog</a
              >
            </li>
            <li>
              <a
                class="pt-trigger"
                href="#contact"
                data-animation="59"
                data-goto="6"
                >Contact</a
              >
            </li>
          </ul>
          <!-- /Main menu -->

          <!-- Social buttons -->
          <ul class="social-links">
            <li>
              <a class="tip social-button" href="#" title="Twitter"
                ><i class="fa fa-twitter"></i
              ></a>
            </li>
            <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
            <li>
              <a class="tip social-button" href="#" title="Facebook"
                ><i class="fa fa-facebook"></i
              ></a>
            </li>
            <li>
              <a class="tip social-button" href="#" title="Google Plus"
                ><i class="fa fa-google-plus"></i
              ></a>
            </li>
            <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
            <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
            <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
          </ul>
          <!-- /Social buttons -->
        </div>
        <!-- Navigation & Social buttons -->
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Alex Smith</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">
            <!-- Home Subpage -->
            <section
              class="pt-page pt-page-1 section-with-bg section-paddings-0"
              style="background-image: url(images/home_page_bg_1.jpg)"
              data-id="home"
            >
              <div class="home-page-block-bg">
                <div class="mask"></div>
              </div>
              <div class="home-page-block">
                <div class="v-align">
                  <h2>Alex Smith</h2>
                  <div id="rotate" class="text-rotate">
                    <div>
                      <p class="home-page-description">Web Designer</p>
                    </div>
                    <div>
                      <p class="home-page-description">Frontend-developer</p>
                    </div>
                  </div>

                  <div class="block end" style="text-align: center">
                    <ul class="info-list">
                      <li>
                        <span class="title">Age</span
                        ><span class="value">29</span>
                      </li>
                      <li>
                        <span class="title">Address</span
                        ><span class="value">88 Some Street, Some Town</span>
                      </li>
                      <li>
                        <span class="title">e-mail</span
                        ><span class="value"
                          ><a href="mailto:email@example.com"
                            >email@example.com</a
                          ></span
                        >
                      </li>
                      <li>
                        <span class="title">Phone</span
                        ><span class="value">+0123 123 456 789</span>
                      </li>
                      <li>
                        <span class="title">Freelance</span
                        ><span class="value available">Available</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- About Me Subpage -->
            <section class="pt-page pt-page-2" data-id="about_me">
              <div class="section-title-block">
                <h2 class="section-title">About Me</h2>
                <h5 class="section-description">
                  Artist, Thinker, Creative Doer
                </h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="general-info">
                    <h3>I am Web Developer/Designer @ Company.com</h3>
                    <p>
                      Proin laoreet elementum ligula, ac tincidunt lorem
                      accumsan nec. Fusce eget urna ante. Donec massa velit,
                      varius a accumsan ac, tempor iaculis massa. Sed placerat
                      justo sed libero varius vulputate. Ut a mi tempus massa
                      malesuada fermentum.
                    </p>
                    <p>
                      Sed eleifend sed nibh nec fringilla. Donec eu cursus sem,
                      vitae tristique ante. Cras pretium rutrum egestas. Integer
                      ultrices libero sed justo vehicula, eget tincidunt tortor
                      tempus. Sed tellus nibh, lobortis ut blandit sed,
                      convallis a mauris.
                    </p>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Testimonials</h3>
                  </div>
                  <div class="testimonials owl-carousel">
                    <!-- Testimonial 2 -->
                    <div class="testimonial-item">
                      <!-- Testimonial Content -->
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                          <p>
                            "Proin auctor pulvinar tellus, et venenatis ligula
                            pharetra eu. Duis dictum nisi sed pellentesque
                            euismod."
                          </p>
                        </div>
                      </div>
                      <!-- /Testimonial Content -->
                      <!-- Testimonial Author -->
                      <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                          <img
                            src="images/testimonials/testimonila_photo_2.png"
                            alt=""
                          />
                        </div>
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                          <p class="testimonial-author">Bryan Morris</p>
                          <p class="testimonial-firm">Sun Foods</p>
                        </div>
                      </div>
                      <!-- /Testimonial author information -->
                    </div>
                    <!-- End of Testimonial 2 -->

                    <!-- Testimonial 2 -->
                    <div class="testimonial-item" style="width: 100%">
                      <!-- Testimonial Content -->
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                          <p>
                            "Vivamus porta dapibus tristique. Suspendisse et
                            arcu eget nisi convallis eleifend nec ac lorem."
                          </p>
                        </div>
                      </div>
                      <!-- /Testimonial Content -->
                      <!-- Testimonial Author -->
                      <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                          <img
                            src="images/testimonials/testimonial_photo_1.png"
                            alt=""
                          />
                        </div>
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                          <p class="testimonial-author">John Doe</p>
                          <p class="testimonial-firm">Apple Inc.</p>
                        </div>
                      </div>
                      <!-- /Testimonial author information -->
                    </div>
                    <!-- End of Testimonial 2 -->
                  </div>
                </div>
              </div>

              <!-- Services block -->
              <div class="block-title">
                <h3>Services</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block">
                    <div class="service-info">
                      <img
                        src="images/service/web_design.png"
                        alt="Responsive Design"
                      />
                      <h4>Web Design</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block">
                    <div class="service-info">
                      <img
                        src="images/service/copywrite.png"
                        alt="Copywriter"
                      />
                      <h4>Copywriter</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block">
                    <div class="service-info">
                      <img
                        src="images/service/ecommerce.png"
                        alt="E-Commerce"
                      />
                      <h4>E-Commerce</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block">
                    <div class="service-info">
                      <img
                        src="images/service/management.png"
                        alt="Management"
                      />
                      <h4>Management</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Services block -->

              <!-- Clients block -->
              <div class="block-title">
                <h3>Clients</h3>
              </div>

              <div class="row">
                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"
                      ><img src="images/clients/client_1.png" alt="image"
                    /></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"
                      ><img src="images/clients/client_2.png" alt="image"
                    /></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"
                      ><img src="images/clients/client_3.png" alt="image"
                    /></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"
                      ><img src="images/clients/client_4.png" alt="image"
                    /></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"
                      ><img src="images/clients/client_5.png" alt="image"
                    /></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"
                      ><img src="images/clients/client_6.png" alt="image"
                    /></a>
                  </div>
                </div>
              </div>
              <!-- End of Clients block -->

              <!-- Fun facts block -->
              <div class="block-title">
                <h3>Fun Facts</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block gray-bg">
                    <i class="pe-7s-icon pe-7s-smile"></i>
                    <h4>Happy Clients</h4>
                    <span class="fun-value">1,024</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block">
                    <i class="pe-7s-icon pe-7s-alarm"></i>
                    <h4>Working Hours</h4>
                    <span class="fun-value">6,256</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block gray-bg">
                    <i class="pe-7s-icon pe-7s-medal"></i>
                    <h4>Awards Won</h4>
                    <span class="fun-value">21</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block">
                    <i class="pe-7s-icon pe-7s-coffee"></i>
                    <h4>Coffee Consumed</h4>
                    <span class="fun-value">20,000</span>
                  </div>
                </div>
              </div>
              <!-- End of Fun fucts block -->
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-3" data-id="resume">
              <div class="section-title-block">
                <h2 class="section-title">Resume</h2>
                <h5 class="section-description">6 Years of Experience</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Education</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2010</h5>
                      <h4 class="event-name">Specialization Course</h4>
                      <span class="event-description"
                        >University of Studies</span
                      >
                      <p>
                        Mauris magna sapien, pharetra consectetur fringilla
                        vitae, interdum sed tortor.
                      </p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2009</h5>
                      <h4 class="event-name">Specialization Course</h4>
                      <span class="event-description"
                        >University of Studies</span
                      >
                      <p>
                        Mauris magna sapien, pharetra consectetur fringilla
                        vitae, interdum sed tortor.
                      </p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2008</h5>
                      <h4 class="event-name">Specialization Course</h4>
                      <span class="event-description"
                        >University of Studies</span
                      >
                      <p>
                        Mauris magna sapien, pharetra consectetur fringilla
                        vitae, interdum sed tortor.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Experience</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Dec 2012 - Current</h5>
                      <h4 class="event-name">Frontend-developer</h4>
                      <span class="event-description">Web Agency</span>
                      <p>
                        Mauris magna sapien, pharetra consectetur fringilla
                        vitae, interdum sed tortor.
                      </p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Dec 2011 - Nov 2012</h5>
                      <h4 class="event-name">Web Designer</h4>
                      <span class="event-description">Apple Inc.</span>
                      <p>
                        Mauris magna sapien, pharetra consectetur fringilla
                        vitae, interdum sed tortor.
                      </p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Jan 2010 - Dec 2011</h5>
                      <h4 class="event-name">Graphic Designer</h4>
                      <span class="event-description">Web Agency</span>
                      <p>
                        Mauris magna sapien, pharetra consectetur fringilla
                        vitae, interdum sed tortor.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Design Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>Web Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-1"></div>
                    </div>

                    <h4>Graphic Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-2"></div>
                    </div>

                    <h4>Print Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div>
                  </div>

                  <div class="block-title">
                    <h3>Coding Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>HML5</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                    <h4>CSS3</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-5"></div>
                    </div>

                    <h4>jQuery</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div>

                    <h4>Wordpress</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>

                    <h4>PHP</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="download-cv-block">
                    <a class="button" target="_blank" href="#">Download CV</a>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->

            <!-- Portfolio Subpage -->
            <section class="pt-page pt-page-4" data-id="portfolio">
              <div class="section-title-block">
                <h2 class="section-title">Portfolio</h2>
                <h5 class="section-description">My Best Works</h5>
              </div>

              <!-- Portfolio Content -->
              <div class="portfolio-content">
                <!-- Portfolio filter -->
                <ul id="portfolio_filters" class="portfolio-filters">
                  <li class="active">
                    <a
                      class="filter btn btn-sm btn-link active"
                      data-group="all"
                      >All</a
                    >
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="media"
                      >Media</a
                    >
                  </li>
                  <li>
                    <a
                      class="filter btn btn-sm btn-link"
                      data-group="illustration"
                      >Illustration</a
                    >
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="video"
                      >Video</a
                    >
                  </li>
                </ul>
                <!-- End of Portfolio filter -->

                <!-- Portfolio Grid -->
                <div
                  id="portfolio_grid"
                  class="portfolio-grid portfolio-masonry masonry-grid-3"
                >
                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="images/portfolio/1.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->

                  <!-- Portfolio Item 2 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a
                      href="https://player.vimeo.com/video/97102654?autoplay=1"
                      title="Praesent Dolor Ex"
                      class="lightbox mfp-iframe"
                    >
                      <img src="images/portfolio/2.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Video</small>
                        <i class="fa fa-video-camera"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 2 -->

                  <!-- Portfolio Item 3 -->
                  <figure class="item" data-groups='["all","illustration"]'>
                    <a
                      href="images/portfolio/3.jpg"
                      class="lightbox"
                      title="Duis Eu Eros Viverra"
                    >
                      <img src="images/portfolio/3.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Illustration</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 3 -->

                  <!-- Portfolio Item 4 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="images/portfolio/4.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 4 -->

                  <!-- Portfolio Item 5 -->
                  <figure class="item" data-groups='["all", "illustration"]'>
                    <a
                      href="images/portfolio/5.jpg"
                      class="lightbox"
                      title="Aliquam Condimentum Magna Rhoncus"
                    >
                      <img src="images/portfolio/5.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Illustration</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 5 -->

                  <!-- Portfolio Item 6 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="images/portfolio/6.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 6 -->

                  <!-- Portfolio Item 7 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a
                      href="https://player.vimeo.com/video/97102654?autoplay=1"
                      title="Nulla Facilisi"
                      class="lightbox mfp-iframe"
                    >
                      <img src="images/portfolio/7.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Video</small>
                        <i class="fa fa-video-camera"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 7 -->

                  <!-- Portfolio Item 8 -->
                  <figure class="item" data-groups='["all",  "media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="images/portfolio/8.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 8 -->

                  <!-- Portfolio Item 9 -->
                  <figure class="item" data-groups='["all","illustration"]'>
                    <a
                      href="images/portfolio/9.jpg"
                      class="lightbox"
                      title="Mauris Neque Dolor"
                    >
                      <img src="images/portfolio/9.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Illustration</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 9 -->

                  <!-- Portfolio Item 10 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a
                      href="https://player.vimeo.com/video/97102654?autoplay=1"
                      title="Donec Lectus Arcu"
                      class="lightbox mfp-iframe"
                    >
                      <img src="images/portfolio/10.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Video</small>
                        <i class="fa fa-video-camera"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 10 -->

                  <!-- Portfolio Item 11 -->
                  <figure class="item" data-groups='["all","illustration"]'>
                    <a
                      href="images/portfolio/11.jpg"
                      class="lightbox"
                      title="Duis Eu Eros Viverra"
                    >
                      <img src="images/portfolio/11.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Illustration</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 11 -->

                  <!-- Portfolio Item 12 -->
                  <figure class="item" data-groups='["all","media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="images/portfolio/12.jpg" alt="" />
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 12 -->
                </div>
                <!-- /Portfolio Grid -->
              </div>
              <!-- /Portfolio Content -->
            </section>
            <!-- /Portfolio Subpage -->

            <!-- Blog Subpage -->
            <section class="pt-page pt-page-5" data-id="blog">
              <div class="section-title-block">
                <h2 class="section-title">Blog</h2>
                <h5 class="section-description">My Diary</h5>
              </div>
              <div class="blog-masonry">
                <!-- Blog Post 1 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img
                          class="post-image img-responsive"
                          src="images/blog/blog_post_1.jpg"
                          alt="blog-post-1"
                        />
                        <div class="mask"></div>
                        <div class="post-date">
                          <span class="day">6</span
                          ><span class="month">Dec</span
                          ><!--<span class="year">2016</span>-->
                        </div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">Travel</a></li>
                      </ul>
                      <a href="blog-post-1.html"
                        ><h4 class="blog-item-title">
                          Bootstrap is the Most Popular Framework
                        </h4></a
                      >
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 1 -->

                <!-- Blog Post 2 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img
                          class="post-image img-responsive"
                          src="images/blog/blog_post_2.jpg"
                          alt="blog-post-2"
                        />
                        <div class="mask"></div>
                        <div class="post-date">
                          <span class="day">3</span
                          ><span class="month">Nov</span
                          ><!--<span class="year">2016</span>-->
                        </div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">jQuery</a></li>
                      </ul>
                      <a href="blog-post-1.html"
                        ><h4 class="blog-item-title">
                          One Framework, Every Device
                        </h4></a
                      >
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 2 -->

                <!-- Blog Post 3 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img
                          class="post-image img-responsive"
                          src="images/blog/blog_post_3.jpg"
                          alt="blog-post-3"
                        />
                        <div class="mask"></div>
                        <div class="post-date">
                          <span class="day">12</span
                          ><span class="month">Oct</span
                          ><!--<span class="year">2016</span>-->
                        </div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">Sport</a></li>
                      </ul>
                      <a href="blog-post-1.html"
                        ><h4 class="blog-item-title">
                          Designed for Everyone, Everywhere
                        </h4></a
                      >
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 3 -->

                <!-- Blog Post 4 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img
                          class="post-image img-responsive"
                          src="images/blog/blog_post_4.jpg"
                          alt="blog-post-4"
                        />
                        <div class="mask"></div>
                        <div class="post-date">
                          <span class="day">18</span
                          ><span class="month">Aug</span
                          ><!--<span class="year">2016</span>-->
                        </div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">CSS</a></li>
                      </ul>
                      <a href="blog-post-1.html"
                        ><h4 class="blog-item-title">
                          An Introduction To PostCSS
                        </h4></a
                      >
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 4 -->

                <!-- Blog Post 5 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img
                          class="post-image img-responsive"
                          src="images/blog/blog_post_5.jpg"
                          alt="blog-post-5"
                        />
                        <div class="mask"></div>
                        <div class="post-date">
                          <span class="day">2</span
                          ><span class="month">Jul</span
                          ><!--<span class="year">2016</span>-->
                        </div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">CSS3</a></li>
                      </ul>
                      <a href="blog-post-1.html"
                        ><h4 class="blog-item-title">
                          Original and Innovative Web Layouts
                        </h4></a
                      >
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 5 -->

                <!-- Blog Post 6 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img
                          class="post-image img-responsive"
                          src="images/blog/blog_post_6.jpg"
                          alt="blog-post-6"
                        />
                        <div class="mask"></div>
                        <div class="post-date">
                          <span class="day">8</span
                          ><span class="month">May</span
                          ><!--<span class="year">2016</span>-->
                        </div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">HTML5</a></li>
                      </ul>
                      <a href="blog-post-1.html"
                        ><h4 class="blog-item-title">
                          Creative and Innovative Navigation Designs
                        </h4></a
                      >
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 6 -->

                <!-- Blog Post 7 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img
                          class="post-image img-responsive"
                          src="images/blog/blog_post_7.jpg"
                          alt="blog-post-7"
                        />
                        <div class="mask"></div>
                        <div class="post-date">
                          <span class="day">7</span
                          ><span class="month">Apr</span
                          ><!--<span class="year">2016</span>-->
                        </div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">Design</a></li>
                      </ul>
                      <a href="blog-post-1.html"
                        ><h4 class="blog-item-title">
                          Navigation for Mega-Sites
                        </h4></a
                      >
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 7 -->

                <!-- Blog Post 8 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img
                          class="post-image img-responsive"
                          src="images/blog/blog_post_8.jpg"
                          alt="blog-post-8"
                        />
                        <div class="mask"></div>
                        <div class="post-date">
                          <span class="day">21</span
                          ><span class="month">Mar</span
                          ><!--<span class="year">2016</span>-->
                        </div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">CSS3</a></li>
                      </ul>
                      <a href="blog-post-1.html"
                        ><h4 class="blog-item-title">
                          Front-End Challenge Accepted: CSS 3D Cube
                        </h4></a
                      >
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 8 -->
              </div>
            </section>
            <!-- End Blog Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page pt-page-6" data-id="contact">
              <div class="section-title-block">
                <h2 class="section-title">Contact</h2>
                <h5 class="section-description">Get in Touch</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Get in Touch</h3>
                  </div>
                  <p>
                    Sed eleifend sed nibh nec fringilla. Donec eu cursus sem,
                    vitae tristique ante. Cras pretium rutrum egestas. Integer
                    ultrices libero sed justo vehicula, eget tincidunt tortor
                    tempus.
                  </p>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Los Angeles, USA</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-mail"></i>
                    </div>
                    <div class="ci-text">
                      <h5>alexsmith@example.com</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-call"></i>
                    </div>
                    <div class="ci-text">
                      <h5>+123 654 78900</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Freelance Available</h5>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Contact Form</h3>
                  </div>
                  <form
                    id="contact-form"
                    method="post"
                    action="contact_form/contact_form.php"
                  >
                    <div class="messages"></div>

                    <div class="controls">
                      <div class="form-group">
                        <input
                          id="form_name"
                          type="text"
                          name="name"
                          class="form-control"
                          placeholder="Full Name"
                          required="required"
                          data-error="Name is required."
                        />
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-user"></i>
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                        <input
                          id="form_email"
                          type="email"
                          name="email"
                          class="form-control"
                          placeholder="Email Address"
                          required="required"
                          data-error="Valid email is required."
                        />
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-envelope"></i>
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                        <textarea
                          id="form_message"
                          name="message"
                          class="form-control"
                          placeholder="Message for me"
                          rows="4"
                          required="required"
                          data-error="Please, leave me a message."
                        ></textarea>
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-comment"></i>
                        <div class="help-block with-errors"></div>
                      </div>

                      <div
                        class="g-recaptcha"
                        data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"
                        data-callback="correctCaptcha"
                      ></div>

                      <input
                        type="submit"
                        class="button btn-send"
                        value="Send message"
                      />
                    </div>
                  </form>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->
          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/page-transition.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
