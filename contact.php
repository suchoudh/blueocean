<?php 
include ('includes/top.inc.php');
include ('includes/header.inc.php');
?>
  <!-- ----------------------------------------------------------------- -->



        <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Contact</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-head">
                            <h3>Contact us</h3>
                            <p>Drop us a message with your query or requirements and we will get back to you as soon as possible.</p>
                            <div class="contact-icon">
								<div class="single-contact">
									<h5>Location :</h5>
									<a href="#"><i class="fa fa-map"></i><span>Shop no 63-64, Sahkari Parisar,, Near Piplani Petrol Pump,<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kalpana Nagar, Bhopal, Madhya Pradesh 462021</span></a><br/>
									<a href="#"><i class="fa fa-phone"></i><span>0755 - 492 8128, +91 - 9922951184</span></a>
									<a href="#"><i class="fa fa-envelope"></i><span>contact@blueoceantech.in</span></a>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- Start contact Area -->
        <div class="map-area">
            <div class="container-full">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-area">
                            <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=23.2495281,77.47621909999998&amp;q=Shop%20no%2063-64%2C%20Sahkari%20Parisar%2C%2C%20Near%20Piplani%20Petrol%20Pump%2C%20%20%20%20%20%20%20%20%20Kalpana%20Nagar%2C%20Bhopal%2C%20Madhya%20Pradesh%20462021+(Blue%20Ocean%20Tech%20Solutions%20Pvt.%20Ltd.)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google Maps iframe generator</a></iframe></div><br />
                        </div>
                        <!-- End Map -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Suscrive Area -->
		
		<!-- End Suscrive Area -->
 

        
  <!-- ----------------------------------------------------------------- -->
<?php 
include ('includes/footer.inc.php');
?>
       