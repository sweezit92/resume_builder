<!-- start footer Area -->
    <footer class="footer-area pt-40 pb-40" style="background: #662d91;">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h4>Popular Tools</h4>
                        <ul class="menu-list">

                            <li><a target="_blank" href="/resume-writing/free-resume-samples">Resume Samples</a></li>
                            <li><a target="_blank" href="/coverletter/free-cover-letter-samples">Cover Letter Samples</a></li>

                            <li><a target="_blank" href="/coverletter/free-cover-letter-builder-online">Cover Letter Builder</a></li>
                            
                            <li><a target="_blank" href="/interviews/different-type-of-resume-formats">Resume Formats</a></li>
                            <li><a target="_blank" href="/interviews/different-type-of-resume-formats">Cover Letter Formats</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h4>Most Viewed</h4>
                        <ul class="menu-list">

                            <li><a target="_blank" href="/blog/what-is-difference-between-resume-cv/">What is the difference between Resume and CV?</a></li>
                            <li><a target="_blank" href="/interviews/things-to-say-in-a-job-interview">Things to say in job interview</a></li>
                            <li><a target="_blank" href="/interviews/24-things-you-should-never-say-during-a-job-interview">Things to never say in job interview</a></li>
                            
                            <li><a target="_blank" href="/blog/what-recruiter-looks-in-resume/">What recruiter looks for in a Resume?</a></li>
                            <li><a target="_blank" href="/blog/what-not-to-include-in-your-resume/">What Not To Include In Your Resume?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h4>About Us</h4>
                        <ul class="menu-list">
                            <li><a target="_blank" href="/about-us">About CV Owl</a></li>
                            <li><a target="_blank" href="/resume-writing-success-stories">Testimonials</a></li>
                            <li><a target="_blank" href="/faq">FAQ</a></li>
                            <li><a target="_blank" href="/partner-program">Partner Program</a></li>
                            <li><a target="_blank" href="/contact">Contact Us</a></li>
                        </ul>
                        <ul class="social-icons">
                            <li><a target="_blank" href="https://www.facebook.com/yourcvowl"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/cv_owl"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/cvowl"><i class="fab fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://plus.google.com/u/4/117564200247606950824"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="footer-bottom row justify-content-center mt-50">
                <p class="footer-text m-0 col-lg-6 col-md-12">Copyright &copy; 2018 All rights reserved to <a target="_blank" href="http://www.clickrstop.com/">Clickrstop</a></p>
            </div>
        </div>

        <style type="text/css">

            .login-form .forgotpassword, .login-form .login-text{
                text-align: right;
                font-size: 12px;
                color: #8c8c8c;
                cursor: pointer;
            }

            .login-form input{
                border-radius: 0px;
                width: 100%;
                border-color: #bed2f0;
                padding: 0.675rem 0.75rem;
                font-size: 14px;
            }

            .login-form #loginHelp{
                text-align: center;
                font-size: 12px;
                color: brown;
                cursor: pointer;
                margin-bottom: -10px;
                margin-top: 10px;
            }

            .modal-content{
                border-radius: 0px;
            }
        </style>

        <!-- Modal -->
        <div id="LoginModal" class="modal fade" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="display: block;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login to continue</h4>
                    </div>
                    <div class="modal-body" style="margin-bottom:10px;">
                        <div class="login-form">
                            <center>
                                <h4 class="errorLog" id="loginHelp"></h4>
                            </center>

                            <form id="loginForm">


                                <input type="text" class="common-input mb-20 form-control" id="loginEmail" name="loginEmail" placeholder="Email" autocomplete="off">
                                
                                <input type="password" class="common-input mb-20 form-control" id="loginPassword" name="loginPassword"  placeholder="Password" autocomplete="off">

                                <h4 style="text-align: right;"><span class="forgotpassword">Forgot Password?</span></h4>
                                <button type="submit" class="btn btn-login genric-btn2" id="login_submit">
                                    <b>Log in</b>
                                </button>

                                <h4 onclick="toggleSignup()" style="text-align: center; margin-top: 24px; font-size: 12px; color: #8c8c8c; cursor: pointer;"><span class="forgotpassword">Don't have an account? <a style="font-weight: 500;">Sign Up here</a></span></h4>
                            </form>

                            <form id="forgotPassForm" style="display:none">

                                <input type="text" class="form-control" id="forgotloginEmail" name="forgotloginEmail" placeholder="Email" autocomplete="off">

                                <h4 style="text-align: right;"><span class="login-text">Login?</span></h4>

                                <button type="submit" class="btn btn-login genric-btn2" id="forgotpassbtn"><strong>Reset Password</strong>
                                </button>
                            </form>

                            <form id="signupForm" style="display: none;">

                                <input type="hidden" name="action" value="signup">
                                

                                <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off">
                                
                                <h4 style="text-align: right;"><span class="login-text">Back to log in ?</span></h4>
                                <button type="submit" class="btn btn-login genric-btn2">
                                    <b>Sign Up</b>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer" style="background: none;text-align: center;display: block;">

                        <div class="footer-area" style="background: none;">
                        <div class="single-footer-widget">
                            <ul class="social-icons" style="font-size: 20px;">  

                                <li>
                                    <a target="_blank" href="https://www.cvowl.com/login/facebook">
                                        <i class="fab fa-facebook" style="color:#3B5998;"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="https://www.cvowl.com/login/google">
                                        <i class="fab fa-google" style="color:#DB4437;"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="https://www.cvowl.com/login/linkedin">
                                        <i class="fab fa-linkedin" style="color:#0077B5;"></i>
                                    </a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>
    <!-- End footer Area -->