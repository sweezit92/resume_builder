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
	include("metalinks.php");
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
include("header.php");
?>
    <!-- End Header Area -->
    <!-- Start hero-section -->
<section class="hero-section-blog-details" style="height:40%;">
    <div style="background: url('img/Great-Cover-Letter-Banner.jpg');">
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
				include("resume_sidebar.php");
				?>

                <div class="col-lg-8" style="font-size: 16px;">
                    <h2 class="head">Personal Information</h2>
                    <form>
					  <div class="form-row">
						<div class="form-group col-md-4">
						  <label for="inputEmail4">First Name</label>
						  <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
						</div>
						<div class="form-group col-md-4">
						  <label for="inputEmail4">Middle Name</label>
						  <input type="text" class="form-control" id="inputEmail4" placeholder="Middle Name">
						</div>
						<div class="form-group col-md-4">
						  <label for="inputPassword4">Last Name</label>
						  <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Professional Title/ Rank</label>
						  <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
						</div>
						<div class="form-group col-md-6">
						  <label for="inputEmail4">About Yourself</label>
						  <input type="text" class="form-control" id="inputEmail4" placeholder="Middle Name">
						</div>
					  </div>
					  <div class="form-row">
						<div class='form-group date col-md-6' id='datepicker1'>
							<label for="inputPassword4">Date Of Birth</label>
							<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
						</div>
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Nationality</label>
						  <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputCity">City</label>
						  <input type="text" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-4">
						  <label for="inputState">State</label>
						  <select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option>...</option>
						  </select>
						</div>
						<div class="form-group col-md-2">
						  <label for="inputZip">Zip</label>
						  <input type="text" class="form-control" id="inputZip">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputAddress">Curren Address</label>
						<input type="text" class="form-control" id="inputAddress" placeholder="Curren Address">
					  </div>
					  <div class="form-group">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" id="gridCheck">
						  <label class="form-check-label" for="gridCheck">
							Same as current address
						  </label>
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputAddress2">Permanent Address</label>
						<input type="text" class="form-control" id="inputAddress2" placeholder="Permanent Address">
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Email</label>
						  <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
						</div>
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Phone</label>
						  <input type="text" class="form-control" id="inputEmail4" placeholder="Phone">
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Visa</label>
						  <select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option value="1">Yes</option>
							<option value="2">No</option>
						  </select>
						</div>
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Visa Category</label>
						  <select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option value="1">B1</option>
							<option value="2">B2</option>
						  </select>
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Seaman's Book</label>
						  <select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option value="1">Yes</option>
							<option value="2">No</option>
						  </select>
						</div>
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Smoke</label>
						  <select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option value="1">Yes</option>
							<option value="2">No</option>
						  </select>
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputEmail4">When you can start the new job?</label>
						  <select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option value="1">Now</option>
							<option value="2">In 1 Month</option>
							<option value="2">In 2 Month</option>
						  </select>
						</div>
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Visible Tattos</label>
						  <select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option value="1">Yes</option>
							<option value="2">No</option>
						  </select>
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
<?php
include("footer.php");
?>
    
</body>

</html>