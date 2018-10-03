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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery.dropdown.css">
  <script src="<?php echo base_url();?>js/jquery.dropdown.js"></script>
    
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
                   
                    <form method="post" action="<?php echo base_url("create_resume_step3/update_certificate");?>">
                    	<h2 class="head">Certificate</h2>
						  <div class="form-row">
							<?php
							$certificate = explode(",",$fetch_cert->certificate);
							?>
							<div class="form-group col-md-6">
							  <label>Certificates</label>
							  <div class="dropdown-mul-9">
								<select name="certificate[]" id="mul-9" multiple placeholder="Please Select max 5">
								<option value="COC Reg. II/2 Master Unlimited" <?php echo ((in_array("COC Reg. II/2 Master Unlimited", $certificate))?'selected':'')?>>COC Reg. II/2 Master Unlimited</option>
								<option value="DPO (Dynamic Position Officer)" <?php echo ((in_array("DPO (Dynamic Position Officer", $certificate))?'selected':'')?>>DPO (Dynamic Position Officer)</option>
								<option value="COC Reg. II/3 Master 500" <?php echo ((in_array("COC Reg. II/3 Master 500", $certificate))?'selected':'')?>>COC Reg. II/3 Master 500</option>
								<option value="COC Reg. II/2 Chief Officer Unlimited" <?php echo ((in_array("COC Reg. II/2 Chief Officer Unlimited", $certificate))?'selected':'')?>>COC Reg. II/2 Chief Officer Unlimited</option>
								<option value="COC Reg. II/1 3rd Officer" <?php echo ((in_array("COC Reg. II/1 3rd Officer", $certificate))?'selected':'')?>>COC Reg. II/1 3rd Officer</option>
								<option value="COC Reg. II/5 (Able Seaman)" <?php echo ((in_array("COC Reg. II/5 (Able Seaman)", $certificate))?'selected':'')?>>COC Reg. II/5 (Able Seaman)</option>
								<option value="COC Reg. II/4 (Ordinary Seaman)" <?php echo ((in_array("COC Reg. II/4 (Ordinary Seaman)", $certificate))?'selected':'')?>>COC Reg. II/4 (Ordinary Seaman)</option>
								<option value="COC Reg. III/2 Chief Engineer Unlimited" <?php echo ((in_array("COC Reg. III/2 Chief Engineer Unlimited", $certificate))?'selected':'')?>>COC Reg. III/2 Chief Engineer Unlimited</option>
								<option value="COC Reg. III/2 2nd Engineer" <?php echo ((in_array("COC Reg. III/2 2nd Engineer", $certificate))?'selected':'')?>>COC Reg. III/2 2nd Engineer</option>
								<option value="COC Reg. III/1 3rd Engineer" <?php echo ((in_array("COC Reg. III/1 3rd Engineer", $certificate))?'selected':'')?>>COC Reg. III/1 3rd Engineer</option>
								<option value="COC Reg. III/5 Motorman" <?php echo ((in_array("COC Reg. III/5 Motorman", $certificate))?'selected':'')?>>COC Reg. III/5 Motorman</option>
								<option value="COC Reg. III/4 Motorman (Oiler)" <?php echo ((in_array("COC Reg. III/4 Motorman (Oiler)", $certificate))?'selected':'')?>>COC Reg. III/4 Motorman (Oiler)</option>
								<option value="COC Reg. II/7 Electrician" <?php echo ((in_array("COC Reg. II/7 Electrician", $certificate))?'selected':'')?>>COC Reg. II/7 Electrician</option>
								<option value="COC Reg. II/6 Electro –Technical Officer" <?php echo ((in_array("COC Reg. II/6 Electro –Technical Officer", $certificate))?'selected':'')?>>COC Reg. II/6 Electro -Technical Officer</option>
								<option value="Fitter" <?php echo ((in_array("Fitter", $certificate))?'selected':'')?>>Fitter</option>
								<option value="Ship's Cook" <?php echo ((in_array("Ship's Cook", $certificate))?'selected':'')?>>Ship's Cook</option>
								<option value="Deck Cadet" <?php echo ((in_array("Deck Cadet", $certificate))?'selected':'')?>>Deck Cadet</option>
								<option value="Engine Cadet" <?php echo ((in_array("Engine Cadet", $certificate))?'selected':'')?>>Engine Cadet</option>
								<option value="Steward" <?php echo ((in_array("Steward", $certificate))?'selected':'')?>>Steward</option>
								<option value="Waiter" <?php echo ((in_array("Waiter", $certificate))?'selected':'')?>>Waiter</option>
								<option value="Welder Certificate" <?php echo ((in_array("Welder Certificate", $certificate))?'selected':'')?>>Welder Certificate</option>
								<option value="Locksmith" <?php echo ((in_array("Locksmith", $certificate))?'selected':'')?>>Locksmith</option>
								<option value="RYA Powerboat II" <?php echo ((in_array("RYA Powerboat II", $certificate))?'selected':'')?>>RYA Powerboat II</option>
								<option value="Nanny" <?php echo ((in_array("Nanny", $certificate))?'selected':'')?>>Nanny</option>
								<option value="Silver Service" <?php echo ((in_array("Silver Service", $certificate))?'selected':'')?>>Silver Service</option>
								<option value="Padi Open Water" <?php echo ((in_array("Padi Open Water", $certificate))?'selected':'')?>>Padi Open Water</option>
								<option value="CIDESCO Beauty Therapy" <?php echo ((in_array("CIDESCO Beauty Therapy", $certificate))?'selected':'')?>>CIDESCO Beauty Therapy</option>
								<option value="Food Hygiene Level 2" <?php echo ((in_array("Food Hygiene Level 2", $certificate))?'selected':'')?>>Food Hygiene Level 2</option>
								<option value="Flower Arranging Course" <?php echo ((in_array("Flower Arranging Course", $certificate))?'selected':'')?>>Flower Arranging Course</option>
								<option value="Wine Course" <?php echo ((in_array("Wine Course", $certificate))?'selected':'')?>>Wine Course</option>
								<option value="Butler Training & Food Hygiene Level 1" <?php echo ((in_array("Butler Training & Food Hygiene Level 1", $certificate))?'selected':'')?>>Butler Training & Food Hygiene Level 1</option>
								<option value="STCW Certificates High Voltage (Operational)" <?php echo ((in_array("STCW Certificates High Voltage (Operational)", $certificate))?'selected':'')?>>STCW Certificates High Voltage (Operational)</option>
								<option value="High Voltage (Management)" <?php echo ((in_array("High Voltage (Management)", $certificate))?'selected':'')?>>High Voltage (Management)</option>
								<option value="MCA AEC" <?php echo ((in_array("MCA AEC", $certificate))?'selected':'')?>>MCA AEC</option>
								<option value="RYA Coastal Skipper" <?php echo ((in_array("RYA Coastal Skipper", $certificate))?'selected':'')?>>RYA Coastal Skipper</option>
								<option value="MCA Master 200 GT (Yacht)" <?php echo ((in_array("MCA Master 200 GT (Yacht)", $certificate))?'selected':'')?>>MCA Master 200 GT (Yacht)</option>
								<option value="Marine Electrical/Electronics, IT" <?php echo ((in_array("Marine Electrical/Electronics, IT", $certificate))?'selected':'')?>>Marine Electrical/Electronics, IT</option>
							</select>
							</div>
							</div>
							<?php
							$stcw = explode(",",$fetch_cert->stcw);
							?>
							<div class="form-group col-md-6">
							  <label>STCW Certificates</label>
							  <div class="dropdown-mul-10">
								<select name="stcw[]" id="mul-10" multiple placeholder="Select">
								<option value="STCW Basic Safety Training (BST)" <?php echo ((in_array("STCW Basic Safety Training (BST)", $stcw))?'selected':'')?>>STCW Basic Safety Training (BST)</option>
								<option value="STCW Advanced Fire Fighting" <?php echo ((in_array("STCW Advanced Fire Fighting", $stcw))?'selected':'')?>>STCW Advanced Fire Fighting</option>
								<option value="STCW Personal Survival Techniques (PST)" <?php echo ((in_array("STCW Personal Survival Techniques (PST)", $stcw))?'selected':'')?>>STCW Personal Survival Techniques (PST)</option>
								<option value="STCW Personal Safety and Social Responsibility on Board (PSSR)" <?php echo ((in_array("STCW Personal Safety and Social Responsibility on Board (PSSR)", $stcw))?'selected':'')?>>STCW Personal Safety and Social Responsibility on Board (PSSR)</option>
								<option value="STCW Medical First Aid" <?php echo ((in_array("STCW Medical First Aid", $stcw))?'selected':'')?>>STCW Medical First Aid</option>
								<option value="STCW Medical Care" <?php echo ((in_array("STCW Medical Care", $stcw))?'selected':'')?>>STCW Medical Care</option>
								<option value="STCW Proficiency in Survival Craft (PSCRB)" <?php echo ((in_array("STCW Proficiency in Survival Craft (PSCRB)", $stcw))?'selected':'')?>>STCW Proficiency in Survival Craft (PSCRB)</option>
								<option value="STCW Proficiency in Fast Rescue" <?php echo ((in_array("STCW Proficiency in Fast Rescue", $stcw))?'selected':'')?>>STCW Proficiency in Fast Rescue</option>
								<option value="STCW Security Awareness" <?php echo ((in_array("STCW Security Awareness", $stcw))?'selected':'')?>>STCW Security Awareness</option>
								<option value="Maritime English" <?php echo ((in_array("Maritime English", $stcw))?'selected':'')?>>Maritime English</option>
								<option value="Familiarization Safety Training for Ratings" <?php echo ((in_array("Familiarization Safety Training for Ratings", $stcw))?'selected':'')?>>Familiarization Safety Training for Ratings</option>
								<option value="Motorman Course" <?php echo ((in_array("Motorman Course", $stcw))?'selected':'')?>>Motorman Course</option>
								<option value="Bridge Team Management" <?php echo ((in_array("Bridge Team Management", $stcw))?'selected':'')?>>Bridge Team Management</option>
								<option value="Ship Handling" <?php echo ((in_array("Ship Handling", $stcw))?'selected':'')?>>Ship Handling</option>
								<option value="Medical Care" <?php echo ((in_array("Medical Care", $stcw))?'selected':'')?>>Medical Care</option>
								<option value="STCW Designated Security Duties" <?php echo ((in_array("STCW Designated Security Duties", $stcw))?'selected':'')?>>STCW Designated Security Duties</option>
								<option value="STCW Ship Security Officer" <?php echo ((in_array("STCW Ship Security Officer", $stcw))?'selected':'')?>>STCW Ship Security Officer</option>
								<option value="GMDSS" <?php echo ((in_array("GMDSS", $stcw))?'selected':'')?>>GMDSS</option>
								<option value="ECDIS" <?php echo ((in_array("ECDIS", $stcw))?'selected':'')?>>ECDIS</option>
								<option value="HELM" <?php echo ((in_array("HELM", $stcw))?'selected':'')?>>HELM</option>
								<option value="ARPA" <?php echo ((in_array("ARPA", $stcw))?'selected':'')?>>ARPA</option>
								<option value="MARPOL" <?php echo ((in_array("MARPOL", $stcw))?'selected':'')?>>MARPOL</option>
								<option value="STCW Transport and Handling of Dangerous Cargoes" <?php echo ((in_array("STCW Transport and Handling of Dangerous Cargoes", $stcw))?'selected':'')?>>STCW Transport and Handling of Dangerous Cargoes</option>
								<option value="STCW Basic Training for Oil and Chemical Tanker" <?php echo ((in_array("STCW Basic Training for Oil and Chemical Tanker", $stcw))?'selected':'')?>>STCW Basic Training for Oil and Chemical Tanker</option>
								<option value="STCW Basic Training for Liquefied Gas Tanker" <?php echo ((in_array("STCW Basic Training for Liquefied Gas Tanker", $stcw))?'selected':'')?>>STCW Basic Training for Liquefied Gas Tanker</option>
								<option value="Advanced Training for Chemical Tankers" <?php echo ((in_array("Advanced Training for Chemical Tankers", $stcw))?'selected':'')?>>Advanced Training for Chemical Tankers</option>
								<option value="Advanced Training for Liquefied Gas Tanker" <?php echo ((in_array("Advanced Training for Liquefied Gas Tanker", $stcw))?'selected':'')?>>Advanced Training for Liquefied Gas Tanker</option>
								<option value="Advanced Training for Liquefied Gas Tanker" <?php echo ((in_array("Advanced Training for Liquefied Gas Tanker", $stcw))?'selected':'')?>>Advanced Training for Liquefied Gas Tanker</option>
								<option value="Ro-Ro Passenger Ships" <?php echo ((in_array("Ro-Ro Passenger Ships", $stcw))?'selected':'')?>>Ro-Ro Passenger Ships</option>
								<option value="Hygiene Course for Catering Personnel" <?php echo ((in_array("Hygiene Course for Catering Personnel", $stcw))?'selected':'')?>>Hygiene Course for Catering Personnel</option>
								<option value="Ship’s Cook Specialization" <?php echo ((in_array("Ship’s Cook Specialization", $stcw))?'selected':'')?>>Ship's Cook Specialization</option>
								<option value="DP Basic" <?php echo ((in_array("DP Basic", $stcw))?'selected':'')?>>DP Basic</option>
								<option value="DP Advanced" <?php echo ((in_array("DP Advanced", $stcw))?'selected':'')?>>DP Advanced</option>
								<option value="DP Licence" <?php echo ((in_array("DP Licence", $stcw))?'selected':'')?>>DP Licence</option>
							</select>
							</div>
						  </div>
						  </div>
						  <div class="form-row">
							<?php
							$offshore = explode(",",$fetch_cert->offshore);
							?>
							<div class="form-group col-md-12">
							  <label>Offshore Courses</label>
							  <div class="dropdown-mul-7">
								<select name="offshore[]" id="mul-7" multiple placeholder="Select">
								<option value="OPITO E-BOSIET Digital Delivery BOSIET (5703)" <?php echo ((in_array("OPITO E-BOSIET Digital Delivery BOSIET (5703)", $offshore))?'selected':'')?>>OPITO E-BOSIET Digital Delivery BOSIET (5703)</option>
								<option value="OPITO BOSIET with EBS (5700) + CA-EBS (5902)" <?php echo ((in_array("OPITO BOSIET with EBS (5700) + CA-EBS (5902)", $offshore))?'selected':'')?>>OPITO BOSIET with EBS (5700) + CA-EBS (5902)</option>
								<option value="OPITO BOSIET with EBS (5700)" <?php echo ((in_array("OPITO BOSIET with EBS (5700)", $offshore))?'selected':'')?>>OPITO BOSIET with EBS (5700)</option>
								<option value="OPITO FOET with EBS (5858) + CA-EBS (5902)" <?php echo ((in_array("OPITO FOET with EBS (5858) + CA-EBS (5902)", $offshore))?'selected':'')?>>OPITO FOET with EBS (5858) + CA-EBS (5902)</option>
								<option value="OPITO FOET with EBS (5858)" <?php echo ((in_array("OPITO FOET with EBS (5858)", $offshore))?'selected':'')?>>OPITO FOET with EBS (5858)</option>
								<option value="OPITO HUET with EBS (5095) + CA-EBS (5902)" <?php echo ((in_array("OPITO HUET with EBS (5095) + CA-EBS (5902)", $offshore))?'selected':'')?>>OPITO HUET with EBS (5095) + CA-EBS (5902)</option>
								<option value="OPITO  HUET with EBS (5095)" <?php echo ((in_array("OPITO  HUET with EBS (5095)", $offshore))?'selected':'')?>>OPITO  HUET with EBS (5095)</option>
								<option value="OPITO Banksman & Slinger Stage 1 & 2 (9067)" <?php echo ((in_array("OPITO Banksman & Slinger Stage 1 & 2 (9067)", $offshore))?'selected':'')?>>OPITO Banksman & Slinger Stage 1 & 2 (9067)</option>
								<option value="OPITO CA-EBS (5902)" <?php echo ((in_array("OPITO CA-EBS (5902)", $offshore))?'selected':'')?>>OPITO CA-EBS (5902)</option>
							</select>
							</div>
							</div>							
						  </div>
						  <br>

			<!--   from here ---->
						  
						  
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



$('.dropdown-mul-1').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-2').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-3').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-4').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-5').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-6').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-7').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-8').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-9').dropdown({
      limitCount: 5,
      searchable: false
    });
$('.dropdown-mul-10').dropdown({
      limitCount: 100,
      searchable: false
    });
$('.dropdown-mul-11').dropdown({
      limitCount: 5,
      searchable: false
    });
</script>    
</body>
</html>