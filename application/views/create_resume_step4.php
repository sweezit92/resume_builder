<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700,900" rel="stylesheet">
	
    <!-- ===========================================
        CSS
    ============================================= -->
<?php
$this->load->view("common/metalinks");
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
    
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
$this->load->view("common/header");
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
$this->load->view("common/resume_sidebar");
?>
			

                <div class="col-lg-8" style="font-size: 16px;">
                    <h2 class="head">Work Experience</h2>
                    <form method="post" action="<?php echo base_url("create_resume_step4/update_experience");?>">
					<div id="main_div">

						<?php
							foreach($fetch_experience As $fetch_something)
							{
						?>
						<div id="primary_div">
							<div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Title/Position/Rank</label>
								  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $fetch_something->title;?>" name="title[]"  placeholder="Title/Position/Rank Name">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Company/Organisation Name</label>
								  <input type="text" class="form-control" id="inputEmail4" name="company_name[]" value="<?php echo $fetch_something->company;?>" placeholder="Company/Organisation Name">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Vessel name</label>
								  <input type="text" class="form-control" id="inputEmail4" name="vessel_name[]" value="<?php echo $fetch_something->vessel_name;?>"  placeholder="Vessel name">
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Length of the vessel</label>
								  <input type="text" class="form-control" id="inputEmail4" name="vessel_length[]" value="<?php echo $fetch_something->vessel_length;?>" placeholder="Length of the vessel">
								</div>
								<div class="form-group col-md-4">
							  <label for="inputEmail4" >Type of the vessel</label>
							  <select id="inputState" class="form-control" name="veseel_type[]">
								<option selected>Choose...</option>
								<option value="Tanker" <?php echo (($fetch_something->vessel_type == "Tanker")?'selected':'') ;?>>Tanker</option>
								<option value="Bulk Carrier" <?php echo (($fetch_something->vessel_type == "Bulk Carrier")?'selected':'') ;?>>Bulk Carrier</option>
								<option value="Cargo" <?php echo (($fetch_something->vessel_type == "Cargo")?'selected':'') ;?>>Cargo</option>
								<option value="Container" <?php echo (($fetch_something->vessel_type == "Container")?'selected':'') ;?>>Container</option>
								<option value="Passenger" <?php echo (($fetch_something->vessel_type == "Passenger")?'selected':'') ;?>>Passenger</option>
								<option value="Offshore" <?php echo (($fetch_something->vessel_type == "Offshore")?'selected':'') ;?>>Offshore</option>
								<option value="Yacht" <?php echo (($fetch_something->vessel_type == "Yacht")?'selected':'') ;?>>Yacht</option>
								<option value="River" <?php echo (($fetch_something->vessel_type == "River")?'selected':'') ;?>>River</option>
								<option value="Onshore" <?php echo (($fetch_something->vessel_type == "Onshore")?'selected':'') ;?>>Onshore</option>
							  </select>
							</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Starting Date</label>
								  <input type="text" class="form-control form-control-2 input-sm from"  value="<?php echo $fetch_something->start;?>" name="Start_date[]" placeholder="Starting date">
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Ending Date</label>
								  <input type="text" class="form-control form-control-2 input-sm to" value="<?php echo $fetch_something->end;?>" name="end_date[]" placeholder="Ending date">
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Currently Working</label>
								  <br>
								  <input class="form-check-input" style="margin: 10px;" name="current_work[]" value="current_work" 
									<?php echo (($fetch_something->end == "Currently working")?'checked':'') ;?> type="checkbox"  id="gridCheck">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Company Location</label>
								  <input type="text" class="form-control" name="company_loc[]" value="<?php echo $fetch_something->company_location;?>" placeholder="Company Location">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Company Description</label>
								  <input type="text" class="form-control" name="company_detail[]" value="<?php echo $fetch_something->company_description;?>" placeholder="Company Description">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Contact Person</label>
								  <input type="text" class="form-control" name="contact_person[]" value="<?php echo $fetch_something->contact_person;?>" placeholder="e.g. Capt. Alex Newman, M/Y Only You">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Contact Info</label>
								  <input type="text" class="form-control" name="contact_info[]" value="<?php echo $fetch_something->contact_info;?>" placeholder="email and/or phone with commas">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-12">
								  <label for="inputEmail4">Tasks</label>
								  <textarea placeholder="e.g. This yacht was run with 5 crew members during the seasons from June to October. We cruised from Malta to Monaco, Italy, Sardinia, Capri, Corsica, the Balearic Islands, and South of France" class="form-control" rows="5"  name="task[]" type="text"><?php echo $fetch_something->task;?></textarea>
								</div>
							  </div>
							   <hr>
						</div>
						<?php
							}
						?>
					</div>

					  <button type="submit" class="btn btn-primary">Next</button>
					  <a href="javascript:void(0);" onclick="add_another();" class="btn btn-primary">Add Another Work</a>
					</form>
                    <hr>
                </div>         
            </div>
        </div>
    </div>
</section>


<?php
$this->load->view("common/footer");
?>
<script>
function add_another()
{
	$("#primary_div").clone().appendTo("#main_div");
}

$('.signupBTN').click(function(e){
            toggleSignup();
            $('#LoginModal').modal('show');
        });

        $('.loginBTN').click(function(e){
            $('.login-text').trigger('click');
            $('#LoginModal').modal('show');
        });
</script>
</script>

<script>
var startDate = new Date();
var fechaFin = new Date();
var FromEndDate = new Date();
var ToEndDate = new Date();




$('.from').datepicker({
    autoclose: true,
    minViewMode: 1,
    format: 'mm/yyyy'
}).on('changeDate', function(selected){
        startDate = new Date(selected.date.valueOf());
        startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
        $('.to').datepicker('setStartDate', startDate);
    }); 

$('.to').datepicker({
    autoclose: true,
    minViewMode: 1,
    format: 'mm/yyyy'
}).on('changeDate', function(selected){
        FromEndDate = new Date(selected.date.valueOf());
        FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
        $('.from').datepicker('setEndDate', FromEndDate);
    });




</script>
 
</body>

</html>