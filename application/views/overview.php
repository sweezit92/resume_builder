
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder - The Overview</title>

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

<!-- Start hero-section -->
<section class="hero-section-blog-details">
    <div style="background: url('<?php echo base_url();?>img/Great-Cover-Letter-Banner.jpg');">
        <div class="text-center" style="margin:40px;">
            <div class="col-md-12 pt-100 pb-80">
               <a class="blog-heading">THE OVERVIEW</a>
            </div>
        </div>
    </div>
</section>
<!-- End hero-section -->
    <!-- Start hero-section -->


<section class="feature-section pb-60 pt-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="row text-left">
                <div class="col-lg-6">
                    <div class="d-flex flex-row" style="max-width:90%;float:right;">
                        <div class="desc mt-20">
                            <div class="icon">
                                <img class="img-fluid" src="<?php echo base_url();?>img/builder.png" alt="">
                            </div>
                            <div href="#" class="mt-20">
                                <h2 class="mb-20">CV's Starting At $47!</h2>
                            </div>
                            <p class="text-justify">
                                We provide the most successful yacht CV layout and content strategies in the industry.Choose the template you like and start setting up immediately using all our Yacht CV Resources including:CV Strategies by position, 25+ sample Job Bullet Points by position, Land-Based Job Description Strategies, Skill Set lists, and Sample Profiles.Library of several short video tips on setting up your CV.
                            </p>

                            <a href="#" class="genric-btn mt-20">Create Resume</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="_active-feature-carusel" style="text-align: center;margin-top:50px;">
                        <img class="img-fluid" src="<?php echo base_url();?>img/cv.jpg" alt="" width="70%" style="height:500px;margin-top:-100px;">
                    </div>
                </div>
            </div>

        </div>
    </div>    
</section>
<style type="text/css">
    
    .stat-section .icon{
        text-align: center;
    }
</style>

<!-- Start stat-section -->
<section class="stat-section section-gap" style="margin-top:-50px;">
    <div class="container">
        <div class="row justify-content-center section-title-wrap">
            <div class="col-lg-12">
                <h1>HOW IT WORKS</h1>
                <p>
                    Our professional resume writing service has helped over 2,00,000 professionals get shortlisted for many more interviews and get hired faster.
                    We've made it very easy for you to avail our professional resume writing services.CV owl's resume writing experts will work with you to deliver the perfect resume format for you. Here is the quick process of how it goes: 

                </p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon">
                            <img class="img-fluid" src="<?php echo base_url();?>img/1_blue.png" alt="">
                        </div>
                        <div class="single-stat d-flex flex-row">
                            <div class="icon mr-20">
                                <img src="img/s1.png" alt="">
                            </div>
                            <div class="desc">
                                <a href="#">
                                    <h4 class="pb-10">All you need is a computer or tablet with Microsoft Word or Apple Mac Pages on it and a basic understanding of how to use those programs.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="icon">
                            <img class="img-fluid" src="<?php echo base_url();?>img/2_blue.png" alt="">
                        </div>
                        <div class="single-stat d-flex flex-row">
                            <div class="icon mr-20">
                                <img src="img/s2.png" alt="">
                            </div>
                            <div class="desc">
                                <a href="#">
                                    <h4 class="pb-10">Purchase the CV template layout you like for your position. Then download your CV and all your CV Tool Kit info.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="icon">
                            <img class="img-fluid" src="<?php echo base_url();?>img/3_blue.png" alt="">
                        </div>
                        <div class="single-stat d-flex flex-row">
                            <div class="icon mr-20">
                                <img src="<?php echo base_url();?>img/s3.png" alt="">
                            </div>
                            <div class="desc">
                                <a href="#">
                                    <h4 class="pb-10">Open your up your new Yacht CV template on your computer or tablet and using our resources and video tips simply highlight each section/area of the CV and type in your information.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="icon">
                            <img class="img-fluid" src="<?php echo base_url();?>img/4_blue.png" alt="">
                        </div>
                        <div class="single-stat d-flex flex-row">
                            <div class="icon mr-20">
                                <img src="<?php echo base_url();?>img/s4.png" alt="">
                            </div>
                            <div class="desc">
                                <a href="#">
                                    <h4 class="pb-10">Once you are happy the order is then only finalised, else we return your 100% money.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End stat-section -->


<?php
$this->load->view("common/footer");
?>
</body>

</html>