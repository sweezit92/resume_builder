
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="img/fav.jpg"> -->
    
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder - Home</title>

<?php
$this->load->view("common/metalinks");
?>
</head>

<style type="text/css">
    
    .version2 a.header-link{
        color: black !important; 
        cursor: pointer !important;
    }

    #mobile-nav .header-link{
        color: white !important; 
        cursor: pointer !important;
        text-align: left;
    }


    .blog-post{
        color: #212121;
    }

    .blog-heading{
        font-size: 34px;
        line-height: 50px;
        color: white !important;
        text-decoration: capitalise;
    }
    

    @media (max-width: 768px) {
        .onlymobile {
            display: none;
        }
    }

</style>


<body class="version2">

<?php
$this->load->view("common/header");
?>

    <style type="text/css">
    
    @media (max-width: 768px) {
        .hero-img2 {
            margin-top: 0px !important;
            display: none;
        }
    }

</style>

<!-- Start hero-section -->
<section class="hero-section relative">
    <div class="container">
        <div class="row fullscreen align-items-center relative">
            <div class="col-lg-6 col-md-6">
                <h1 style="font-size: 40px;">Create Recruiter Preferred <br>Resume in 15 Minutes
                </h1>
                <p class="pt-20 pb-20 mw-510" style="font-size: 16px;">
                    Create, edit and share your professional resume and cover letter in minutes using our free resume builder. Get expert advice &amp; tips for Resume Writing for free. 
                </p>
                <div class="d-flex flex-row newsletter-form" id="mc_embed_signup">
                    <form class="navbar-form" action="" method="get" id="heroSignup">
                        <div class="d-flex form-wrap">
                            <input type="hidden" name="action" value="signup">
                            <input class="form-control" name="email" placeholder="Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required="" type="email" style="min-width: 200px;">
                            <button class="genric-btn2" style="width: 100%;">START NOW</button>
                        </div>
                        <div class="info mt-20"></div>
                    </form>
                </div>
                <div class="footer-area" style="background: none;">
                    <div class="single-footer-widget">
                        <ul class="social-icons" style="font-size: 20px;">  

                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook" style="color:#3B5998;"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-google" style="color:#DB4437;"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin" style="color:#0077B5;"></i>
                                </a>
                            </li>
                        </ul> 
                    </div>
                </div>
                <div class="mt-20" style="color: grey;font-size: 12px;">Free Signup. No Credit Card Required</div>
            </div>
            <div class="col-lg-6 col-md-6 text-center">
                <img class="img-fluid hero-img2 mt-100" style="width: 90%;" src="<?php echo base_url();?>img/hero-img2.png" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End hero-section -->

<!-- <script type="text/javascript">

    $.post('https://geoip-db.com/json/', {}, function(data){
        var obj = $.parseJSON(data);
        var str = '';
        if(obj){

            if(obj.city){
                str = 'IN '+ obj.city.toUpperCase();
            }else if(obj.country_name){
                str = 'IN '+ obj.country_name.toUpperCase();
            }
        }

        $('#city').html(str);
    });
