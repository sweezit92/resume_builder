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
                    	
						  <h2 class="head">Skill</h2>
						  <div class="form-row">
							<?php
							$deck = explode(",",$fetch_cert->deck);
							?>
							<div class="form-group col-md-6">
							  <label>Deck Skills</label>
							  <div class="dropdown-mul-1">
								<select  id="mul-1" name="deck[];" multiple placeholder="Select">									
									<option value="Cleaning & Detailing" <?php echo ((in_array("Cleaning & Detailing", $deck))?'selected':'')?>>Cleaning & Detailing</option>
									<option value="Watchkeeping" <?php echo ((in_array("Watchkeeping", $deck))?'selected':'')?>>Watchkeeping</option>
									<option value="General Repairs & Maintenance" <?php echo ((in_array("General Repairs & Maintenance", $deck))?'selected':'')?>>General Repairs & Maintenance</option>
									<option value="Line Handling" <?php echo ((in_array("Line Handling", $deck))?'selected':'')?>>Line Handling</option>
									<option value="Rigging" <?php echo ((in_array("Rigging", $deck))?'selected':'')?>>Rigging</option>
									<option value="Filling & Fairing" <?php echo ((in_array("Filling & Fairing", $deck))?'selected':'')?>>Filling & Fairing</option>
									<option value="Painting" <?php echo ((in_array("Painting", $deck))?'selected':'')?>>Painting</option>
									<option value="ISM/ISPS Procedures" <?php echo ((in_array("ISM/ISPS Procedures", $deck))?'selected':'')?>>ISM/ISPS Procedures</option>
									<option value="Crane Operation" <?php echo ((in_array("Crane Operation", $deck))?'selected':'')?>>Crane Operation</option>
									<option value="Tender Driving" <?php echo ((in_array("Tender Driving", $deck))?'selected':'')?>>Tender Driving</option>
									<option value="Whipping & Splicing" <?php echo ((in_array("Whipping & Splicing", $deck))?'selected':'')?>>Whipping & Splicing</option>
									<option value="Varnishing" <?php echo ((in_array("Varnishing", $deck))?'selected':'')?>>Varnishing</option>
									<option value="Carpentry" <?php echo ((in_array("Carpentry", $deck))?'selected':'')?>>Carpentry</option>
									<option value="Sail Repairs" <?php echo ((in_array("Sail Repairs", $deck))?'selected':'')?>>Sail Repairs</option>
									<option value="Welding" <?php echo ((in_array("Welding", $deck))?'selected':'')?>>Welding</option>
								</select>
							</div>
							</div>
							<?php
							$propulsion = explode(",",$fetch_cert->propulsion);
							?>
							<div class="form-group col-md-6">
							  <label>Propulsion Skills</label>
							  <div class="dropdown-mul-2">
								<select name="propulsion[]" id="mul-2" multiple placeholder="Select">								
								<option value="Single Screw" <?php echo ((in_array("Single Screw", $propulsion))?'selected':'')?>>Single Screw</option>
								<option value="Water Jet" <?php echo ((in_array("Water Jet", $propulsion))?'selected':'')?>>Water Jet</option>
								<option value="Bow Thruster" <?php echo ((in_array("Bow Thruster", $propulsion))?'selected':'')?>>Bow Thruster</option>
								<option value="Paddle-wheel" <?php echo ((in_array("Paddle-wheel", $propulsion))?'selected':'')?>>Paddle-wheel</option>
								<option value="Sail Power" <?php echo ((in_array("Sail Power", $propulsion))?'selected':'')?>>Sail Power</option>
								<option value="Twin Screw" <?php echo ((in_array("Twin Screw", $propulsion))?'selected':'')?>>Twin Screw</option>
								<option value="Twin Screw (with Kort nozzle)" <?php echo ((in_array("Twin Screw (with Kort nozzle)", $propulsion))?'selected':'')?>>Twin Screw (with Kort nozzle)</option>
								<option value="Azipod" <?php echo ((in_array("Azipod", $propulsion))?'selected':'')?>>Azipod</option>
								<option value="Azimut Drive (360° Rotation)" <?php echo ((in_array("Azimut Drive (360° Rotation)", $propulsion))?'selected':'')?>>Azimut Drive (360&deg; Rotation)</option>
								<option value="Single Screw (with Kort nozzle)" <?php echo ((in_array("Single Screw (with Kort nozzle)", $propulsion))?'selected':'')?>>Single Screw (with Kort nozzle)</option>
								<option value="Zero Speed Stabiliser" <?php echo ((in_array("Zero Speed Stabiliser", $propulsion))?'selected':'')?>>Zero Speed Stabiliser</option>
								<option value="Voith Schneider" <?php echo ((in_array("Voith Schneider", $propulsion))?'selected':'')?>>Voith Schneider</option>
								<option value="Sail Racing" <?php echo ((in_array("Sail Racing", $propulsion))?'selected':'')?>>Sail Racing</option>
							</select>
							</div>
						  </div>
						  </div>
						  <div class="form-row">
						  	<?php
							$engineering = explode(",",$fetch_cert->engineering);
							?>
							<div class="form-group col-md-6">
							  <label>Engineering Skills</label>
							  <div class="dropdown-mul-4">
								<select name="engineering[]" id="mul-4" multiple placeholder="Select">								
								<option value="Electrical" <?php echo ((in_array("Electrical", $engineering))?'selected':'')?>>Electrical</option>
								<option value="Outboard Engines" <?php echo ((in_array("Outboard Engines", $engineering))?'selected':'')?>>Outboard Engines</option>
								<option value="AV & IT" <?php echo ((in_array("AV & IT", $engineering))?'selected':'')?>>AV & IT</option>
								<option value="HVAC" <?php echo ((in_array("HVAC", $engineering))?'selected':'')?>>HVAC</option>
								<option value="Mechanical" <?php echo ((in_array("Mechanical", $engineering))?'selected':'')?>>Mechanical</option>
								<option value="Air Conditioning" <?php echo ((in_array("Air Conditioning", $engineering))?'selected':'')?>>Air Conditioning</option>
								<option value="Steering Gear" <?php echo ((in_array("Steering Gear", $engineering))?'selected':'')?>>Steering Gear</option>
								<option value="Windlass & Winch Systems" <?php echo ((in_array("Windlass & Winch Systems", $engineering))?'selected':'')?>>Windlass & Winch Systems</option>
								<option value="Refrigeration" <?php echo ((in_array("Refrigeration", $engineering))?'selected':'')?>>Refrigeration</option>
								<option value="Appliance Repair/ Maintenance" <?php echo ((in_array("Appliance Repair/ Maintenance", $engineering))?'selected':'')?>>Appliance Repair/ Maintenance</option>
								<option value="Plumbing" <?php echo ((in_array("Plumbing", $engineering))?'selected':'')?>>Plumbing</option>
								<option value="Tile Layer/ Maintenance" <?php echo ((in_array("Tile Layer/ Maintenance", $engineering))?'selected':'')?>>Tile Layer/ Maintenance</option>
								<option value="Wood Finishing/ Repair" <?php echo ((in_array("Wood Finishing/ Repair", $engineering))?'selected':'')?>>Wood Finishing/ Repair</option>
								<option value="Generators & Alternators" <?php echo ((in_array("Generators & Alternators", $engineering))?'selected':'')?>>Generators & Alternators</option>
								<option value="Diesel Engines" <?php echo ((in_array("Diesel Engines", $engineering))?'selected':'')?>>Diesel Engines</option>
								<option value="Electro Hydraulic Controls" <?php echo ((in_array("Electro Hydraulic Controls", $engineering))?'selected':'')?>>Electro Hydraulic Controls</option>
								<option value="Hydraulic Systems" <?php echo ((in_array("Hydraulic Systems", $engineering))?'selected':'')?>>Hydraulic Systems</option>
								<option value="Diesel Electric" <?php echo ((in_array("Diesel Electric", $engineering))?'selected':'')?>>Diesel Electric</option>
								<option value="Water Makers" <?php echo ((in_array("Water Makers", $engineering))?'selected':'')?>>Water Makers</option>
								<option value="Metal/Parts Fabrication" <?php echo ((in_array("Metal/Parts Fabrication", $engineering))?'selected':'')?>>Metal/Parts Fabrication</option>
								<option value="Restoration Projects" <?php echo ((in_array("Restoration Projects", $engineering))?'selected':'')?>>Restoration Projects</option>
								<option value="Water Treatment" <?php echo ((in_array("Water Treatment", $engineering))?'selected':'')?>>Water Treatment</option>
								<option value="Gearboxes" <?php echo ((in_array("Gearboxes", $engineering))?'selected':'')?>>Gearboxes</option>
								<option value="Water Jet Propulsion / Jet Skis" <?php echo ((in_array("Water Jet Propulsion / Jet Skis", $engineering))?'selected':'')?>>Water Jet Propulsion / Jet Skis</option>
								<option value="Solar Power" <?php echo ((in_array("Solar Power", $engineering))?'selected':'')?>>Solar Power</option>
								<option value="Wind Propulsion" <?php echo ((in_array("Wind Propulsion", $engineering))?'selected':'')?>>Wind Propulsion</option>
								<option value="Gas Turbine" <?php echo ((in_array("Gas Turbine", $engineering))?'selected':'')?>>Gas Turbine</option>
								<option value="Gas Fuel / Tri Fuel" <?php echo ((in_array("Gas Fuel / Tri Fuel", $engineering))?'selected':'')?>>Gas Fuel / Tri Fuel</option>
								<option value="Fuel Cell Systems" <?php echo ((in_array("Fuel Cell Systems", $engineering))?'selected':'')?>>Fuel Cell Systems</option>
								<option value="Biodiesel Fuel" <?php echo ((in_array("Biodiesel Fuel", $engineering))?'selected':'')?>>Biodiesel Fuel</option>
								<option value="Steam Turbine" <?php echo ((in_array("Steam Turbine", $engineering))?'selected':'')?>>Steam Turbine</option>
							</select>
							</div>
							</div>
							<?php
							$interior = explode(",",$fetch_cert->interior);
							?>
							<div class="form-group col-md-6">
							  <label>Interior Skills</label>
							  <div class="dropdown-mul-3">
								<select name="interior[]" id="mul-3" multiple placeholder="Select">								
								<option value="Detailing" <?php echo ((in_array("Detailing", $interior))?'selected':'')?>>Detailing</option>
								<option value="Hospitality" <?php echo ((in_array("Hospitality", $interior))?'selected':'')?>>Hospitality</option>
								<option value="Management" <?php echo ((in_array("Management", $interior))?'selected':'')?>>Management</option>
								<option value="Table Service & Settings" <?php echo ((in_array("Table Service & Settings", $interior))?'selected':'')?>>Table Service & Settings</option>
								<option value="Accounting & Budgeting" <?php echo ((in_array("Accounting & Budgeting", $interior))?'selected':'')?>>Accounting & Budgeting</option>
								<option value="Laundry & Housekeeping" <?php echo ((in_array("Laundry & Housekeeping", $interior))?'selected':'')?>>Laundry & Housekeeping</option>
								<option value="Provisioning" <?php echo ((in_array("Provisioning", $interior))?'selected':'')?>>Provisioning</option>
								<option value="Flower Arranging" <?php echo ((in_array("Flower Arranging", $interior))?'selected':'')?>>Flower Arranging</option>
								<option value="Silver Service" <?php echo ((in_array("Silver Service", $interior))?'selected':'')?>>Silver Service</option>
								<option value="Wardrobe Care" <?php echo ((in_array("Wardrobe Care", $interior))?'selected':'')?>>Wardrobe Care</option>
								<option value="Heads & Beds" <?php echo ((in_array("Heads & Beds", $interior))?'selected':'')?>>Heads & Beds</option>
								<option value="Laundry & Ironing" <?php echo ((in_array("Laundry & Ironing", $interior))?'selected':'')?>>Laundry & Ironing</option>
								<option value="Lines & Fenders" <?php echo ((in_array("Lines & Fenders", $interior))?'selected':'')?>>Lines & Fenders</option>
								<option value="Child Care" <?php echo ((in_array("Child Care", $interior))?'selected':'')?>>Child Care</option>
								<option value="Aged Care" <?php echo ((in_array("Aged Care", $interior))?'selected':'')?>>Aged Care</option>
								<option value="Galley Assistance" <?php echo ((in_array("Galley Assistance", $interior))?'selected':'')?>>Galley Assistance</option>
								<option value="Waiter" <?php echo ((in_array("Waiter", $interior))?'selected':'')?>>Waiter</option>
								<option value="Bartender" <?php echo ((in_array("Bartender", $interior))?'selected':'')?>>Bartender</option>
								<option value="Barista" <?php echo ((in_array("Barista", $interior))?'selected':'')?>>Barista</option>
								<option value="Nurse Assistant" <?php echo ((in_array("Nurse Assistant", $interior))?'selected':'')?>>Nurse Assistant</option>
							</select>
							</div>
							</div>
							
						  </div>
						  <div class="form-row">
							<?php
							$culinary = explode(",",$fetch_cert->culinary);
							?>
							<div class="form-group col-md-6">
							  <label>Culinary Skills</label>
							  <div class="dropdown-mul-5">
								<select name="culinary[]" id="mul-5" multiple placeholder="Select">
								<option value="French cuisine" <?php echo ((in_array("French cuisine", $culinary))?'selected':'')?>>French cuisine</option>
								<option value="Thai cuisine" <?php echo ((in_array("Thai cuisine", $culinary))?'selected':'')?>>Thai cuisine</option>
								<option value="Healthy / Clean" <?php echo ((in_array("Healthy / Clean", $culinary))?'selected':'')?>>Healthy / Clean</option>
								<option value="Mid Eastern cuisine" <?php echo ((in_array("Mid Eastern cuisine", $culinary))?'selected':'')?>>Mid Eastern cuisine</option>
								<option value="Greek cuisine" <?php echo ((in_array("Greek cuisine", $culinary))?'selected':'')?>>Greek cuisine</option>
								<option value="Spanish cuisine" <?php echo ((in_array("Spanish cuisine", $culinary))?'selected':'')?>>Spanish cuisine</option>
								<option value="Allergies" <?php echo ((in_array("Allergies", $culinary))?'selected':'')?>>Allergies</option>
								<option value="Indian cuisine" <?php echo ((in_array("Indian cuisine", $culinary))?'selected':'')?>>Indian cuisine</option>
								<option value="Fusion" <?php echo ((in_array("Fusion", $culinary))?'selected':'')?>>Fusion</option>
								<option value="Chinese cuisine" <?php echo ((in_array("Chinese cuisine", $culinary))?'selected':'')?>>Chinese cuisine</option>
								<option value="German cuisine" <?php echo ((in_array("German cuisine", $culinary))?'selected':'')?>>German cuisine</option>
								<option value="Italian cuisine" <?php echo ((in_array("Italian cuisine", $culinary))?'selected':'')?>>Italian cuisine</option>
								<option value="Nouvelle" <?php echo ((in_array("Nouvelle", $culinary))?'selected':'')?>>Nouvelle</option>
								<option value="Vegetarian food" <?php echo ((in_array("Vegetarian food", $culinary))?'selected':'')?>>Vegetarian food</option>
								<option value="Halal" <?php echo ((in_array("Halal", $culinary))?'selected':'')?>>Halal</option>
								<option value="Eastern European cuisine" <?php echo ((in_array("Eastern European cuisine", $culinary))?'selected':'')?>>Eastern European cuisine</option>
								<option value="Caribbean cuisine" <?php echo ((in_array("Caribbean cuisine", $culinary))?'selected':'')?>>Caribbean cuisine</option>
								<option value="Vegan food" <?php echo ((in_array("Vegan food", $culinary))?'selected':'')?>>Vegan food</option>
								<option value="Mexican cuisine" <?php echo ((in_array("Mexican cuisine", $culinary))?'selected':'')?>>Mexican cuisine</option>
								<option value="Kosher" <?php echo ((in_array("Kosher", $culinary))?'selected':'')?>>Kosher</option>
								<option value="Japanese cuisine" <?php echo ((in_array("Japanese cuisine", $culinary))?'selected':'')?>>Japanese cuisine</option>
							</select>
							</div>
							</div>
							<?php
							$massage = explode(",",$fetch_cert->massage);
							?>
							<div class="form-group col-md-6">
							  <label>Massage Skills</label>
							  <div class="dropdown-mul-6">
								<select name="massage[]" id="mul-6" multiple placeholder="Select">
								<option value="Swedish" <?php echo ((in_array("Swedish", $massage))?'selected':'')?>>Swedish</option>
								<option value="Aromatherapy" <?php echo ((in_array("Aromatherapy", $massage))?'selected':'')?>>Aromatherapy</option>
								<option value="Deep Tissue" <?php echo ((in_array("Deep Tissue", $massage))?'selected':'')?>>Deep Tissue</option>
								<option value="Shiatsu" <?php echo ((in_array("Shiatsu", $massage))?'selected':'')?>>Shiatsu</option>
								<option value="Sports" <?php echo ((in_array("Sports", $massage))?'selected':'')?>>Sports</option>
								<option value="Reflexology" <?php echo ((in_array("Reflexology", $massage))?'selected':'')?>>Reflexology</option>
								<option value="Pregnancy / Prenatal" <?php echo ((in_array("Pregnancy / Prenatal", $massage))?'selected':'')?>>Pregnancy / Prenatal</option>
								<option value="Hot Stone" <?php echo ((in_array("Hot Stone", $massage))?'selected':'')?>>Hot Stone</option>
								<option value="Thai" <?php echo ((in_array("Thai", $massage))?'selected':'')?>>Thai</option>
							</select>
							</div>
							</div>
						  </div>
						  <div class="form-row">
							<?php
							$personnal_trainer = explode(",",$fetch_cert->personnal_trainer);
							?>
							<div class="form-group col-md-6">
							  <label>Personal Trainer Skills</label>
							  <div class="dropdown-mul-7">
								<select name="personnal_trainer[]" id="mul-7" multiple placeholder="Select">
								<option value="Aerobics/ Interval Training" <?php echo ((in_array("Aerobics/ Interval Training", $personnal_trainer))?'selected':'')?>>Aerobics/ Interval Training</option>
								<option value="Circuits" <?php echo ((in_array("Circuits", $personnal_trainer))?'selected':'')?>>Circuits</option>
								<option value="Weights" <?php echo ((in_array("Weights", $personnal_trainer))?'selected':'')?>>Weights</option>
								<option value="Running" <?php echo ((in_array("Running", $personnal_trainer))?'selected':'')?>>Running</option>
								<option value="Nutrition & Diet Plans" <?php echo ((in_array("Nutrition & Diet Plans", $personnal_trainer))?'selected':'')?>>Nutrition & Diet Plans</option>
								<option value="Yoga" <?php echo ((in_array("Yoga", $personnal_trainer))?'selected':'')?>>Yoga</option>
								<option value="Pilates" <?php echo ((in_array("Pilates", $personnal_trainer))?'selected':'')?>>Pilates</option>
								<option value="Boxing & Sparring" <?php echo ((in_array("Boxing & Sparring", $personnal_trainer))?'selected':'')?>>Boxing & Sparring</option>
								<option value="Swimming" <?php echo ((in_array("Swimming", $personnal_trainer))?'selected':'')?>>Swimming</option>
								<option value="Rowing" <?php echo ((in_array("Rowing", $personnal_trainer))?'selected':'')?>>Rowing</option>
								<option value="Martial Arts" <?php echo ((in_array("Martial Arts", $personnal_trainer))?'selected':'')?>>Martial Arts</option>
								<option value="Cycling" <?php echo ((in_array("Cycling", $personnal_trainer))?'selected':'')?>>Cycling</option>
								<option value="Kettlebells" <?php echo ((in_array("Kettlebells", $personnal_trainer))?'selected':'')?>>Kettlebells</option>
							</select>
							</div>
							</div>
							<?php
							$other = explode(",",$fetch_cert->other);
							?>
							<div class="form-group col-md-6">
							  <label>Other Skills</label>
							  <div class="dropdown-mul-8">
								<select name="other[]" id="mul-8" multiple placeholder="Select">
								<option value="Staff Management" <?php echo ((in_array("Staff Management", $other))?'selected':'')?>>Staff Management</option>
								<option value="Staff Development" <?php echo ((in_array("Staff Development", $other))?'selected':'')?>>Staff Development</option>
								<option value="Performance Management" <?php echo ((in_array("Performance Management", $other))?'selected':'')?>>Performance Management</option>
								<option value="Strategy Development" <?php echo ((in_array("Strategy Development", $other))?'selected':'')?>>Strategy Development</option>
								<option value="Process Improvement" <?php echo ((in_array("Process Improvement", $other))?'selected':'')?>>Process Improvement</option>
								<option value="Implementation Management" <?php echo ((in_array("Implementation Management", $other))?'selected':'')?>>Implementation Management</option>
								<option value="Contract Management" <?php echo ((in_array("Contract Management", $other))?'selected':'')?>>Contract Management</option>
								<option value="Change Management" <?php echo ((in_array("Change Management", $other))?'selected':'')?>>Change Management</option>
								<option value="Crisis Management" <?php echo ((in_array("Crisis Management", $other))?'selected':'')?>>Crisis Management</option>
								<option value="Conflict & Query Resolution" <?php echo ((in_array("Conflict & Query Resolution", $other))?'selected':'')?>>Conflict & Query Resolution</option>
								<option value="Client Service & Communication" <?php echo ((in_array("Client Service & Communication", $other))?'selected':'')?>>Client Service & Communication</option>
								<option value="Cost & Budget Management" <?php echo ((in_array("Cost & Budget Management", $other))?'selected':'')?>>Cost & Budget Management</option>
								<option value="Report Writing" <?php echo ((in_array("Report Writing", $other))?'selected':'')?>>Report Writing</option>
								<option value="HR & Labour Relations" <?php echo ((in_array("HR & Labour Relations", $other))?'selected':'')?>>HR & Labour Relations</option>
								<option value="Recruitment & Selection" <?php echo ((in_array("Recruitment & Selection", $other))?'selected':'')?>>Recruitment & Selection</option>
								<option value="Risk Management" <?php echo ((in_array("Risk Management", $other))?'selected':'')?>>Risk Management</option>
								<option value="Relationship Building" <?php echo ((in_array("Relationship Building", $other))?'selected':'')?>>Relationship Building</option>
								<option value="Customer Service" <?php echo ((in_array("Customer Service", $other))?'selected':'')?>>Customer Service</option>
								<option value="Analytical Thinking" <?php echo ((in_array("Analytical Thinking", $other))?'selected':'')?>>Analytical Thinking</option>
								<option value="Data Control" <?php echo ((in_array("Data Control", $other))?'selected':'')?>>Data Control</option>
								<option value="Strategic Planning" <?php echo ((in_array("Strategic Planning", $other))?'selected':'')?>>Strategic Planning</option>
								<option value="Task Management" <?php echo ((in_array("Task Management", $other))?'selected':'')?>>Task Management</option>
								<option value="Project Management" <?php echo ((in_array("Project Management", $other))?'selected':'')?>>Project Management</option>
								<option value="Admin Management" <?php echo ((in_array("Admin Management", $other))?'selected':'')?>>Admin Management</option>
								<option value="Office Management" <?php echo ((in_array("Office Management", $other))?'selected':'')?>>Office Management</option>
								<option value="Secretarial Functions" <?php echo ((in_array("Secretarial Functions", $other))?'selected':'')?>>Secretarial Functions</option>
								<option value="Wages/Salaries" <?php echo ((in_array("Wages/Salaries", $other))?'selected':'')?>>Wages/Salaries</option>
								<option value="Procurement" <?php echo ((in_array("Procurement", $other))?'selected':'')?>>Procurement</option>
								<option value="Demand Planning" <?php echo ((in_array("Demand Planning", $other))?'selected':'')?>>Demand Planning</option>
								<option value="Stock Control" <?php echo ((in_array("Stock Control", $other))?'selected':'')?>>Stock Control</option>
								<option value="Quality Control" <?php echo ((in_array("Quality Control", $other))?'selected':'')?>>Quality Control</option>
								<option value="Supplier Sourcing" <?php echo ((in_array("Supplier Sourcing", $other))?'selected':'')?>>Supplier Sourcing</option>
								<option value="Supplier Negotiations" <?php echo ((in_array("Supplier Negotiations", $other))?'selected':'')?>>Supplier Negotiations</option>
								<option value="Logistics Management" <?php echo ((in_array("Logistics Management", $other))?'selected':'')?>>Logistics Management</option>
							</select>
							</div>
						  </div>
						  </div>
						  <div class="main_div">
						  <?php
							$language = explode(",",$fetch_cert->language);
							$level = explode(",",$fetch_cert->level);
							$count_total = count($language);
							for($i = 0 ; $i < $count_total ; $i++){
						  ?>
							<div class=" yo<?php echo $i;?>">
						  	<div class="form-row">
							<div class="form-group col-md-6">
							  <label>Language</label>
							  <input class="form-control" id="date" name="language[]"  value="<?php echo $language[$i];?>" placeholder="Language" type="text"/>
							</div>
							<div class="form-group col-md-6">
							  <label>Proficiency Level</label>
							  <select id="inputState" name="level[]" class="form-control">
								<option selected>Choose...</option>
								<option value="1" <?php echo (($level[$i] == "1")?'selected':'');?>>Level 1</option>
								<option value="2" <?php echo (($level[$i] == "2")?'selected':'');?>>Level 2</option>
								<option value="3" <?php echo (($level[$i] == "3")?'selected':'');?>>Level 3</option>
								<option value="4" <?php echo (($level[$i] == "4")?'selected':'');?>>Level 4</option>
								<option value="5" <?php echo (($level[$i] == "5")?'selected':'');?>>Level 5</option>
							  </select>
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
						  
						  <a href="javascript:void(0);" onclick="add_another();" class="btn btn-primary" style="margin-bottom:10px;">Add Another Language</a>
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

function rmv(e)
{
	$( ".yo"+e+"" ).remove();
}

function add_another() 
{
	
	var max_fields      = 30; 
    var wrapper         = $(".main_div");
	var htmlcontent = '<div class="atrri_add_cont"><hr><div class="form-row language_div"><div class="form-group col-md-6"><label>Language</label><input class="form-control" id="date" name="language[]" placeholder="Language" type="text"/></div><div class="form-group col-md-6"><label>Proficiency Level</label><select id="inputState" name="level[]" class="form-control"><option selected>Choose...</option><option value="1">Level 1</option><option value="2">Level 2</option><option value="3">Level 3</option><option value="4">Level 4</option><option value="5">Level 5</option></select></div></div><a href="javascript:void(0);" class="remove btn btn-danger" style="margin-bottom:20px;">Remove</a></div>';
	
	var x = 1;

        if(x < max_fields){ 
          x++; 
          $(wrapper).append(htmlcontent); 
        }
	$("body").on("click",".remove",function(){ 
	  $(this).parents(".atrri_add_cont").remove();
  });
}


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