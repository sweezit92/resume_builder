
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
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">
    <!-- ===========================================
        CSS
    ============================================= -->
<?php
$this->load->view("common/metalinks");
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

    
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
							   <img src="<?php echo base_url();?>uploads/<?php echo $get_cv_preview->image;?>" style="margin-top:10px;height:180px;">
							<div>
								<p style="font-size:18px;margin-left:-20px;padding:5px;color:#479099;"><b>PERSONAL INFORMATION</b></p>
									<ul style="margin-left:-15px;font-family:italic;">
									<li style="font-weight:bold;">Year of birth : <?php echo $get_cv_preview->dob;?></li>
									<li style="font-weight:bold;">Nationality : <?php echo ucfirst($get_cv_preview->nationality);?></li>
									<li style="font-weight:bold;">Residence :  <?php echo ucfirst($get_cv_preview->residence);?></li>
									<li style="font-weight:bold;">Location : <?php echo ucfirst($get_cv_preview->current_location);?></li>
									<li style="font-weight:bold;">Email :  <?php echo ucfirst($get_cv_preview->email);?></li>
									<li style="font-weight:bold;">US Visa : <?php echo ucfirst($get_cv_preview->visa);?></li>
									<li style="font-weight:bold;">Seaman's Book: <?php echo ucfirst($get_cv_preview->seamans_book);?></li>
									<li style="font-weight:bold;">Telephone : <?php echo ucfirst($get_cv_preview->telephone);?></li>
									<li style="font-weight:bold;">Skype ID : <?php echo ucfirst($get_cv_preview->skype);?></li>
									<li style="font-weight:bold;">When you can start the new job? : <?php echo ucfirst($get_cv_preview->start_job);?></li>
									<li style="font-weight:bold;">Do you smoke? : <?php echo ucfirst($get_cv_preview->smoke);?></li>
									<li style="font-weight:bold;">Do you have visible tattoos? : <?php echo ucfirst($get_cv_preview->tatto);?></li>
									</ul>
							</div><br>

							<?php
								if($get_cv_preview->language != ''){
							?>
							<div>
								<p style="font-size:18px;margin-left:-20px;padding:5px;color:#479099;"><b><u>LANGUAGES</u></b></p>
								<?php
									$explode_level = explode(',',$get_cv_preview->level);
									$explode_languages = explode(',',$get_cv_preview->language);
									foreach($explode_languages AS $key=> $each_lang){
								?>
								  <p style="font-size:18px;margin-left:-15px;font-weight:bold;"><?php echo $each_lang;?></p>
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
							<?php
								}
							?>
							
							<?php
								if($get_cv_preview->certificate != ''){
							?>
							<div>
								<p style="font-size:18px;margin-left:-20px;padding:5px;color:#479099;"><b><u>CERTIFICATES</u></b></p>
								<ul>
								<?php
									$explode_certificate = explode(',',$get_cv_preview->certificate);
									foreach($explode_certificate AS $each_certificate){
								?>
									<li type="square" style="font-weight:bold;"><?php echo $each_certificate;?></li>
								<?php
									}
								?>
								</ul>
							</div><br>
							<?php
								}
							?>
							<?php
								if($get_cv_preview->stcw != ''){
							?>
							<div>
								<p style="font-size:18px;margin-left:-20px;padding:5px;color:#479099;"><b><u>STCW</u></b></p>
								<ul>
								<?php
									$explode_stcw = explode(',',$get_cv_preview->stcw);
									$explode_user_idz = $get_cv_preview->user_id;
									foreach($explode_stcw AS $key=>$each_stcw){

										$user_idz = $explode_user_idz;
								?>
									<li type="square" style="font-weight:bold;"><?php echo $each_stcw;?></li>
								<?php
									}
								?>
								</ul>
							</div>
							<?php
								}
							?>
							</div>
						</div>

						<div class="col-md-8" style="margin-top:10px;">
							<div class="col-md-12">
							  <div style="height:auto;width:100%;background:#479099;padding:8px;">
							  	<div style="margin-left:15px;">
							  	<h2 style="color:white;"><?php echo ucfirst($get_cv_preview->full_name);?></h2>
								<h3 style="color:white;"><u>
									<?php
										$mostRecent = 0;
										$explode_title = explode(',',$get_experience->title);
										$explode_end_date = explode(',',$get_experience->end);
										for ($i=0; $i < count($explode_end_date); $i++) { 
											if ($explode_end_date[$i] == "Currently working")
											{
												echo $explode_title[$i];
											}
										}
									?>
									</u></h3><br>
								<p style="color:white;"><?php echo ucfirst($get_cv_preview->about_yourself);?></p>
								</div>
							  </div>
							<?php
								if(($get_cv_preview->course != '') && ($get_cv_preview->institute != '') && ($get_cv_preview->university != '') && ($get_cv_preview->start != '') && ($get_cv_preview->end != '')){
							?>
							<div class="col-md-12"style="margin-top:50px;">
							 <p style="font-size:18px;margin-left:-5px;padding:5px;border-bottom:2px solid black;color:#479099;"><b><u>EDUCATION</u></b></p>
							 <div class="row" style="margin-bottom:6px;">
							 <?php 
							 	$explode_course = explode(',',$get_cv_preview->course);
							 	$explode_institute = explode(',',$get_cv_preview->institute);
							 	$explode_university = explode(',',$get_cv_preview->university);
							 	$explode_year_start = explode(',',$get_cv_preview->start);
							 	$explode_year_end = explode(',',$get_cv_preview->end);

							 	foreach($explode_course AS $key=> $each_course){
							 ?>
							 
							 	<div class="col-md-4">
								 <ul style="font-size:12px;margin-left:-5px;font-weight:bold;">
									<li>Courses: <?php echo $each_course;?></li>
									<li>Institution : <?php echo $explode_institute[$key];?></li>
									<li>University: <?php echo $explode_university[$key];?></li>
									<li>Year: <?php echo $explode_year_start[$key];?> - <?php echo $explode_year_end[$key];?></li>
								 </ul>
								</div>
							
							 <br>
							 <?php
								}
							 ?>
							 </div>
							</div>
							<?php
								}
							?>

							<?php
								if(($get_experience->title != '') && ($get_experience->company != '') && ($get_experience->vessel_name != '') && ($get_experience->vessel_length != '') && ($get_experience->start != '') && ($get_experience->end != '') && ($get_experience->contact_person != '') && ($get_experience->contact_info != '') && ($get_experience->task != '')){
							?>
								<p style="font-size:18px;margin-left:8px;padding:5px;border-bottom:2px solid black;color:#479099;"><b><u>WORK EXPERIENCE</u></b></p>
							<?php
								$title = explode(",",$get_experience->title);
								$company = explode(",",$get_experience->company);
								$company_location = explode(",",$get_experience->company_location);
								$vessel_name	 = explode(",",$get_experience->vessel_name	);
								$vessel_length = explode(",",$get_experience->vessel_length);
								$vessel_type = explode(",",$get_experience->vessel_type);
								$start = explode(",",$get_experience->start);
								$end = explode(",",$get_experience->end);
								$contact_person = explode(",",$get_experience->contact_person);
								$contact_info = explode(",",$get_experience->contact_info);
								$task = explode(",",$get_experience->task);

								foreach($title AS $key=>$each_title){
							?>
							 <div style="margin-left:15px;padding:7px;">
								<h4 style="margin-bottom:-15px;"><b><?php echo ucfirst($each_title);?></b></h4><br>
								<b><?php echo ucfirst($vessel_name[$key]);?></b><br>
								<p style="color:#479099;margin-bottom:5px;">
									<i style="color:#479099;"><?php echo ucfirst($start[$key]);?> - <?php echo ucfirst($end[$key]);?></i><br>
									<?php
										if($company[$key] != '' && $company[$key] != ''){
									?>
									<i>Company Name: <?php echo ucfirst($company[$key]);?></i><br>
									<?php
										}	
									?>
									<?php
										if($company_location[$key] != '' && $company_location[$key] != ''){
									?>
									<i>Trading Area: <?php echo ucfirst($company_location[$key]);?></i><br>
									<?php
										}	
									?>
									<div class="row" style="padding:0px;margin:0px;">
										<div class="col-md-6" style="padding:0px;margin:0px;">
											<i style="float:left;color:#479099;"><?php echo ucfirst($vessel_type[$key]);?></i><br>
										</div>
										<div class="col-md-6" style="padding:0px;margin:0px;">
											<i style="color:#479099;float:right;"><?php echo ucfirst($vessel_length[$key]);?></i><br>
										</div>
									</div>
								</p>
								<?php
									if($task[$key] != ''){
								?>
								<li class="square" style="color:#479099;font-family:Roboto 11;"><i><?php echo ucfirst($task[$key]);?></i></li>
								<?php
									}
								?>
								
								<?php
									if($contact_person[$key] != '' && $contact_info[$key] != ''){
								?>
								<p><i  style="color:#479099;font-family:Roboto 11;">Contact for reference: <?php echo $contact_person[$key];?> - <?php echo $contact_info[$key];?></i> </p>	
								<?php
									}
								?>				
							 </div>
							 <?php
									}
								}
							 ?>
						
						<?php
							if(($get_cv_preview->deck != '') && ($get_cv_preview->propulsion != '') && ($get_cv_preview->interior != '') && ($get_cv_preview->engineering != '') && ($get_cv_preview->culinary != '') && ($get_cv_preview->massage != '') && ($get_cv_preview->personnal_trainer != '') && ($get_cv_preview->other != '')){
						?> 
						<div>
							<p style="font-size:18px;margin-left:15px;padding:5px;border-bottom:2px solid black;color:#479099;margin-top:10px;"><b><u>Skill Sets</u></b></p>
							 <div class="row">
							 	<?php
							 		if($get_cv_preview->deck != ""){
							 	?>
							 	<div class="col-md-3">								
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;margin-bottom:0px;"><b><u>Deck</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->deck);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<span style="font-size:12px;font-weight:bold;"><?php echo $each_skills;?></span>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<?php
									}
							   	?>
							   	<?php
							 		if($get_cv_preview->propulsion != ''){
							 	?>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;margin-bottom:0px;"><b><u>Propulsion</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->propulsion);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<span style="font-size:12px;font-weight:bold;"><?php echo $each_skills;?></span>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<?php
									}
							   	?>
							   	<?php
							 		if($get_cv_preview->interior != ''){
							 	?>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;margin-bottom:0px;"><b><u>Interior</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->interior);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<span style="font-size:12px;font-weight:bold;"><?php echo $each_skills;?></span>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<?php
									}
							   	?>
							   	<?php
							 		if($get_cv_preview->engineering != ''){
							 	?>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;margin-bottom:0px;"><b><u>Engineering</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->engineering);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<span style="font-size:12px;font-weight:bold;"><?php echo $each_skills;?></span>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<?php
									}
							   	?>
							   </div>
							   <div class="row">
							   	<?php
							 		if($get_cv_preview->culinary != ''){
							 	?>
							 	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;margin-bottom:0px;"><b><u>Culinary</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->culinary);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<span style="font-size:12px;font-weight:bold;"><?php echo $each_skills;?></span>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<?php
									}
							   	?>
							   	<?php
							 		if($get_cv_preview->massage != ''){
							 	?>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;margin-bottom:0px;"><b><u>Massage</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->massage);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<span style="font-size:12px;font-weight:bold;"><?php echo $each_skills;?></span>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<?php
									}
							   	?>
							   	<?php
							 		if($get_cv_preview->personnal_trainer != ''){
							 	?>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;margin-bottom:0px;"><b><u>Personnal Trainer</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->personnal_trainer);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<span style="font-size:12px;font-weight:bold;"><?php echo $each_skills;?></span>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<?php
									}
							   	?>
							   	<?php
							 		if($get_cv_preview->other != ''){
							 	?>
							   	<div class="col-md-3">
								 	<p style="font-size:14px;padding:5px;margin-left:15px;color:#479099;margin-bottom:0px;"><b><u>Other</u></b></p>
								 	<?php
								 		$break_skills = explode(',',$get_cv_preview->other);
								 		foreach($break_skills AS $each_skills){
								 	?>
									  <div style="margin-left:20px;">
										<span style="font-size:12px;font-weight:bold;"><?php echo $each_skills;?></span>
									  </div>
									 <?php
									 	}
									 ?>
							   	</div>
							   	<?php
									}
							   	?>
							   </div>
							</div>
							<?php
								}
							?>
							</div>
						</div>
						
						
            </div>
        </div>
    </div>
</section>
<br><div ></div>
<?php
	if($get_payment_details->status != 'success'){
?>
	<div id="paypal-button-container1" style="padding:5px;margin-left:580px;"></div><br>
<?php
}else{
?>
	<div><div id="editor"></div><a href="" id="cmd" class="genric-btn2" style="padding:5px;margin-left:580px;">DOWNLOAD AS PDF</a></div><br>
<?php
}
?>

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
    pdf.save('MarineCv_<?php echo $first_name;?>_<?php echo $last_name;?>.pdf');
  });
});
</script>

 <script>