</script> -->
<!-- Start unique-feature Area -->
<section class="unique-feature-area section-gap">
    <div class="container">
        <div class="row justify-content-center section-title-wrap">
            <div class="col-lg-12">
                <h2>Free CV Maker and Professional Resume Writing Services</h2>
                <p style="max-width: 100%">
                    Resumes or CV's created using Resume Builder powerful free CV Maker helps you stand out in the job market as the <a href="#">professional resume templates</a> offered here are well researched. We have thousands of pre-defined content templates that suits your Industry & Job Skills. Moreover, get your resume developed by professional resume writers to showcase your skills, experience and achievements. Your Resume is formatted and designed as per latest industry specific layout and keywords. Avail online resume writing services for experienced professionals and job seekers. Get expert advice & tips for Resume Writing at Resume Builder. We have thousands of pre-defined content templates that suits your Industry & Job Skills
                </p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="feature-list d-flex flex-row">
                    <div class="icon">
                        <img class="img-fluid" src="<?php echo base_url();?>img/builder.png" alt="">
                    </div>
                    <div class="desc ml-40">
                        <a>
                            <h4 class="mb-20">Mobile Compatible CV Maker</h4>
                        </a>
                        <p>
                            Resume Builder online CV Maker enables you to easily access and create your resume on mobile while you are travelling. View or edit your resume content for the specific job opportunity, and then send your resume instantly to the prospective employer!
                        </p>
                    </div>
                </div>
                <div class="feature-list d-flex flex-row">
                    <div class="icon">
                        <img class="img-fluid" src="<?php echo base_url();?>img/skill.png" alt="">
                    </div>
                    <div class="desc ml-40">
                        <a>
                            <h4 class="mb-20">Fully Customizable CV Maker</h4>
                        </a>
                        <p>
                            Our customizable resume templates available in A4 and US Letter formats and easy-to-use design interface will help you customize your resume template depending upon the unique requirements.
                        </p>
                    </div>
                </div>
                <div class="feature-list d-flex flex-row">
                    <div class="icon">
                        <img class="img-fluid" src="<?php echo base_url();?>img/step.png" alt="">
                    </div>
                    <div class="desc ml-40">
                        <a>
                            <h4 class="mb-20">Edit, Download, Share Your Resume</h4>
                        </a>
                        <p>
                            Create attention-grabbing resume with Resume Builder online CV Maker where you can edit, format, download, print and share your resume from one place- It is really that simple to build your resume and share it with your potential employers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="_active-feature-carusel">
                    <img class="img-fluid" src="<?php echo base_url();?>img/mobile.png" alt="">
                </div>
            </div>
        </div>
        <!--<div class="row align-items-center">
            <div class="col-lg-6">
                <div class="_active-feature-carusel">
                    <img class="img-fluid" src="img/c5.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-list d-flex flex-row">
                    <div class="icon">
                        <img class="img-fluid" src="img/builder.png" alt="">
                    </div>
                    <div class="desc ml-40">
                        <a href="#">
                            <h4 class="mb-20">Totally FREE CV Maker</h4>
                        </a>
                        <p>
                            CV OWL is the best free CV Maker online. Not only is it free, but it’s easy to sign up. Moreover, once you have posted a resume to our site, you can access it from anywhere! 
                        </p>
                    </div>
                </div>
                <div class="feature-list d-flex flex-row">
                    <div class="icon">
                        <img class="img-fluid" src="img/skill.png" alt="">
                    </div>
                    <div class="desc ml-40">
                        <a href="#">
                            <h4 class="mb-20">Real-time Resume Preview</h4>
                        </a>
                        <p>
                            Leverage our free powerful resume maker that empowers you to get a real-time view of your resume enabling you to make on-spot changes to your resume as per the job profile requirements. Check out on <a href="#" target="_blank">youtube</a>
                        </p>
                    </div>
                </div>
                <div class="feature-list d-flex flex-row">
                    <div class="icon">
                        <img class="img-fluid" src="img/step.png" alt="">
                    </div>
                    <div class="desc ml-40">
                        <a href="#">
                            <h4 class="mb-20">Resume Skills Suggestor</h4>
                        </a>
                        <p>
                            Our Free CV Maker interface has an inbuilt skill suggestor which automatically suggests skills based on your experience, job role and designation thus, eliminating the hustle of creating a perfect skill set.
                        </p>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</section>
<!-- End unique-feature Area --><style type="text/css">
    
    @media (max-width: 700px) {
        .execution-video {
            width: 100% !important;
        }
    }

    .desc{
        text-align: justify;
    }

</style>

