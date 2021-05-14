<?php

if(isset($_SESSION['cart'])){
    $total_pro = count($_SESSION['cart']);
  }
  ?>
  
<style>
#ex4 .p1[data-count]:after{
    position: absolute;
    right: -12px;
    top: -6px;
    content: attr(data-count);
    font-size: 14px;
    border-radius: 50%;
    line-height: 1em;
    padding:3px;
    color: white;
    background: rgba(255,0,0,.85);
    text-align: center;
}
.fa-shopping-cart
{
    color:#ffffff;
}
</style>

<header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-6 col-sm-8">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@blueoceantech.in
</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +91 - 9922951184</a></li>
                                </ul>  
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4">
                            <div class="top-social">
								<ul>
									
									<li><a class="mysocial" href="https://www.youtube.com/channel/UCK8dQsMSgv8WTegfg3YbzrA"><i class="fa fa-youtube-play"></i></a></li>
									<li><a class="mysocial" href="http://www.twitter.com/BlueBhopal"><i class="fa fa-twitter"></i></a></li>
									<li><a class="mysocial" href="http://www.linkedin.com/in/blue-ocean"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="mysocial" href="https://www.facebook.com/BlueOceanTechSolutions/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li>  <a href="cart.php">
                                    <div id="ex4">
                                        <span class="p1 fa-stack has-badge" id="has-badge" data-count="<?php echo $total_pro??""; ?>">                
                                        <i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse" data-count="4b" style="font-size:24px;"></i>                                      
                                        </span>
                                        </div></a>
                                    </li>                                                              
								</ul>                     
                                
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                                    <img src="img/logo/logo.png" alt="">                               
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option start
                                <form action="#">
                                    <div class="search-option">
                                        <input type="text" placeholder="Search...">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                                </form>
                                search option end -->
                            </div>
                            <!-- mainmenu start -->
                             <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="pagess" href="index.php">Home</a></li>
											<li><a class="pagess" href="about.php">About us</a></li>
											<li><a href="services.php">Services</a></li>
											<li><a class="pagess" href="shop.php">shop</a>
												<!-- <ul class="sub-menu"> -->
													<!-- <li><a href="#">Projects</a></li>																						 -->
													<!-- <li><a href="project-2.html">Project 2 Column</a></li>
													<li><a href="project-3.html">Project 3 Column</a></li>
													<li><a href="single-project.html">Single Project</a></li> -->
												<!-- </ul> -->
											</li>
											<li><a class="pagess" href="blog.php">Blog</a>
												<!-- <ul class="sub-menu">
													<li><a href="blog.html">Blog grid</a></li>
													<li><a href="blog-sidebar.html">Blog Sidebar</a></li>
													<li><a href="blog-details.html">Blog Details</a></li>
												</ul> -->
											</li>
											<li><a href="contact.php">contacts</a></li>   
                                            <!-- <li><a href="admin/login.php"> Login <i class="fa fa-user"></i> </a></li>    -->
                                            <li><a href="https://blueoceantech.in/botech/mptfs.php">Quiz Score</a></li>                                            
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a class="pagess" href="index.php">Home</a></li>
										<li><a class="pagess" href="about.php">About us</a></li>
										<li><a href="services.html">Services</a></li>
										<li><a class="pagess" href="#">Projects</a>
											<ul class="sub-menu">
												<li><a href="#">Projects1</a></li>
                                                <li><a href="#">Projects2</a></li>
                                                <li><a href="#">Projects3</a></li>
												<li><a href="#">Projects4</a></li>
											</ul>
										</li>
										<li><a class="pagess" href="blog.php">Blog</a></li>
										<li><a href="contact.php">contacts</a></li>
                                        <li><a href="https://blueoceantech.in/botech/mptfs.php">Quiz Score</a></li> 
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->
 
        
