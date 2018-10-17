    <section class="breadcrumb-section section-bg-clr5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h2>Events</h2>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">home</a></li>
                            <li>Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <section class="upcoming-section section-padding section-bg-clr">
        <div class="container">
			<?php if(isset($upcoming_event_list) && count($upcoming_event_list)>0){ ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading ">
                        <h2>Upcoming <span>Events</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
		
            <div class="row">
                <?php foreach($upcoming_event_list as $li){ ?>
                <div class="col-sm-6">
                    <!-- Upcoming List Start -->
                    <div class="upcoming-list upcoming-list1 upcoming-list2">
                        <div class="upcoming-thumb">
                            <img src="<?php echo base_url('assets/event/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                            <div class="upcoming-overlay">
                                <span></span>
                                <p><?php echo isset($li['date'])?$li['date']:''; ?></p>
                            </div>
                        </div>
                        <div class="upcoming-content">
                            
                            <div class="upcoming-text">
                                <h4><a href="#"><?php echo isset($li['title'])?$li['title']:''; ?></a></h4>
                               
                                <p><?php echo isset($li['description'])?$li['description']:''; ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Upcoming List End -->
                </div>
				<?php } ?>
                
            </div>  
			<?php } ?>
			<?php if(isset($previous_event_list) && count($previous_event_list)>0){ ?>
			 <div class="row">
                <div class="col-md-12">
                    <!-- Section Heading Start -->
                    <div class="section-heading ">
                        <h2>Previous <span>Events</span></h2>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/vendor/images/icon.png" alt="icon">
                        </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
			<div class="row">
			   <?php foreach($upcoming_event_list as $li){ ?>
                <div class="col-sm-6">
                    <!-- Upcoming List Start -->
                    <div class="upcoming-list upcoming-list1 upcoming-list2">
                        <div class="upcoming-thumb">
                            <img src="<?php echo base_url('assets/event/'.$li['image']); ?>" alt="<?php echo isset($li['org_image'])?$li['org_image']:''; ?>">
                            <div class="upcoming-overlay">
                                <span></span>
                                <p><?php echo isset($li['date'])?$li['date']:''; ?></p>
                            </div>
                        </div>
                        <div class="upcoming-content">
                            
                            <div class="upcoming-text">
                                <h4><a href="#"><?php echo isset($li['title'])?$li['title']:''; ?></a></h4>
                               
                                <p><?php echo isset($li['description'])?$li['description']:''; ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Upcoming List End -->
                </div>
               <?php } ?>
            </div>
			
			<?php } ?>
                 


        </div>
    </section>
