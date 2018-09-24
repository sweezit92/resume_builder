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
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Deck Skills</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="Cleaning & Detailing">Cleaning & Detailing</option>
								<option value="Watchkeeping">Watchkeeping</option>
								<option value="General Repairs & Maintenance">General Repairs & Maintenance</option>
								<option value="Line Handling">Line Handling</option>
								<option value="Rigging">Rigging</option>
								<option value="Filling & Fairing">Filling & Fairing</option>
								<option value="Painting">Painting</option>
								<option value="ISM/ISPS Procedures">ISM/ISPS Procedures</option>
								<option value="Crane Operation">Crane Operation</option>
								<option value="Tender Driving">Tender Driving</option>
								<option value="Whipping & Splicing">Whipping & Splicing</option>
								<option value="Varnishing">Varnishing</option>
								<option value="Carpentry">Carpentry</option>
								<option value="Sail Repairs">Sail Repairs</option>
								<option value="Welding">Welding</option>
							</select>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Propulsion Skills</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="Single Screw">Single Screw</option>
								<option value="Water Jet">Water Jet</option>
								<option value="Bow Thruster">Bow Thruster</option>
								<option value="Paddle-wheel">Paddle-wheel</option>
								<option value="Sail Power">Sail Power</option>
								<option value="Twin Screw">Twin Screw</option>
								<option value="Twin Screw (with Kort nozzle)">Twin Screw (with Kort nozzle)</option>
								<option value="Azipod">Azipod</option>
								<option value="Azimut Drive (360° Rotation)">Azimut Drive (360&deg; Rotation)</option>
								<option value="Single Screw (with Kort nozzle)">Single Screw (with Kort nozzle)</option>
								<option value="Zero Speed Stabiliser">Zero Speed Stabiliser</option>
								<option value="Voith Schneider">Voith Schneider</option>
								<option value="Single Screw">Single Screw</option>
								<option value="Sail Racing">Sail Racing</option>
							</select>
							</div>
						  </div>
						  <div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Interior Skills</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="Detailing">Detailing</option>
								<option value="Hospitality">Hospitality</option>
								<option value="Management">Management</option>
								<option value="Table Service & Settings">Table Service & Settings</option>
								<option value="Accounting & Budgeting">Accounting & Budgeting</option>
								<option value="Laundry & Housekeeping">Laundry & Housekeeping</option>
								<option value="Provisioning">Provisioning</option>
								<option value="Flower Arranging">Flower Arranging</option>
								<option value="Silver Service">Silver Service</option>
								<option value="Wardrobe Care">Wardrobe Care</option>
								<option value="Heads & Beds">Heads & Beds</option>
								<option value="Laundry & Ironing">Laundry & Ironing</option>
								<option value="Lines & Fenders">Lines & Fenders</option>
								<option value="Child Care">Child Care</option>
								<option value="Aged Care">Aged Care</option>
								<option value="Galley Assistance">Galley Assistance</option>
								<option value="Waiter">Waiter</option>
								<option value="Bartender">Bartender</option>
								<option value="Barista">Barista</option>
								<option value="Nurse Assistant">Nurse Assistant</option>
							</select>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Engineering Skills</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="Electrical">Electrical</option>
								<option value="Outboard Engines">Outboard Engines</option>
								<option value="AV & IT">AV & IT</option>
								<option value="HVAC">HVAC</option>
								<option value="Mechanical">Mechanical</option>
								<option value="Air Conditioning">Air Conditioning</option>
								<option value="Steering Gear">Steering Gear</option>
								<option value="Windlass & Winch Systems">Windlass & Winch Systems</option>
								<option value="Refrigeration">Refrigeration</option>
								<option value="Appliance Repair/ Maintenance">Appliance Repair/ Maintenance</option>
								<option value="Plumbing">Plumbing</option>
								<option value="Tile Layer/ Maintenance">Tile Layer/ Maintenance</option>
								<option value="Wood Finishing/ Repair">Wood Finishing/ Repair</option>
								<option value="Generators & Alternators">Generators & Alternators</option>
								<option value="Diesel Engines">Diesel Engines</option>
								<option value="Electro Hydraulic Controls">Electro Hydraulic Controls</option>
								<option value="Hydraulic Systems">Hydraulic Systems</option>
								<option value="Diesel Electric">Diesel Electric</option>
								<option value="Water Makers">Water Makers</option>
								<option value="Metal/Parts Fabrication">Metal/Parts Fabrication</option>
								<option value="Restoration Projects">Restoration Projects</option>
								<option value="Water Treatment">Water Treatment</option>
								<option value="Gearboxes">Gearboxes</option>
								<option value="Water Jet Propulsion / Jet Skis">Water Jet Propulsion / Jet Skis</option>
								<option value="Solar Power">Solar Power</option>
								<option value="Wind Propulsion">Wind Propulsion</option>
								<option value="Gas Turbine">Gas Turbine</option>
								<option value="Gas Fuel / Tri Fuel">Gas Fuel / Tri Fuel</option>
								<option value="Fuel Cell Systems">Fuel Cell Systems</option>
								<option value="Biodiesel Fuel">Biodiesel Fuel</option>
								<option value="Steam Turbine">Steam Turbine</option>
							</select>
							</div>
						  </div>
						  <div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Culinary Skills</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="French cuisine">French cuisine</option>
								<option value="Thai cuisine">Thai cuisine</option>
								<option value="Healthy / Clean">Healthy / Clean</option>
								<option value="Mid Eastern cuisine">Mid Eastern cuisine</option>
								<option value="Greek cuisine">Greek cuisine</option>
								<option value="Spanish cuisine">Spanish cuisine</option>
								<option value="Allergies">Allergies</option>
								<option value="Indian cuisine">Indian cuisine</option>
								<option value="Fusion">Fusion</option>
								<option value="Chinese cuisine">Chinese cuisine</option>
								<option value="German cuisine">German cuisine</option>
								<option value="Italian cuisine">Italian cuisine</option>
								<option value="Nouvelle">Nouvelle</option>
								<option value="Vegetarian food">Vegetarian food</option>
								<option value="Halal">Halal</option>
								<option value="Eastern European cuisine">Eastern European cuisine</option>
								<option value="Caribbean cuisine">Caribbean cuisine</option>
								<option value="Vegan food">Vegan food</option>
								<option value="Mexican cuisine">Mexican cuisine</option>
								<option value="Kosher">Kosher</option>
								<option value="Japanese cuisine">Japanese cuisine</option>
							</select>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Massage Skills</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="Swedish">Swedish</option>
								<option value="Aromatherapy">Aromatherapy</option>
								<option value="Deep Tissue">Deep Tissue</option>
								<option value="Shiatsu">Shiatsu</option>
								<option value="Sports">Sports</option>
								<option value="Reflexology">Reflexology</option>
								<option value="Pregnancy / Prenatal">Pregnancy / Prenatal</option>
								<option value="Hot Stone">Hot Stone</option>
								<option value="Thai">Thai</option>
							</select>
							</div>
						  </div>
						  <div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Personal Trainer Skills</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="Aerobics/ Interval Training">Aerobics/ Interval Training</option>
								<option value="Circuits">Circuits</option>
								<option value="Weights">Weights</option>
								<option value="Running">Running</option>
								<option value="Nutrition & Diet Plans">Nutrition & Diet Plans</option>
								<option value="Yoga">Yoga</option>
								<option value="Pilates">Pilates</option>
								<option value="Boxing & Sparring">Boxing & Sparring</option>
								<option value="Swimming">Swimming</option>
								<option value="Rowing">Rowing</option>
								<option value="Martial Arts">Martial Arts</option>
								<option value="Cycling">Cycling</option>
								<option value="Kettlebells">Kettlebells</option>
							</select>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Other Skills</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Skills</option>
								<option value="Staff Management">Staff Management</option>
								<option value="Staff Development">Staff Development</option>
								<option value="Performance Management">Performance Management</option>
								<option value="Strategy Development">Strategy Development</option>
								<option value="Process Improvement">Process Improvement</option>
								<option value="Implementation Management">Implementation Management</option>
								<option value="Contract Management">Contract Management</option>
								<option value="Change Management">Change Management</option>
								<option value="Crisis Management">Crisis Management</option>
								<option value="Conflict & Query Resolution">Conflict & Query Resolution</option>
								<option value="Client Service & Communication">Client Service & Communication</option>
								<option value="Cost & Budget Management">Cost & Budget Management</option>
								<option value="Report Writing">Report Writing</option>
								<option value="HR & Labour Relations">HR & Labour Relations</option>
								<option value="Recruitment & Selection">Recruitment & Selection</option>
								<option value="Risk Management">Risk Management</option>
								<option value="Relationship Building">Relationship Building</option>
								<option value="Customer Service">Customer Service</option>
								<option value="Analytical Thinking">Analytical Thinking</option>
								<option value="Data Control">Data Control</option>
								<option value="Strategic Planning">Strategic Planning</option>
								<option value="Task Management">Task Management</option>
								<option value="Project Management">Project Management</option>
								<option value="Admin Management">Admin Management</option>
								<option value="Office Management">Office Management</option>
								<option value="Secretarial Functions">Secretarial Functions</option>
								<option value="Wages/Salaries">Wages/Salaries</option>
								<option value="Procurement">Procurement</option>
								<option value="Demand Planning">Demand Planning</option>
								<option value="Stock Control">Stock Control</option>
								<option value="Quality Control">Quality Control</option>
								<option value="Supplier Sourcing">Supplier Sourcing</option>
								<option value="Supplier Negotiations">Supplier Negotiations</option>
								<option value="Logistics Management">Logistics Management</option>
							</select>
							</div>
						  </div>

						  <div id="main_div">
						  	<div class="form-row" id="language_div">
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Language</label>
							  <input class="form-control" id="date" name="date" placeholder="Language" type="text"/>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Proficiency Level</label>
							  <select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option value="Level 1">Level 1</option>
								<option value="Level 2">Level 2</option>
								<option value="Level 3">Level 3</option>
								<option value="Level 4">Level 4</option>
								<option value="Level 5">Level 5</option>
							  </select>
							</div>
						  </div>
						  </div>
						  
						  <a href="javascript:void(0);" onclick="add_another();" class="btn btn-primary" style="margin-bottom:10px;">Add Another Language</a>
						  <br>
						  <div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Certificates</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Certificates</option>
								<option value="COC Reg. II/2 Master Unlimited">COC Reg. II/2 Master Unlimited</option>
								<option value="DPO (Dynamic Position Officer)">DPO (Dynamic Position Officer)</option>
								<option value="COC Reg. II/3 Master 500">COC Reg. II/3 Master 500</option>
								<option value="COC Reg. II/2 Chief Officer Unlimited">COC Reg. II/2 Chief Officer Unlimited</option>
								<option value="COC Reg. II/1 3rd Officer">COC Reg. II/1 3rd Officer</option>
								<option value="COC Reg. II/5 (Able Seaman)">COC Reg. II/5 (Able Seaman)</option>
								<option value="COC Reg. II/4 (Ordinary Seaman)">COC Reg. II/4 (Ordinary Seaman)</option>
								<option value="COC Reg. III/2 Chief Engineer Unlimited">COC Reg. III/2 Chief Engineer Unlimited</option>
								<option value="COC Reg. III/2 2nd Engineer">COC Reg. III/2 2nd Engineer</option>
								<option value="COC Reg. III/1 3rd Engineer">COC Reg. III/1 3rd Engineer</option>
								<option value="COC Reg. III/5 Motorman">COC Reg. III/5 Motorman</option>
								<option value="COC Reg. III/4 Motorman (Oiler)">COC Reg. III/4 Motorman (Oiler)</option>
								<option value="COC Reg. II/7 Electrician">COC Reg. II/7 Electrician</option>
								<option value="COC Reg. II/6 Electro –Technical Officer">COC Reg. II/6 Electro -Technical Officer</option>
								<option value="Fitter">Fitter</option>
								<option value="Ship's Cook">Ship's Cook</option>
								<option value="Deck Cadet">Deck Cadet</option>
								<option value="Engine Cadet">Engine Cadet</option>
								<option value="Steward">Steward</option>
								<option value="Waiter">Waiter</option>
								<option value="Welder Certificate">Welder Certificate</option>
								<option value="Locksmith">Locksmith</option>
								<option value="RYA Powerboat II">RYA Powerboat II</option>
								<option value="Nanny">Nanny</option>
								<option value="Silver Service">Silver Service</option>
								<option value="Padi Open Water">Padi Open Water</option>
								<option value="CIDESCO Beauty Therapy">CIDESCO Beauty Therapy</option>
								<option value="Food Hygiene Level 2">Food Hygiene Level 2</option>
								<option value="Flower Arranging Course">Flower Arranging Course</option>
								<option value="Wine Course">Wine Course</option>
								<option value="Butler Training & Food Hygiene Level 1">Butler Training & Food Hygiene Level 1</option>
								<option value="STCW Certificates High Voltage (Operational)">STCW Certificates High Voltage (Operational)</option>
								<option value="High Voltage (Management)">High Voltage (Management)</option>
								<option value="MCA AEC">MCA AEC</option>
								<option value="RYA Coastal Skipper">RYA Coastal Skipper</option>
								<option value="MCA Master 200 GT (Yacht)">MCA Master 200 GT (Yacht)</option>
								<option value="Marine Electrical/Electronics, IT">Marine Electrical/Electronics, IT</option>
							</select>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">STCW Certificates</label>
							  <select class="custom-select" multiple>
								<option selected disabled>Choose Certificates</option>
								<option value="STCW Basic Safety Training (BST)">STCW Basic Safety Training (BST)</option>
								<option value="STCW Advanced Fire Fighting">STCW Advanced Fire Fighting</option>
								<option value="STCW Personal Survival Techniques (PST)">STCW Personal Survival Techniques (PST)</option>
								<option value="STCW Personal Safety and Social Responsibility on Board (PSSR)">STCW Personal Safety and Social Responsibility on Board (PSSR)</option>
								<option value="STCW Medical First Aid">STCW Medical First Aid</option>
								<option value="STCW Medical Care">STCW Medical Care</option>
								<option value="STCW Proficiency in Survival Craft (PSCRB)">STCW Proficiency in Survival Craft (PSCRB)</option>
								<option value="STCW Proficiency in Fast Rescue">STCW Proficiency in Fast Rescue</option>
								<option value="STCW Security Awareness">STCW Security Awareness</option>
								<option value="Maritime English">Maritime English</option>
								<option value="Familiarization Safety Training for Ratings">Familiarization Safety Training for Ratings</option>
								<option value="Motorman Course">Motorman Course</option>
								<option value="Bridge Team Management">Bridge Team Management</option>
								<option value="Ship Handling">Ship Handling</option>
								<option value="Medical Care">Medical Care</option>
								<option value="STCW Designated Security Duties">STCW Designated Security Duties</option>
								<option value="STCW Ship Security Officer">STCW Ship Security Officer</option>
								<option value="GMDSS">GMDSS</option>
								<option value="ECDIS">ECDIS</option>
								<option value="HELM">HELM</option>
								<option value="ARPA">ARPA</option>
								<option value="MARPOL">MARPOL</option>
								<option value="STCW Transport and Handling of Dangerous Cargoes">STCW Transport and Handling of Dangerous Cargoes</option>
								<option value="STCW Basic Training for Oil and Chemical Tanker">STCW Basic Training for Oil and Chemical Tanker</option>
								<option value="STCW Basic Training for Liquefied Gas Tanker">STCW Basic Training for Liquefied Gas Tanker</option>
								<option value="Advanced Training for Chemical Tankers">Advanced Training for Chemical Tankers</option>
								<option value="Advanced Training for Liquefied Gas Tanker">Advanced Training for Liquefied Gas Tanker</option>
								<option value="Advanced Training for Liquefied Gas Tanker">Advanced Training for Liquefied Gas Tanker</option>
								<option value="Ro-Ro Passenger Ships">Ro-Ro Passenger Ships</option>
								<option value="Hygiene Course for Catering Personnel">Hygiene Course for Catering Personnel</option>
								<option value="Ship’s Cook Specialization">Ship's Cook Specialization</option>
								<option value="DP Basic">DP Basic</option>
								<option value="DP Advanced">DP Advanced</option>
								<option value="DP Licence">DP Licence</option>
							</select>
							</div>
						  </div>

						  <div class="form-row">
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="customFile">
							  <label class="custom-file-label" for="customFile">Upload Certificates</label>
							</div>
						  </div>
						  <br>
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