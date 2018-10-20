<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700,900" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">
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
                    <form method="post" action="<?php echo base_url("create_resume_step5/update_experience");?>">
					

						<?php
							$title = explode(",",$fetch_experience->title);
							$company = explode(",",$fetch_experience->company);
							$vessel_name	 = explode(",",$fetch_experience->vessel_name	);
							$vessel_length = explode(",",$fetch_experience->vessel_length);
							$vessel_type = explode(",",$fetch_experience->vessel_type);
							$start = explode(",",$fetch_experience->start);
							$end = explode(",",$fetch_experience->end);
							$company_location = explode(",",$fetch_experience->company_location);
							$company_description = explode(",",$fetch_experience->company_description);
							$contact_person = explode(",",$fetch_experience->contact_person);
							$contact_info = explode(",",$fetch_experience->contact_info);
							$task = explode(",",$fetch_experience->task);

							$count_total = count($title);
							for($i = 0 ; $i < $count_total ; $i++){
						?>
						<div class="primary_div yo<?php echo $i;?>">
							<div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Title/Position/Rank</label>
								  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $title[$i];?>" name="title[]"  placeholder="">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Company/Organisation Name</label>
								  <input type="text" class="form-control" id="inputEmail4" name="company_name[]" value="<?php echo $company[$i];?>" placeholder="">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Vessel name</label>
								  <input type="text" class="form-control" id="inputEmail4" name="vessel_name[]" value="<?php echo $vessel_name[$i];?>"  placeholder="">
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Length of the vessel</label>
								  <input type="text" class="form-control" id="inputEmail4" name="vessel_length[]" value="<?php echo $vessel_length[$i];?>" placeholder="">
								</div>
								<div class="form-group col-md-4">
							  	<label for="inputEmail4" >Type of the vessel</label>
								  <select id="inputState" class="form-control" name="veseel_type[]">
									<option selected>Choose...</option>
									<option value="Tanker" <?php echo (($vessel_type[$i] == "Tanker")?'selected':'') ;?>>Tanker</option>
									<option value="Bulk Carrier" <?php echo (($vessel_type[$i] == "Bulk Carrier")?'selected':'') ;?>>Bulk Carrier</option>
									<option value="Cargo" <?php echo (($vessel_type[$i] == "Cargo")?'selected':'') ;?>>Cargo</option>
									<option value="Container" <?php echo (($vessel_type[$i] == "Container")?'selected':'') ;?>>Container</option>
									<option value="Passenger" <?php echo (($vessel_type[$i] == "Passenger")?'selected':'') ;?>>Passenger</option>
									<option value="Offshore" <?php echo (($vessel_type[$i] == "Offshore")?'selected':'') ;?>>Offshore</option>
									<option value="Yacht" <?php echo (($vessel_type[$i] == "Yacht")?'selected':'') ;?>>Yacht</option>
									<option value="River" <?php echo (($vessel_type[$i] == "River")?'selected':'') ;?>>River</option>
									<option value="Onshore" <?php echo (($vessel_type[$i] == "Onshore")?'selected':'') ;?>>Onshore</option>
								  </select>
							</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Starting Date</label>
								  <input type="text" class="form-control form-control-2 input-sm from"  value="<?php echo $start[$i];?>" name="Start_date[]" placeholder="">
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Ending Date</label>
								  <input type="text" class="form-control form-control-2 input-sm to endclass<?php echo $i;?>" value="<?php echo (($end[$i] != 'Currently working')?$end[$i]:'');?>" name="end_date[]" placeholder="">
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Currently Working</label>
								  <br>
								  <input class="form-check-input" style="margin: 10px;" name="current_work[]" value="1" 
									<?php echo (($end[$i] == "Currently working")?'checked':'') ;?> type="checkbox"   id="gridCheck">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Trading/ Operation Regions</label><br>
                          		  <span style="font-size:11px;">E.g. Persian Gulf, Antibes, Monaco, Med.</span>
								  <input type="text" class="form-control" name="company_loc[]" value="<?php echo $company_location[$i];?>" placeholder="">
								</div>
								<!--<div class="form-group col-md-6">
								  <label for="inputEmail4">Company Description</label>
								  <input type="text" class="form-control" name="company_detail[]" value="<?php echo $company_description[$i];?>" placeholder="Company Description">
								</div>-->
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Contact Person</label><br>
                          		  <span style="font-size:11px;">E.g. Capt. Alex Newman, M/Y Only You</span>
								  <input type="text" class="form-control" name="contact_person[]" value="<?php echo $contact_person[$i];?>" placeholder="">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Contact Info</label><br>
                          		  <span style="font-size:11px;">email and/or phone with commas</span>
								  <input type="text" class="form-control" name="contact_info[]" value="<?php echo $contact_info[$i];?>" placeholder="">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-12">
								  <label for="inputEmail4">Tasks</label><br>
                          		  <span style="font-size:11px;">e.g. This yacht was run with 5 crew members during the seasons from June to October. We cruised from Malta to Monaco, Italy, Sardinia, Capri, Corsica, the Balearic Islands, and South of France</span>
								  <textarea placeholder="" class="form-control" rows="5"  name="task[]" type="text"><?php echo $task[$i];?></textarea>
								</div>
							  </div>
							  <?php
							  if($i > 0)
							  {
							  ?>
							  <a href="javascript:void(0);" style="" onclick="rmv(<?php echo $i;?>)" class="btn btn-danger">Remove</a>
							  <?php
							  }
							  ?>
							 
						</div>
						<hr>
						<?php
							}
						?>
					<div class="main_div">
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
for($i = 0 ; $i < $count_total ; $i++){
?>
	<script>
	$(document).ready(function(){
		var end_date = $(".endclass"+i+"").val();
		alert("ok");
	});
	</script>
<?php
}
?>
<script>
function rmv(e)
{
	$( ".yo"+e+"" ).remove();
}