<!-- Start execution-secation -->
<section class="execution-secation section-gap aquablue-bg">
    <div class="container">
        <div class="row justify-content-center section-title-wrap">
            <div class="col-lg-12">
                <h2>Advanced CV Maker - Create Your Professional Resume online for free</h2>
                <p style="max-width: 100%">
                    Choose from multiple custom-built <a href="#" target="_blank">professional resume templates</a> that have helped thousands of people to get the jobs they ever dreamt of. Resume Builder CV Maker makes it fast and easy to create the powerful, professional <a target="_blank" href="#">resume</a> HR managers are looking for. Use Resume Builder professional resume templates and resume samples to improve your chances of getting called for a job interview as these resume templates and resume samples have been approved by recruiters and employers.
                </p>
            </div>
        </div>
        <!-- <div class="row justify-content-center pb-80">
            <div class="col-lg-8">
                <div class="active-execution-c_arusel">
                    <iframe class="execution-video" width="699px" height="393px" 
                        src="https://www.youtube.com/embed/lc9P_HXGS28?autoplay=0&rel=0" 
                        frameborder="0" allow="autoplay; encrypted-media" 
                        allowfullscreen>
                        
                    </iframe>
                    
                    
                </div>
            </div>
        </div> -->
        <div class="row ex-porcess-wrap">
            <div class="col-lg-4">
                <div class="single-ex-process d-flex flex-row">
                    <div class="icon">
                        <img src="<?php echo base_url();?>img/s5.png" alt="">
                    </div>
                    <div class="desc ml-20">
                        <h4>Pre-Written Resume Content</h4>
                        <p class="mt-20 mb-0">
                            Use dozens of industry-endorsed professional resume templates that come ready with thousands of perfectly written bullet points for you to choose from, covering all industries. Just point and click.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-ex-process d-flex flex-row">
                    <div class="icon">
                        <img src="<?php echo base_url();?>img/s3.png" alt="">
                    </div>
                    <div class="desc ml-20">
                        <h4>Step-by-Step CV Making Help</h4>
                        <p class="mt-20 mb-0">
                            Build your resume online with super simple interface that provides easy to use 'step by step' detailed <a href="#" target="_blank">guided walkthrough</a> to build a stand-out resume section by section with professional tips and advice.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-ex-process d-flex flex-row">
                    <div class="icon">
                        <img src="<?php echo base_url();?>img/s2.png" alt="">
                    </div>
                    <div class="desc ml-20">
                        <h4>Get CV by Experts</h4>
                        <p class="mt-20 mb-0">
                            Use our "Ask an Expert" service, featuring a real time 1-on-1 Certified Professional Resume review by Resume Builder Resume Experts. Our online Certified Resume Expert will review your resume for accuracy and clarity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End execution-secation -->
<!-- Start unique-feature Area -->
<section class="unique-feature-area section-gap">
    <div class="container">
        <div class="row justify-content-center section-title-wrap" style="text-align: left;">
            <div class="col-lg-6" style="text-align: justify;">
                <h2>Why Use Resume Builder Online CV Maker</h2>
                <p>
                    Do you aspire to land your dream job with the perfect resume employers are looking for?
                    <br><br>
                    Resume Builder Free Resume Builder now makes it easy and fun for you to build professional out-of-the-box resumes, instantly generated by the most advanced resume builder technology available. 
                    <br><br>Simply fill in your details and generate beautiful Ms Word and PDF resumes! Choose from several custom resume templates to build your perfect resume.
                    <br><br>
                    So what are you waiting for? Start using the most advanced online CV Maker now and Get a brand new Professional Resume for your next job.
                </p>
            </div>

            <div class="col-lg-6 mt-40 onlymobile" style="text-align: center;">
                <img src="<?php echo base_url();?>img/F6.jpg" width="80%">
            </div>


        </div>
    </div>
</section>
<!-- End unique-feature Area -->
<!-- Start cta-section -->
<section class="cta-section section-gap gradient-bg2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="text-white">AVAIL RESUME WRITING SERVICES BY RESUME BUILDER RESUME WRITING EXPERTS!</h2>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-row justify-content-end cta-btn">
                    <a class="ct-btn active" id="submitResumeBTN" style="font-size: 20px;text-align: center;cursor: pointer;">UPLOAD RESUME TO AVAIL FREE CV REVIEW</a>
                    <!-- <a href="#" class="ct-btn active signupBTN">Signup</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End cta-section -->
<!-- Start about section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 about-left">
                <h2>
                Resume Builder - Free CV Maker & Resume writing services <br>
                </h2>
                <p class="pt-20 pb-20 " style="text-align: justify;">
                    Building a professional resume is the first important step towards getting a good job. Resume Builder free resume builder enables you achieve this goal faster.<br><br>
                    Check out our professional resume examples, resume samples, and resume templates will help you build the perfect resume for your next interview - that too in 5 minutes.<br><br>
                    Furthermore, Resume Builder in-house team of resume writing experts with 15+ years of experience will craft a highly professional, relevant and recruiter friendly resume format. <br><br>
                    Our resume writing experts will hold telephonic discussion with you personally to grasp your career goals and past achievements. There will be multiple iterations until you get a perfect resume that does justice to your career aspirations. 
                </p>
                <a href="#" class="genric-btn2 signupBTN" style="font-size: 24px;">FREE CV MAKER</a>
            </div>
            <div class="col-lg-6 text-center">
                <img class="img-fluid" src="<?php echo base_url();?>img/about-img.png" alt="" width="85%">
            </div>
        </div>
    </div>
</section>
<!-- End about section -->

<?php
$this->load->view("common/footer");
?>
</body>

</html>