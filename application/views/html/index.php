    <section class="banner-section">
        <div class="slider-option">
            <div id="slider" class="carousel slide wow fadeInDown" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="slider-item">
                                <img src="<?php echo base_url(); ?>assets/vendor/images/background/1.jpg" alt="slider">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="slider-content">
                                            <h1>we can spread love <br> by <span>donate!</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="slider-btn">
                                                <a href="#" >donate now</a>
                                                <a href="#">learn more</a>
                                            </div>
                                            <!-- .slider-btn -->
                                        </div>
                                        <!-- .carousel-caption -->
                                    </div>
                                    <!-- .container -->
                                </div>
                            </div>
                        </div>
                        <!-- .items -->
                        <div class=" item ">
                            <div class="slider-item">
                                <img src="<?php echo base_url(); ?>assets/vendor/images/background/2.jpg" alt="slider">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="slider-content">
                                            <h1>we can spread love <br> by <span>donate!</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="slider-btn">
                                                <a href="#" >donate now</a>
                                                <a href="#">learn more</a>
                                            </div>
                                            <!-- .slider-btn -->
                                        </div>
                                        <!-- .carousel-caption -->
                                    </div>
                                    <!-- .container -->
                                </div>
                            </div>
                        </div>
                        <!-- .items -->
                        <!-- .items -->
                        <div class=" item ">
                            <div class="slider-item">
                                <img src="<?php echo base_url(); ?>assets/vendor/images/background/3.jpg" alt="slider">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="slider-content">
                                            <h1>we can spread love <br> by <span>donate!</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="slider-btn">
                                                <a href="#" >donate now</a>
                                                <a href="#">learn more</a>
                                            </div>
                                            <!-- .slider-btn -->
                                        </div>
                                        <!-- .carousel-caption -->
                                    </div>
                                    <!-- .container -->
                                </div>
                            </div>
                        </div>
                        <!-- .items -->
                    </div>
                    <!-- .carosoul-inner -->
                    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                    </a>
                    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <!-- .slider-option -->

    </section>
   

    <section class="who-section section-padding2 section-bg-clr">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <!-- Who Content Start -->
                    <div class="who-content">
                        <h2>who we <span>are</span></h2>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dfasdf dfsadf dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</P>
                      
                    </div>
                    <!-- Who Content End -->
                </div>
                <div class="col-md-7 col-sm-12">
                    <!-- Who List Start -->
                    <div class="who-list col-md-4">
                        <div class="who-thumb">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                        </div>
                        <div class="who-content">
                            <h4>donation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </p>
                           
                        </div>
                    </div>
                    <!-- Who List End -->
                    <!-- Who List Start -->
                    <div class="who-list col-md-4">
                        <div class="who-thumb">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="who-content">
                            <h4>volunteers</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </p>
                           
                        </div>
                    </div>
                    <!-- Who List End -->
                    <!-- Who List Start -->
                    <div class="who-list col-md-4">
                        <div class="who-thumb">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                        <div class="who-content">
                            <h4>fundraise</h4>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </p>
                           
                        </div>
                    </div>
                    <!-- Who List End -->
                </div>
            </div>
        </div>
    </section>

    <?php if(isset($event_list) && count($event_list)>0){ ?>
    <section class="causes-section section-padding section-bg-clr1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading section-heading1">
                        <h2>Our <span>Events</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  magna aliqua.
                        </p>
                        <a href="<?php echo base_url('events'); ?>">see all Events</a>
                    </div>
                    <!-- Section heading End -->
                </div>
            </div>
            <div class="row">
			<?php $cnt=1;foreach($event_list as $li){ ?>
			<?php if($cnt<=4){ ?>
                <div class="col-md-3 col-sm-6">
                    <!-- Causes List Start -->
                    <div class="causes-list">
                        <div class="causes-thumb">
                            <img src="<?php echo base_url('assets/event/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                        </div>
                        <div class="causes-content">
                            <div class="causes-text">
                                <h4><?php echo isset($li['title'])?$li['title']:''; ?></h4>
                                <p><?php echo isset($li['description'])?$li['description']:''; ?></p>
                                <a href="<?php echo base_url('donate'); ?>">donate now</a>
                            </div>
                        </div>
                     
                    </div>
                    <!-- Causes List End -->
                </div>
			<?php } ?>
				
			<?php $cnt++;} ?>
			
            </div>
        </div>
    </section>
	
	<?php } ?>



    <section class="counter-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- Counter List Start -->
                        <div class="counter-list">
                            <div class="counter-thumb"><i class="fa fa-bitbucket" aria-hidden="true"></i></div>
                            <div class="counter-content">
                                <h3 class=""><?php echo isset($upcoming_event_list)?count($upcoming_event_list):''; ?></h3>
                                <p>Up Comming Events</p>
                            </div>
                        </div>
                        <!-- Counter List End -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Counter List Start -->
                        <div class="counter-list">
                            <div class="counter-thumb"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <div class="counter-content">
                                <h3 class=""><?php echo isset($volunters_list)?count($volunters_list):''; ?></h3>
                                <p>volunteers</p>
                            </div>
                        </div>
                        <!-- Counter List End -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Counter List Start -->
                        <div class="counter-list">
                            <div class="counter-thumb"><i class="fa fa-calculator" aria-hidden="true"></i></div>
                            <div class="counter-content">
                                <h3 class=""><?php echo isset($event_list)?count($event_list):''; ?></h3>
                                <p>Events</p>
                            </div>
                        </div>
                        <!-- Counter List End -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Counter List Start -->
                        <div class="counter-list">
                            <div class="counter-thumb"><i class="fa fa-gift" aria-hidden="true"></i></div>
                            <div class="counter-content">
                                <h3 class=""><?php echo isset($certificates_list)?count($certificates_list):''; ?></h3>
                                <p>Certificates</p>
                            </div>
                        </div>
                        <!-- Counter List End -->
                    </div>
                </div>
            </div>
    </section>

    <!--==================================
    ===== Counter Section End ===========
    ===================================-->

    <!--==================================
    ===== Our Volunters Start ===========
    ===================================-->
