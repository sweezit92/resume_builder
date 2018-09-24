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
    $this->load->view('common/metalinks');
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
                    <h2 class="head">Education</h2>
                    <form>
					<div class="main_div">
					<div id="primary_div">
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Course</label>
							  <input type="text" class="form-control" id="inputEmail4" placeholder="Course Name">
							</div>
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Institute Name</label>
							  <input type="text" class="form-control" id="inputEmail4" placeholder="Institute Name">
							</div>
							<div class="form-group col-md-4">
							  <label for="inputPassword4">University</label>
							  <input type="text" class="form-control" id="inputPassword4" placeholder="University Name">
							</div>
						  </div>
						  <div class="form-row">
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Starting Date</label>
							  <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
							</div>
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Ending Date</label>
							  <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
							</div>
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Currently Studying</label>
							  <br>
							  <input class="form-check-input" style="margin: 10px;" type="checkbox" id="gridCheck">
							</div>
						  </div>
						</div>
					</div>
					<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="inputEmail4">Offshore courses</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="OPITO E-BOSIET Digital Delivery BOSIET (5703)">OPITO E-BOSIET Digital Delivery BOSIET (5703)</option>
								<option value="OPITO BOSIET with EBS (5700) + CA-EBS (5902)">OPITO BOSIET with EBS (5700) + CA-EBS (5902)</option>
								<option value="OPITO BOSIET with EBS (5700)">OPITO BOSIET with EBS (5700)</option>
								<option value="OPITO FOET with EBS (5858) + CA-EBS (5902)">OPITO FOET with EBS (5858) + CA-EBS (5902)</option>
								<option value="OPITO FOET with EBS (5858">OPITO FOET with EBS (5858)</option>
								<option value="OPITO HUET with EBS (5095) + CA-EBS (5902)">OPITO HUET with EBS (5095) + CA-EBS (5902)</option>
								<option value="OPITO  HUET with EBS (5095)">OPITO  HUET with EBS (5095)</option>
								<option value="OPITO Banksman & Slinger Stage 1 & 2 (9067)">OPITO Banksman & Slinger Stage 1 & 2 (9067)</option>
								<option value="OPITO CA-EBS (5902)">OPITO CA-EBS (5902)</option>
							</select>
							</div>
					</div>
					  
					  
					  <button type="submit" class="btn btn-primary">Next</button>
					  <a href="javascript:void(0);" onclick="add_another();" class="btn btn-primary">Add Another Education</a>
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
	$("#primary_div").clone().appendTo(".main_div");
}
</script>
    
</body>

</html>