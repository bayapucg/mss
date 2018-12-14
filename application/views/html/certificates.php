    <section class="breadcrumb-section section-bg-clr5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h2>Certificates</h2>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">home</a></li>
                            <li>Certificates</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><section class="upcoming-section section-padding section-bg-clr">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading ">
                        <h2>Our <span>CERTIFICATES</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
			<?php foreach($certificates_list as $li){ ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Upcoming List Start -->
                    <div class="upcoming-list upcoming-list1 upcoming-list2">
                        <div class="upcoming-thumb">
                            <img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/certificates/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                            <div class="upcoming-overlay">
                                <span></span>
                                <p><?php echo date('M j h:i A',strtotime(htmlentities($li['create_at'])));?></p>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Upcoming List End -->
                </div>
            </div>
			<?php } ?>
			 
              


        </div>
    </section>