<?php if(isset($volunters_list) && count($volunters_list)>0){ ?>
    <section class="volunters-section section-padding section-bg-clr1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading">
                        <h2>our <span>volunters</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <!-- Section heading End -->
                </div>
            </div>
            <div class="row">
			<?php foreach($volunters_list as $li){ ?>
                <div class="col-md-4 col-sm-6">
                    <!-- Volunter List Start -->
                    <div class="volunter-list">
                    <!-- Volunter Thumb Start -->
                        <div class="volunter-thumb">
                            <img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/volunteer/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                            
                        </div>
                        <!-- Volunter Thumb End -->
                        <!-- Volunter Content Start -->
                        <div class="volunter-content">
                            <h4><?php echo isset($li['name'])?$li['name']:''; ?></h4>
                            <p><?php echo isset($li['category'])?$li['category']:''; ?></p>
                        
                        </div>
                        <!-- Volunter COntent End -->
                    </div>
                    <!-- Volunter List End -->
                </div>
			<?php } ?>
                
            </div>
        </div>
    </section>
	
	<?php } ?>
   

    <section class="joining-section section-padding section-bg-clr2">
        <div class="container">
            <div class="row">
                <div class="col-md-6" >
                    <!-- Section Heading Start -->
                    <div class="section-heading section-heading2">
                        <h2>Become <span>volunters</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="join-button">
                            <a href="#">Join Now</a>
                        </div>
                        
                    </div>
                    <!-- Section heading End -->
                </div>
            </div>
        </div>
    </section>

    <!--==================================
    ===== Become Joining Section End ======
    ===================================-->

<?php if(isset($gallery_list) && count($gallery_list)>0){ ?>
    <section id="portfolio" class="gallery section-padding section-background">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading">
                        <h2>Our <span>Gallery</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <!-- Section heading End -->
                </div>
            </div>
              <div class="row">
                      <div class=" col-md-12">
                         
                          <div id="galleryitems">
						  <?php $cnt=1;foreach($gallery_list as $li){ ?>
						  <?php if($cnt<=9){ ?>
                              <div class="chartiy single-item">
                                  <div class="single-isotope">
                                      <div class="layer">
                                      </div>
                                      <div class="isotope-social">
                                          <a href="<?php echo base_url('assets/gallery/'.$li['image']); ?>" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                          <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                      </div>
                                      <img src="<?php echo base_url('assets/gallery/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                                  </div>
                              </div>
						  <?php } ?>
                              
						<?php $cnt++;} ?>
                              
                              
                          </div>
                      </div>
              </div>
              <div class="all-image">
                  <a href="<?php echo base_url('gallery'); ?>">load more image</a>
              </div>
          </div>
    </section>

<?php } ?>




    <!--==================================
    ===== Become volunter Section Start ======
    ===================================-->