// Render the PayPal button
paypal.Button.render({
// Set your environment
env: 'sandbox', // sandbox | production

// Specify the style of the button
style: {
  layout: 'vertical',  // horizontal | vertical
  size:   'medium',    // medium | large | responsive
  shape:  'rect',      // pill | rect
  color:  'gold'       // gold | blue | silver | white | black
},

// Specify allowed and disallowed funding sources
//
// Options:
// - paypal.FUNDING.CARD
// - paypal.FUNDING.CREDIT
// - paypal.FUNDING.ELV
funding: {
  allowed: [
    paypal.FUNDING.CARD,
    paypal.FUNDING.CREDIT
  ],
  disallowed: []
},

// PayPal Client IDs - replace with your own
// Create a PayPal app: https://developer.paypal.com/developer/applications/create
client: {
  sandbox: 'Ae9NoOU4eFAC2ibKeGyfGESR-uQeuHjOjUHt7hNMIxNJ1CcpVp7iZDc3mIWGuLcisakocU0E5gPs3IV4',
  production: '<insert production client id>'
},

payment: function (data, actions) {
  return actions.payment.create({
    payment: {
      transactions: [
        {
          amount: {
            total: '2',
            currency: 'USD'
          }
        }
      ]
    }
  });
},

onAuthorize: function (data, actions) {
  return actions.payment.execute().then(function () {
      //window.alert('Payment Complete!');
      var amountz = '2 USD';
     /*ajax code start*/
	 $.ajax({
        url: '<?php echo base_url("cv_preview/payments");?>',
        data: {
				'amount': amountz				
			  },
        type: "post",
        success: function(response){
        	//alert(response);
        	if(response == "true"){ // if true (1)
		       location.reload(); // then reload the page.(3)
		   }
        }
      });
	 /* ajax code ends*/
    });
}
}, '#paypal-button-container1');
</script>

</html>