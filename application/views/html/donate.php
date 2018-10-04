<?php include("header.php"); ?>
<section class="breadcrumb-section section-bg-clr5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h2>Donation</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Donation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================
    ===== Breadcrumb Section End ===========
    ===================================-->

    <!--==================================
    ===== Donation Section Start ===========
    ===================================-->

    <section class="donation-section section-padding section-bg-clr1">
        <div class="container">
             <div class="row">
                <div class="col-md-12 ">
                    <!-- Section Heading Start -->
                    <div class="section-heading section-heading-donation ">
                        <h2 class="">sum of <span> money </span> you wish to <span> donate</span></h2>
                        
                    </div>
                    <!-- Section heading End -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="donate-form">
                        <div class="donate-payment-list">
                            <ul  role="tablist">
                                   <li class="active"><a  href="#bank"   data-toggle="tab" aria-expanded="false"><i class="fa fa-university" aria-hidden="true"></i> <span>bank transfer</span></a></li>

                                <li ><a href="#card"   data-toggle="tab" aria-expanded="false"><i class="fa fa-credit-card" aria-hidden="true"></i> <span>Online</span></a></li>

                             
                               
                            </ul>
                        </div>
                        <div class="donation-list tab-content">
                            
                            
                            <div class="donation-bank-transfer tab-pane active " role="tabpanel"  id="bank">
                                <div class="donation-bank">
                                    <ul>
                                        <li>
                                            <p>Bank Account Holder Name -</p>
                                            <span>Mithra Seva Samithi</span>
                                        </li>
                                        <li>
                                            <p>Your bank account Number -</p>
                                            <span>37920408567</span>
                                        </li>
                                        <li>
                                            <p>Bank City -</p>
                                            <span>Padmarao Nagar,Secunderabad</span>
                                        </li>
                                        <li>
                                            <p>Bank Full Name -</p>
                                            <span>State Bank of India</span>
                                        </li>
										<li>
                                            <p>IFSC  -</p>
                                            <span>SBIN0002772</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
							<div class="donation-credit-card tab-pane  " role="tabpanel"  id="card">
                                <form action="<?php echo base_url('payment/post'); ?>" method="post">
                                    <div class="donation-amount">
                                        <fieldset>
                                            <legend>Donation Information</legend>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="examplefname">Amount</label>
                                                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" required>
                                                    </div>
                                                </div>
												<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="examplefname">Name</label>
                                                        <input type="text" class="form-control" id="cust_name" name="cust_name" placeholder="Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="examplelname">Mobile  Number</label>
                                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleemail">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                    </div>
                                                </div>
												<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleemail">Address</label>
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                                                    </div>
                                                </div>
												<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleemail">Description</label>
                                                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>
                                        </fieldset>
                                    </div>
                                    
                                    <div class="donation-submit">
                                        <input type="submit" name="submit" value="donate now">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("footer.php"); ?>