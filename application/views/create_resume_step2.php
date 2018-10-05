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
    $this->load->view('common/metalinks');
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
                    <form method="post" action="<?php echo base_url("create_resume_step2/update_course");?>">
					<div class="main_div">
					
					<?php
					
					$total = explode(",",$fetch_course->course);
					$institute = explode(",",$fetch_course->institute);
					$university = explode(",",$fetch_course->university);
					$start = explode(",",$fetch_course->start);
					$end = explode(",",$fetch_course->end);
					$count_total = count($total);
					for($i = 0 ; $i < $count_total ; $i++){
					?>
						<div class="primary_div<?php echo $i;?>">
						<div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputEmail4">Educational Institution</label><br>
                              <span style="font-size:11px;">E.g: Warsash Maritime Academy</span>
                              <input type="text" class="form-control" id="inputEmail4" name="institute_name[]" value="<?php echo $institute[$i];?>" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputEmail4">Year of Graduation</label><br>
                              <span style="font-size:11px;">E.g: 2000</span>
                              <input type="text" class="form-control form-control-2 input-sm to" name="end_date[]" value="<?php echo (($end[$i] != "Currently Studying")?$end[$i]:'');?>" placeholder="">
                            </div>
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Specialization</label><br>
                              <span style="font-size:11px;">E.g: Navigation and Marine Power Engineering</span>
							  <input type="text" class="form-control" id="inputEmail4" name="course_name[]" value="<?php echo $total[$i];?>" placeholder="">
							</div>
						  </div>
						  <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">University</label><br>
                              <span style="font-size:11px;">University Name</span>
                              <input type="text" class="form-control" id="inputPassword4" name="university[]" value="<?php echo $university[$i];?>" placeholder="">
                            </div>
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Starting Date</label><br>
                              <span style="font-size:11px;">Starting date</span>
							  <input type="text" class="form-control form-control-2 input-sm to" name="start_date[]" value="<?php echo $start[$i];?>" placeholder="">
							</div>
							
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Currently Studying</label>
							  <br><br>
							  <input class="form-check-input" style="margin: 10px;" type="checkbox" name="currently[]" <?php echo (($end[$i] == "Currently Studying")?'checked':'');?> value="Currently Studying" id="gridCheck">
							  
							</div>
						  </div>
						  <?php
						  if($i > 0)
						  {
						  ?>
						  <a href="javascript:void(0);" onclick="rmv(<?php echo $i;?>)" class="btn btn-danger">Remove</a>
						  <?php
						  }
						  ?>
						  <hr>
						  </div>
						 <?php
							}
						 ?>
						
					</div>	  
					  
					  <button type="submit" class="btn btn-primary">Next</button>
					  <a href="javascript:void(0);"  onclick="add_another();" class="btn btn-primary">Add Another Education</a>
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

function rmv(e)
{
	$( ".primary_div"+e+"" ).remove();
}



function add_another() 
{
	var max_fields      = 30; 
    var wrapper         = $(".main_div");
	var htmlcontent = '<div class="atrri_add_cont"><hr><div class="form-row"><div class="form-group col-md-4"><label for="inputEmail4">Educational Institution</label><br><span style="font-size:11px;">E.g: Warsash Maritime Academy</span><input type="text" class="form-control" id="inputEmail4" name="institute_name[]" placeholder=""></div><div class="form-group col-md-4"><label for="inputEmail4">Year of Graduation</label><br><span style="font-size:11px;">E.g: 2000</span><input type="text" class="form-control" id="inputEmail4" name="end_date[]" placeholder=""></div><div class="form-group col-md-4"><label for="inputPassword4">Specialization</label><br><span style="font-size:11px;">E.g: Navigation and Marine Power Engineering</span><input type="text" class="form-control" id="inputPassword4" name="course_name[]"placeholder=""></div></div><div class="form-row"><div class="form-group col-md-4"><label for="inputEmail4">University</label><br><span style="font-size:11px;">University Name</span><input type="text" class="form-control form-control-2 input-sm to" name="university[]" placeholder=""></div><div class="form-group col-md-4"><label for="inputEmail4">Starting Date</label><br><span style="font-size:11px;">Starting date</span><input type="text" class="form-control form-control-2 input-sm to" name="start_date[]" placeholder=""></div><div class="form-group col-md-4"><label for="inputEmail4">Currently Studying</label><br><br><input class="form-check-input" style="margin: 10px;" type="checkbox" name="currently[]" value="Currently Studying" id="gridCheck"></div></div><a href="javascript:void(0);" class="remove btn btn-danger" style="margin-bottom:20px;">Remove</a></div>';
	
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