function add_another() 
{
	
	var max_fields      = 30; 
    var wrapper         = $(".main_div");
	var htmlcontent = '<div class="atrri_add_cont" style="margin-top:20px;"><div class="form-row"><div class="form-group col-md-6"> <label for="inputEmail4">Title/Position/Rank</label> <input type="text" class="form-control" id="inputEmail4" name="title[]" placeholder=""></div><div class="form-group col-md-6"> <label for="inputEmail4">Company/Organisation Name</label> <input type="text" class="form-control" id="inputEmail4" name="company_name[]" placeholder=""></div></div><div class="form-row"><div class="form-group col-md-4"> <label for="inputEmail4">Vessel name</label> <input type="text" class="form-control" id="inputEmail4" name="vessel_name[]" placeholder=""></div><div class="form-group col-md-4"> <label for="inputEmail4">Length of the vessel</label> <input type="text" class="form-control" id="inputEmail4" name="vessel_length[]" placeholder=""></div><div class="form-group col-md-4"> <label for="inputEmail4" >Type of the vessel</label> <select id="inputState" class="form-control" name="veseel_type[]"><option selected>Choose...</option><option value="Tanker">Tanker</option><option value="Bulk Carrier">Bulk Carrier</option><option value="Cargo">Cargo</option><option value="Container">Container</option><option value="Passenger">Passenger</option><option value="Offshore">Offshore</option><option value="Yacht">Yacht</option><option value="River">River</option><option value="Onshore">Onshore</option> </select></div></div><div class="form-row"><div class="form-group col-md-4"> <label for="inputEmail4">Starting Date</label> <input type="text" class="form-control form-control-2 input-sm from"" name="Start_date[]" placeholder=""></div><div class="form-group col-md-4"> <label for="inputEmail4">Ending Date</label> <input type="text" class="form-control form-control-2 input-sm to" name="end_date[]" placeholder=""></div><div class="form-group col-md-4"> <label for="inputEmail4">Currently Working</label> <br><input class="form-check-input" style="margin: 10px;" name="current_work[]" value="current_work" type="checkbox" id="gridCheck"></div></div><div class="form-row"><div class="form-group col-md-6"> <label for="inputEmail4">Trading/ Operation Regions</label><br><span style="font-size:11px;">E.g. Persian Gulf, Antibes, Monaco, Med.</span> <input type="text" class="form-control" name="company_loc[]" placeholder=""></div></div><div class="form-row"><div class="form-group col-md-6"> <label for="inputEmail4">Contact Person</label><br><span style="font-size:11px;">E.g. Capt. Alex Newman, M/Y Only You</span> <input type="text" class="form-control" name="contact_person[]" placeholder=""></div><div class="form-group col-md-6"> <label for="inputEmail4">Contact Info</label><br><span style="font-size:11px;">email and/or phone with commas</span> <input type="text" class="form-control" name="contact_info[]" placeholder=""></div></div><div class="form-row"><div class="form-group col-md-12"> <label for="inputEmail4">Tasks</label><br><span style="font-size:11px;">e.g. This yacht was run with 5 crew members during the seasons from June to October. We cruised from Malta to Monaco, Italy, Sardinia, Capri, Corsica, the Balearic Islands, and South of France</span><textarea placeholder="" class="form-control" rows="5" name="task[]" type="text"></textarea></div></div><a href="javascript:void(0);" class="remove btn btn-danger" style="margin-bottom:20px;">Remove</a></div>';
	
	var x = 1;

        if(x < max_fields){ 
          x++; 
          $(wrapper).append(htmlcontent); 

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


        }
	$("body").on("click",".remove",function(){ 
	  $(this).parents(".atrri_add_cont").remove();
  });
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