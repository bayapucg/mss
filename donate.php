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

                                <li ><a href="#card"   data-toggle="tab" aria-expanded="false"><i class="fa fa-credit-card" aria-hidden="true"></i> <span>credit card</span></a></li>

                             
                               
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
                                <form action="#">
                                    <div class="donation-amount">
                                        <fieldset>
                                            <legend>Donation Information</legend>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="examplefname">First Name</label>
                                                        <input type="text" class="form-control" id="examplefname" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="examplelname">Last Name</label>
                                                        <input type="text" class="form-control" id="examplelname" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleemail">Email</label>
                                                        <input type="email" class="form-control" id="exampleemail" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="examplepassword">Password</label>
                                                        <input type="password" class="form-control" id="examplepassword" placeholder="Password">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="donation-for">
                                        <fieldset>
                                            <legend>Credit Card Information</legend>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="examplecardnumber">Card Number</label>
                                                        <input type="text" class="form-control" id="examplecardnumber" placeholder="Card Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="examplecvc">CVC</label>
                                                        <input type="text" class="form-control" id="examplecvc" placeholder="CVC">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="examplemm">Expiration Month(MM)</label>
                                                        <input type="text" class="form-control" id="examplemm" placeholder="MM">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleyear">Expiration Year(YYYY)</label>
                                                        <input type="text" class="form-control" id="exampleyear" placeholder="YYYY">
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