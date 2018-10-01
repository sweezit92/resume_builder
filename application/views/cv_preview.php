
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="img/fav.jpg"> -->
    
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder - Resume Preview</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700,900" rel="stylesheet">
    <!-- ===========================================
        CSS
    ============================================= -->
<?php
$this->load->view("common/metalinks");
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

    
</head>

<style type="text/css">
    
		.dot {
	  height: 25px;
	  width: 25px;
	  background-color:#479099;
	  border-radius:50%;
	  display: inline-block;
	}

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
<section class="hero-section-blog-details">
    <div style="background: url('<?php echo base_url();?>img/Great-Cover-Letter-Banner.jpg');">
        <div class="text-center" style="margin:40px;">
            <div class="col-md-12 pt-100 pb-80">
               <a class="blog-heading">RESUME</a>
            </div>
        </div>
    </div>
</section>
<!-- End hero-section -->

<!-- Start main body contents -->
<section class="blog-post" style="margin-top:-10px;">
    <div class="details-body" style="background:white;" id="content">
        <div class="container">
            <div class="row" >
				

						<div class="col-md-4">
							<div class="col-md-12">
							   <img src="<?php echo base_url();?>uploads/<?php echo $get_cv_preview->image;?>" style="margin-top:10px;">
							<div>
								<p style="font-size:18px;margin-left:-20px;padding:5px;color:#479099;"><b>PERSONAL INFORMATION</b></p>
									<ul style="margin-left:-15px;font-family:italic;">
									<li>Year of birth : <?php echo $get_cv_preview->dob;?></li>
									<li>Nationality (Which country issued your passport?): <?php echo ucfirst($get_cv_preview->nationality);?></li>
									<li>Country of Residence (Where Do you live?):  <?php echo ucfirst($get_cv_preview->residence);?></li>
									<li>Current Location: <?php echo ucfirst($get_cv_preview->current_location);?></li>
									<li>Do you currently have valid B1/B2 visa?: <?php echo ucfirst($get_cv_preview->visa);?></li>
									<li>Seaman's Book: <?php echo ucfirst($get_cv_preview->seamans_book);?></li>
									<li>Telephone Number with Country prefix: <?php echo ucfirst($get_cv_preview->telephone);?></li>
									<li>Skype ID (Some recruiters perform job interviews over Skype): <?php echo ucfirst($get_cv_preview->skype);?></li>
									<li>When you can start the new job?<br/>(now, in 1 month, in 2 m..): <?php echo ucfirst($get_cv_preview->start_job);?></li>
									<li>Do you smoke?: <?php echo ucfirst($get_cv_preview->smoke);?></li>
									<li>Do you have visible tattoos?: <?php echo ucfirst($get_cv_preview->tatto);?></li>
									</ul>
							</div><br>
							
							<div>
								<p style="font-size:18px;margin-left:-20px;padding:5px;color:#479099;"><b><u>LANGUAGES</u></b></p>
								<?php
									$explode_level = explode(',',$get_cv_preview->level);
									$explode_languages = explode(',',$get_cv_preview->language);
									foreach($explode_languages AS $key=> $each_lang){
								?>
								  <p style="font-size:18px;margin-left:-15px;"><?php echo $each_lang;?></p>
								   <div style="margin-left:-15px;">
								   	<?php
								   		for($i = 1; $i<= $explode_level[$key]; $i++){
								   	?>
										<span class="dot"></span>
									<?php
									}
									?>
								   </div>
							   <?php
							   		}
							   ?>
							</div><br>

							<div style="margin-top:50px;">
							 <p style="font-size:18px;padding:5px;margin-left:-20px;color:#479099;"><b><u>EDUCATION</u></b></p>
							 <?php 
							 	$explode_course = explode(',',$get_cv_preview->course);
							 	$explode_institute = explode(',',$get_cv_preview->institute);
							 	$explode_university = explode(',',$get_cv_preview->university);
							 	$explode_year_start = explode(',',$get_cv_preview->start);
							 	$explode_year_end = explode(',',$get_cv_preview->end);

							 	foreach($explode_course AS $key=> $each_course){
							 ?>
							 <ul style="font-size:12px;margin-left:-15px;">
								<li>Courses: <?php echo $each_course;?></li>
								<li>Institution/ Place of Education: <?php echo $explode_institute[$key];?></li>
								<li>University: <?php echo $explode_university[$key];?></li>
								<li>Year: <?php echo $explode_year_start[$key];?> - <?php echo $explode_year_end[$key];?></li>
							 </ul>
							 <br>
							 <?php
								}
							 ?>
							</div><br>

							<div>
								<p style="font-size:18px;margin-left:-20px;padding:5px;color:#479099;"><b><u>CERTIFICATES</u></b></p>
								<ul>
								<?php
									$explode_certificate = explode(',',$get_cv_preview->certificate);
									foreach($explode_certificate AS $each_certificate){
								?>
									<li type="square"><?php echo $each_certificate;?></li>
								<?php
									}
								?>
								</ul>
							</div><br>
							<div>
								<p style="font-size:18px;margin-left:-20px;padding:5px;color:#479099;"><b><u>STCW</u></b></p>
								<ul>
								<?php
									$explode_stcw = explode(',',$get_cv_preview->stcw);
									foreach($explode_stcw AS $each_stcw){
								?>
									<li type="square"><?php echo $each_stcw;?></li>
								<?php
									}
								?>
								</ul>
							</div>
							</div>
						</div>

						<div class="col-md-8" style="margin-top:10px;">
							<div class="col-md-12">
							  <div style="height:auto;width:100%;background:#479099;margin-top:55px;padding:8px;">
							  	<div style="margin-left:15px;">
							  	<h2 style="color:white;"><?php echo ucfirst($get_cv_preview->full_name);?></h2>
								<h3 style="color:white;"><u><?php echo ucfirst($get_cv_preview->professional_rank);?></u></h3><br>
								<p style="color:white;"><?php echo ucfirst($get_cv_preview->about_yourself);?></p>
								</div>
							  </div>
								<p style="font-size:18px;margin-left:8px;padding:5px;border-bottom:2px solid black;color:#479099;"><b><u>WORK EXPERIENCE</u></b></p>
							<?php
								foreach($get_experience AS $each_experience){
							?>
							 <div style="margin-left:15px;border-bottom:2px solid black;">
								<p style="color:#479099;"><b><?php echo ucfirst($each_experience->title);?></b><br><i><?php echo ucfirst($each_experience->vessel_name);?><br><?php echo ucfirst($each_experience->start);?> - <?php echo ucfirst($each_experience->end);?><br><?php echo ucfirst($each_experience->company);?><br><?php echo ucfirst($each_experience->vessel_length);?><br></i><li type="square"><?php echo ucfirst($each_experience->task);?></li></p>

								<p style="margin-left:15px;color:#479099;font-size:12px;">Contact for Reference: <?php echo $each_experience->contact_person;?>- <?php echo $each_experience->contact_info;?> </p>					
							 </div>
							 <?php
								}
							 ?>
							 
							 <div>

							<p style="font-size:18px;margin-left:15px;padding:5px;color:#479099;margin-top:50px;"><b><u>Skill Sets</u></b></p>
							 <div class="row">
							 	<div class="col-md-3">
								
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;"><b><u>Deck</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->deck);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<code style="font-size:12px;"><?php echo $each_skills;?></code>
									  </div>
									 <?php
									 	}
									 ?>
							   	 
							   	</div>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;"><b><u>Propulsion</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->propulsion);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<code style="font-size:12px;"><?php echo $each_skills;?></code>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;"><b><u>Interior</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->interior);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<code style="font-size:12px;"><?php echo $each_skills;?></code>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;"><b><u>Engineering</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->engineering);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<code style="font-size:12px;"><?php echo $each_skills;?></code>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   </div>

							   <div class="row">
							 	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;"><b><u>Culinary</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->culinary);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<code style="font-size:12px;"><?php echo $each_skills;?></code>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;"><b><u>Massage</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->massage);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<code style="font-size:12px;"><?php echo $each_skills;?></code>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;"><b><u>Personnal Trainer</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->personnal_trainer);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<code style="font-size:12px;"><?php echo $each_skills;?></code>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;"><b><u>Other</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->other);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<code style="font-size:12px;"><?php echo $each_skills;?></code>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   </div>

							 
							</div>
							</div>
						</div>
						
						
            </div>
        </div>
    </div>
</section>
<br>

<div><div id="editor"></div><a href="" id="cmd" class="genric-btn2" style="padding:5px;margin-left:580px;">DOWNLOAD AS PDF</a></div><br>

<?php
$this->load->view("common/footer");
?>

</body>
<script>
$('#cmd').click(function() {
  var options = {
  };
  var pdf = new jsPDF('p', 'pt', 'a3');
  pdf.addHTML($("#content"), 20, 80, options, function() {
    pdf.save('pageContent.pdf');
  });
});
</script>


</html>