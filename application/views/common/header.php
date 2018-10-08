    <!-- start Header Area -->
    <header id="header" class="header-scrolled">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">LOGO
               <!-- <div id="logo">
                    <a href="#"><img src="<?php echo base_url();?>img/MARINE CV.png" alt="" title="" /></a>
                </div>-->
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
						<li><a href="<?php echo base_url("setting");?>">Setting</a></li>
						<li><a href="<?php echo base_url("logout");?>">Logout</a></li>
						<?php
						}else{
						?>
						<li><a href="<?php echo base_url("register");?>">Register</a></li>
						<li><a href="<?php echo base_url("login");?>">Login</a></li>
						<?php
						}
						?>
                        <?php
                        if(isset($this->session->userdata['logged_in']['user_id'])){
                            $ci =&get_instance();
                            $ci->load->model('cv_preview_m');
                            $get_user_info = $ci->cv_preview_m->fetch_row_header($this->session->userdata['logged_in']['user_id']);
                            if(count($get_user_info) == '0'){
                        ?>
                        <li><a class="signup-btn signupBTN" href="<?php echo base_url("create_resume_step1");?>">My Resume</a></li>
                        <?php
                            }else{
                        ?>
                        <li><a class="signup-btn signupBTN" href="<?php echo base_url("create_resume_step1");?>">Create My Resume</a></li>
                        <?php
                            }
                        }
                        ?>
                       </ul>
                    </nav>

                  </div>
                <!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- End Header Area -->