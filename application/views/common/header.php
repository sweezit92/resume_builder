    <!-- start Header Area -->
    <header id="header" class="header-scrolled">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">LOGO
                <!-- <div id="logo">
                    <a href="#"><img src="img/logo.svg" alt="" title="" /></a>
                </div> -->
                <div class="nav-wrap d-flex flex-row align-items-center">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu ">
 						<li><a href="<?php echo base_url("home");?>">Home</a></li>
						<li><a href="<?php echo base_url("testimonial");?>">Testimonials</a></li>						
						<li><a href="<?php echo base_url("overview");?>">The overview</a></li>
						<li><a href="<?php echo base_url("contact");?>">Contact</a></li>
						<?php
						if(isset($this->session->userdata['logged_in']['user_id'])){
						?>
						<li><a href="<?php echo base_url("logout");?>">Logout</a></li>
						<?php
						}else{
						?>
						<li><a href="<?php echo base_url("register");?>">Register</a></li>
						<li><a href="<?php echo base_url("login");?>">Login</a></li>
						<?php
						}
						?>
                       </ul>
                    </nav>
						<a class="signup-btn signupBTN" href="<?php echo base_url("create_resume_step1");?>">Create Resume</a>
                  </div>
                <!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- End Header Area -->