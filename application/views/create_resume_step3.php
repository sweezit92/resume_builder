<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700,900" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <!-- ===========================================
        CSS
    ============================================= -->
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


<body class="version-blog">
    <!-- start Header Area -->
<?php
$this->load->view('common/header');
?>
    <!-- End Header Area -->
    <!-- Start hero-section -->
<section class="hero-section-blog-details" style="height:40%;">
    <div style="background: url('<?php echo base_url();?>img/Great-Cover-Letter-Banner.jpg');">
        <div class="text-center" style="margin:40px;">
            <div class="col-md-12 pt-100 pb-80" style="verticle-align:middle;">
              <a class="blog-heading">Resume Builder</a>
            </div>
        </div>
    </div>
</section>
<!-- End hero-section -->

<!-- Start main body contents -->
<section class="blog-post ">
    <div class="details-body">
        <div class="container">
            <div class="row">
                <!-- Start Blog Details -->
<?php
$this->load->view('common/resume_sidebar');
?>

                <div class="col-lg-8" style="font-size: 16px;">
                    <h2 class="head">Skill/Certificate</h2>
                    <form>
						  <div class="form-row">
							<div class="form-group col-md-12">
							  <label for="inputEmail4">Skills(Use comma as separator)</label>
							  <input type="text" class="form-control" id="inputEmail4" placeholder="Skill Name">
							</div>
						  </div>
						  <div id="main_div">
						  	<div class="form-row" id="language_div">
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Language</label>
							  <input class="form-control" id="date" name="date" placeholder="Language" type="text"/>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Proficiency</label>
							  <select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="1">3</option>
								<option value="2">4</option>
								<option value="2">5</option>
							  </select>
							</div>
						  </div>
						  </div>
						  
						  <a href="javascript:void(0);" onclick="add_another();" class="btn btn-primary" style="margin-bottom:10px;">Add Another Language</a>
						  <br>
						  <div class="form-row">
							<div class="form-group col-md-12">
							  <label for="inputEmail4">Certificates(Use comma as separator)</label>
							  <input type="text" class="form-control" id="inputEmail4" placeholder="Certificate Name">
							</div>
						  </div>
						  <button type="submit" class="btn btn-primary">Next</button>
					  
					  
					 
					  
					</form>
                    <hr>
                </div>
              
				

            </div>
        </div>
    </div>
</section>
<br>
<?php
$this->load->view('common/footer');

?>

<script>
function add_another()
{
	$("#language_div").clone().appendTo("#main_div");
}
</script>
    
</body>

</html>