<?php if(isset($about_talk) && count($about_talk)>0){ ?>
    <section class="clients-section section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading">
                        <h2>Who talk <span>about us</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <!-- Section heading End -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- volunter List Start -->
                    <div class="become-list">
                        <!-- Swiper -->
                        <div class="swiper-container volunter-container">
                            <div class="swiper-wrapper">
							<?php foreach($about_talk as $li){ ?>
                              <div class="swiper-slide">
                                <!-- volunter Item Start -->
                                  <div class="become-item">
                                    <div class="become-item1">
                                        <div class="become-thumb">
                                                <img src="<?php echo base_url('assets/talkaboutus/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                                          </div>
                                      <div class="become-content">
                                          <ul>
                                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                                          </ul>
                                          <p><?php echo isset($li['description'])?$li['description']:''; ?></p>
                                          <h4><?php echo isset($li['name'])?$li['name']:''; ?></h4>
                                          <p><?php echo isset($li['category'])?$li['category']:''; ?></p>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- volunter Item End -->
                              </div>
							<?php } ?>
                            
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination">
                                
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <!-- volunter List End -->
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!--==================================
    ===== Become Volunter Section End ===========
    ===================================-->


    <!--==================================
    ===== Upcoming Section Start ===========
    ===================================-->
    <?php if(isset($upcoming_event_list) && count($upcoming_event_list)>0){ ?>
    <section class="upcoming-section section-padding section-bg-clr1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading section-heading1">
                        <h2>Upcoming <span>Events</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="<?php echo base_url('events'); ?>">see all events</a>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                   <!-- Swiper -->
                        <div class="swiper-container upcoming-container">
                            <div class="swiper-wrapper">
							<?php $cnt=1;foreach($upcoming_event_list as $li){ ?>
							<?php if($cnt<=2){ ?>
                              <div class="swiper-slide">
                                <!-- Upcoming List Start -->
                                <div class="upcoming-list">
                                    <div class="upcoming-thumb">
                                        <img src="<?php echo base_url('assets/event/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                                    </div>
                                        <div class="upcoming-text">
                                            <h4><a href="javascript:void(0);"><?php echo isset($li['title'])?$li['title']:''; ?></a></h4>
                                            <p><?php echo isset($li['description'])?substr($li['description'], 0, 20):''; ?></p>
                                            <div class="upcoming-comment">
                                                <ul>
                                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i><span><?php echo isset($li['date'])?$li['date']:''; ?></span></li>
                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo isset($li['address'])?$li['address']:''; ?></span></li>
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="upcoming-date">
										<?php $ddd=explode("/",$li['date']); ?>
                                            <p><?php echo isset($ddd[0])?$ddd[0]:''; ?></p>
                                            <span><?php echo isset($ddd[1])?$ddd[1]:''; ?></span>
                                            <a href="#">joined event</a>
                                        </div>
                                </div>
                                <!-- Upcoming List End -->
                              </div>
							<?php } ?>
							<?php $cnt++;} ?>
                             
                            </div>
                            
                        </div>
                </div>
                 

            </div>
        </div>
    </section>
	
	<?php } ?>

    <!--==================================
    ===== Upcoming Section End ===========
    ===================================-->

    <!--==================================
    ===== Blog Section Start ===========
    ===================================-->
    <?php if(isset($blogs_list) && count($blogs_list)>0){ ?>
    <section class="blog-section section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading">
                        <h2>our <span>latest blogs</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  magna aliqua.
                        </p>
                    </div>
                    <!-- Section heading End -->
                </div>
            </div>
            <div class="row">
			
			<?php foreach($blogs_list as $li){ ?>
                <div class="col-sm-6">
                    <!-- Blog List Start -->
                    <div class="blog-list">
                        <div class="blog-thumb">
                            <img src="<?php echo base_url('assets/blogs/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                            <div class="blog-overlay">
                            </div>
                            <div class="blog-overlay-icon">
                                <a href="<?php echo base_url('assets/blogs/'.$li['image']); ?>" data-rel="lightcase"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <div class="blog-date1">
								<?php $ddd=explode("/",$li['date']); ?>
                                    <p><?php echo isset($ddd[0])?$ddd[0]:''; ?></p>
                                    <p><?php echo isset($ddd[1])?$ddd[1]:''; ?></p>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog-single.html"><?php echo isset($li['title'])?$li['title']:''; ?></a></h3>
                                <p><?php echo isset($li['description'])?$li['description']:''; ?></p>
                               
                            </div>
                            <div class="blog-comment">
                                <ul>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <span> - by <?php echo isset($li['name'])?$li['name']:''; ?></span>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Blog List End -->
                </div>
				
			<?php } ?>
                
            </div>
        </div>
    </section>
     <!--==================================
    ===== Blog Section End ===========
    ===================================-->
<?php } ?>
