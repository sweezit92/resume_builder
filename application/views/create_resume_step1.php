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
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  
    
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
                    <h2 class="head">Personal Information</h2>
                    <form method="post" action="<?php echo base_url("create_resume_step1/add_personal");?>" enctype="multipart/form-data">
					<?php
					if($get_personal->image != "")
					{
					?>
					 <div class="form-row">
						<div class="form-group col-md-6">
						  <img src="<?php echo base_url()?>uploads/<?php echo $get_personal->image;?>" class="img-circle" width="200" height="200" id="blah">
						</div>
					</div>
					<?php
						}else{
					?>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <img src="#" class="img-circle" id="blah" width="200" height="200">
						</div>
					</div>
				    <?php
				  		}
				    ?>
					  <div class="form-row">
						<div class="custom-file col-md-6">
						  <input type="file" class="custom-file-input" id="customFile" value="" name="image" onchange="readURL(this);">
						  <label class="custom-file-label" for="customFile"><?php echo $get_personal->image;?></label>
						</div>
					  </div>
					  <div class="form-row" style="margin-top:10px;">
						<div class="form-group col-md-6">
						  <label>Full Name</label><br>
						  <span style="font-size:11px;">Please type your name and surname</span>
						  <input type="text" class="form-control" id="inputEmail4" name="full_name" value="<?php echo $get_personal->full_name;?>" placeholder="">
						</div>
						<!--<div class="form-group col-md-6">
						  <label>Professional Title/ Rank</label><br>
						  <span style="font-size:11px;">Professional Title/ Rank</span>
						  <input type="text" class="form-control" id="inputEmail4" name="rank" value="<?php echo $get_personal->professional_rank;?>" placeholder="">
						</div>-->
						<div class="form-group col-md-6">
						  <label>Objective and info </label><br>
						  <span style="font-size:11px;">Type a short and engaging pitch about yourself</span>
						  <input type="text" class="form-control" id="inputEmail4" name="about" value="<?php echo $get_personal->about_yourself;?>" placeholder="">
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label>Nationality</label><br>
						  <span style="font-size:11px;">Which country issued your passport?</span>
						  <input type="text" class="form-control" id="inputPassword4" name="nationality" value="<?php echo $get_personal->nationality;?>" placeholder="">
						</div>						
						<div class="form-group col-md-6">
						  <label>Country of Residence</label><br>
						  <span style="font-size:11px;">Where Do you live?</span>
						  <input type="text" class="form-control" name="residence" id="inputCity" value="<?php echo $get_personal->residence;?>" placeholder="">
						</div>
					  </div>
					  <div class="form-row">
					  	<div class="form-group col-md-6">
						  <label>Current Location</label><br>
						  <span style="font-size:11px;">Where are you now?</span>
						  <input type="text" class="form-control" name="location" id="inputCity" value="<?php echo $get_personal->current_location;?>" placeholder="">
						</div>
						<div class='form-group date col-md-6' id='datePicker'>
							<label>Date Of Birth</label><br>
						  	<span style="font-size:11px;">Date of Birth</span>
								<input type="text" class="form-control" name="dob" value="<?php echo $get_personal->dob;?>"/>
                				<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
					  </div>

					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label>Skype ID</label><br>
						  <span style="font-size:11px;">Some recruiters perform job interviews over Skype</span>
						  <input type="text" class="form-control" id="inputEmail4" name="skype" value="<?php echo $get_personal->skype;?>" placeholder="">
						</div>

						<div class="form-group col-md-2">
						  <label>Country Prefix</label><br>
						  <span style="font-size:11px;">Choose...</span>
						  <select id="inputState" class="form-control" name="prefix">
							<option value="+376" <?php echo (($get_personal->prefix == "+376")?'selected':'') ;?>>AD - Andorra (+376)</option>
							<option value="+971" <?php echo (($get_personal->prefix == "+971")?'selected':'') ;?>>AE - United Arab Emirates (+971)</option>
							<option value="+93" <?php echo (($get_personal->prefix == "+93")?'selected':'') ;?>>AF - Afghanistan (+93)</option>
							<option value="+1268" <?php echo (($get_personal->prefix == "+1268")?'selected':'') ;?>>AG - Antigua And Barbuda (+1268)</option>
							<option value="+1264" <?php echo (($get_personal->prefix == "+1264")?'selected':'') ;?>>AI - Anguilla (+1264)</option>
							<option value="+355" <?php echo (($get_personal->prefix == "+355")?'selected':'') ;?>>AL - Albania (+355)</option>
							<option value="+374" <?php echo (($get_personal->prefix == "+374")?'selected':'') ;?>>AM - Armenia (+374)</option>
							<option value="+599" <?php echo (($get_personal->prefix == "+599")?'selected':'') ;?>>AN - Netherlands Antilles (+599)</option>
							<option value="+244" <?php echo (($get_personal->prefix == "+244")?'selected':'') ;?>>AO - Angola (+244)</option>
							<option value="+672" <?php echo (($get_personal->prefix == "+672")?'selected':'') ;?>>AQ - Antarctica (+672)</option>
							<option value="+54" <?php echo (($get_personal->prefix == "+54")?'selected':'') ;?>>AR - Argentina (+54)</option>
							<option value="+1684" <?php echo (($get_personal->prefix == "+1684")?'selected':'') ;?>>AS - American Samoa (+1684)</option>
							<option value="+43" <?php echo (($get_personal->prefix == "+43")?'selected':'') ;?>>AT - Austria (+43)</option>
							<option value="+61" <?php echo (($get_personal->prefix == "+61")?'selected':'') ;?>>AU - Australia (+61)</option>
							<option value="+297" <?php echo (($get_personal->prefix == "+297")?'selected':'') ;?>>AW - Aruba (+297)</option>
							<option value="+994" <?php echo (($get_personal->prefix == "+994")?'selected':'') ;?>>AZ - Azerbaijan (+994)</option>
							<option value="+387" <?php echo (($get_personal->prefix == "+387")?'selected':'') ;?>>BA - Bosnia And Herzegovina (+387)</option>
							<option value="+1246" <?php echo (($get_personal->prefix == "+1246")?'selected':'') ;?>>BB - Barbados (+1246)</option>
							<option value="+880" <?php echo (($get_personal->prefix == "+880")?'selected':'') ;?>>BD - Bangladesh (+880)</option>
							<option value="+32" <?php echo (($get_personal->prefix == "+32")?'selected':'') ;?>>BE - Belgium (+32)</option>
							<option value="+226" <?php echo (($get_personal->prefix == "+226")?'selected':'') ;?>>BF - Burkina Faso (+226)</option>
							<option value="+359" <?php echo (($get_personal->prefix == "+359")?'selected':'') ;?>>BG - Bulgaria (+359)</option>
							<option value="+973" <?php echo (($get_personal->prefix == "+973")?'selected':'') ;?>>BH - Bahrain (+973)</option>
							<option value="+257" <?php echo (($get_personal->prefix == "+257")?'selected':'') ;?>>BI - Burundi (+257)</option>
							<option value="+229" <?php echo (($get_personal->prefix == "+229")?'selected':'') ;?>>BJ - Benin (+229)</option>
							<option value="+590" <?php echo (($get_personal->prefix == "+590")?'selected':'') ;?>>BL - Saint Barthelemy (+590)</option>
							<option value="+1441" <?php echo (($get_personal->prefix == "+1441")?'selected':'') ;?>>BM - Bermuda (+1441)</option>
							<option value="+673" <?php echo (($get_personal->prefix == "+673")?'selected':'') ;?>>BN - Brunei Darussalam (+673)</option>
							<option value="+591" <?php echo (($get_personal->prefix == "+591")?'selected':'') ;?>>BO - Bolivia (+591)</option>
							<option value="+55" <?php echo (($get_personal->prefix == "+55")?'selected':'') ;?>>BR - Brazil (+55)</option>
							<option value="+1242" <?php echo (($get_personal->prefix == "+1242")?'selected':'') ;?>>BS - Bahamas (+1242)</option>
							<option value="+975" <?php echo (($get_personal->prefix == "+975")?'selected':'') ;?>>BT - Bhutan (+975)</option>
							<option value="+267" <?php echo (($get_personal->prefix == "+267")?'selected':'') ;?>>BW - Botswana (+267)</option>
							<option value="+375" <?php echo (($get_personal->prefix == "+375")?'selected':'') ;?>>BY - Belarus (+375)</option>
							<option value="+501" <?php echo (($get_personal->prefix == "+501")?'selected':'') ;?>>BZ - Belize (+501)</option>
							<option value="+1(CA)" <?php echo (($get_personal->prefix == "+1(CA)")?'selected':'') ;?>>CA - Canada (+1)</option>
							<option value="+61(CC)" <?php echo (($get_personal->prefix == "+61(CC)")?'selected':'') ;?>>CC - Cocos (keeling) Islands (+61)</option>
							<option value="+243" <?php echo (($get_personal->prefix == "+243")?'selected':'') ;?>>CD - Congo, The Democratic Republic Of The (+243)</option>
							<option value="+236" <?php echo (($get_personal->prefix == "+236")?'selected':'') ;?>>CF - Central African Republic (+236)</option>
							<option value="+242" <?php echo (($get_personal->prefix == "+242")?'selected':'') ;?>>CG - Congo (+242)</option>
							<option value="+41" <?php echo (($get_personal->prefix == "+41")?'selected':'') ;?>>CH - Switzerland (+41)</option>
							<option value="+225" <?php echo (($get_personal->prefix == "+225")?'selected':'') ;?>>CI - Cote D Ivoire (+225)</option>
							<option value="+682" <?php echo (($get_personal->prefix == "+682")?'selected':'') ;?>>CK - Cook Islands (+682)</option>
							<option value="+56" <?php echo (($get_personal->prefix == "+56")?'selected':'') ;?>>CL - Chile (+56)</option>
							<option value="+237" <?php echo (($get_personal->prefix == "+237")?'selected':'') ;?>>CM - Cameroon (+237)</option>
							<option value="+86" <?php echo (($get_personal->prefix == "+86")?'selected':'') ;?>>CN - China (+86)</option>
							<option value="+57" <?php echo (($get_personal->prefix == "+57")?'selected':'') ;?>>CO - Colombia (+57)</option>
							<option value="+506" <?php echo (($get_personal->prefix == "+506")?'selected':'') ;?>>CR - Costa Rica (+506)</option>
							<option value="+53" <?php echo (($get_personal->prefix == "+53")?'selected':'') ;?>>CU - Cuba (+53)</option>
							<option value="+238" <?php echo (($get_personal->prefix == "+238")?'selected':'') ;?>>CV - Cape Verde (+238)</option>
							<option value="+61" <?php echo (($get_personal->prefix == "+61")?'selected':'') ;?>>CX - Christmas Island (+61)</option>
							<option value="+357" <?php echo (($get_personal->prefix == "+357")?'selected':'') ;?>>CY - Cyprus (+357)</option>
							<option value="+420" <?php echo (($get_personal->prefix == "+420")?'selected':'') ;?>>CZ - Czech Republic (+420)</option>
							<option value="+49" <?php echo (($get_personal->prefix == "+49")?'selected':'') ;?>>DE - Germany (+49)</option>
							<option value="+253" <?php echo (($get_personal->prefix == "+253")?'selected':'') ;?>>DJ - Djibouti (+253)</option>
							<option value="+45" <?php echo (($get_personal->prefix == "+45")?'selected':'') ;?>>DK - Denmark (+45)</option>
							<option value="+1767" <?php echo (($get_personal->prefix == "+1767")?'selected':'') ;?>>DM - Dominica (+1767)</option>
							<option value="+1809" <?php echo (($get_personal->prefix == "+1809")?'selected':'') ;?>>DO - Dominican Republic (+1809)</option>
							<option value="+213" <?php echo (($get_personal->prefix == "+213")?'selected':'') ;?>>DZ - Algeria (+213)</option>
							<option value="+593" <?php echo (($get_personal->prefix == "+593")?'selected':'') ;?>>EC - Ecuador (+593)</option>
							<option value="+372" <?php echo (($get_personal->prefix == "+372")?'selected':'') ;?>>EE - Estonia (+372)</option>
							<option value="+20" <?php echo (($get_personal->prefix == "+20")?'selected':'') ;?>>EG - Egypt (+20)</option>
							<option value="+291" <?php echo (($get_personal->prefix == "+291")?'selected':'') ;?>>ER - Eritrea (+291)</option>
							<option value="+34" <?php echo (($get_personal->prefix == "+34")?'selected':'') ;?>>ES - Spain (+34)</option>
							<option value="+251" <?php echo (($get_personal->prefix == "+251")?'selected':'') ;?>>ET - Ethiopia (+251)</option>
							<option value="+358" <?php echo (($get_personal->prefix == "+358")?'selected':'') ;?>>FI - Finland (+358)</option>
							<option value="+679" <?php echo (($get_personal->prefix == "+679")?'selected':'') ;?>>FJ - Fiji (+679)</option>
							<option value="+500" <?php echo (($get_personal->prefix == "+500")?'selected':'') ;?>>FK - Falkland Islands (malvinas) (+500)</option>
							<option value="+691" <?php echo (($get_personal->prefix == "+691")?'selected':'') ;?>>FM - Micronesia, Federated States Of (+691)</option>
							<option value="+298" <?php echo (($get_personal->prefix == "+298")?'selected':'') ;?>>FO - Faroe Islands (+298)</option>
							<option value="+33" <?php echo (($get_personal->prefix == "+33")?'selected':'') ;?>>FR - France (+33)</option>
							<option value="+241" <?php echo (($get_personal->prefix == "+241")?'selected':'') ;?>>GA - Gabon (+241)</option>
							<option value="+44(UK)" <?php echo (($get_personal->prefix == "+44(UK)")?'selected':'') ;?>>GB - United Kingdom (+44)</option>
							<option value="+1473" <?php echo (($get_personal->prefix == "+1473")?'selected':'') ;?>>GD - Grenada (+1473)</option>
							<option value="+995" <?php echo (($get_personal->prefix == "+995")?'selected':'') ;?>>GE - Georgia (+995)</option>
							<option value="+233" <?php echo (($get_personal->prefix == "+233")?'selected':'') ;?>>GH - Ghana (+233)</option>
							<option value="+350" <?php echo (($get_personal->prefix == "+350")?'selected':'') ;?>>GI - Gibraltar (+350)</option>
							<option value="+299" <?php echo (($get_personal->prefix == "+299")?'selected':'') ;?>>GL - Greenland (+299)</option>
							<option value="+220" <?php echo (($get_personal->prefix == "+220")?'selected':'') ;?>>GM - Gambia (+220)</option>
							<option value="+224" <?php echo (($get_personal->prefix == "+224")?'selected':'') ;?>>GN - Guinea (+224)</option>
							<option value="+240" <?php echo (($get_personal->prefix == "+240")?'selected':'') ;?>>GQ - Equatorial Guinea (+240)</option>
							<option value="+30" <?php echo (($get_personal->prefix == "+30")?'selected':'') ;?>>GR - Greece (+30)</option>
							<option value="+502" <?php echo (($get_personal->prefix == "+502")?'selected':'') ;?>>GT - Guatemala (+502)</option>
							<option value="+1671" <?php echo (($get_personal->prefix == "+1671")?'selected':'') ;?>>GU - Guam (+1671)</option>
							<option value="+245" <?php echo (($get_personal->prefix == "+245")?'selected':'') ;?>>GW - Guinea-bissau (+245)</option>
							<option value="+592" <?php echo (($get_personal->prefix == "+592")?'selected':'') ;?>>GY - Guyana (+592)</option>
							<option value="+852" <?php echo (($get_personal->prefix == "+852")?'selected':'') ;?>>HK - Hong Kong (+852)</option>
							<option value="+504" <?php echo (($get_personal->prefix == "+504")?'selected':'') ;?>>HN - Honduras (+504)</option>
							<option value="+385" <?php echo (($get_personal->prefix == "+385")?'selected':'') ;?>>HR - Croatia (+385)</option>
							<option value="+509" <?php echo (($get_personal->prefix == "+509")?'selected':'') ;?>>HT - Haiti (+509)</option>
							<option value="+36" <?php echo (($get_personal->prefix == "+36")?'selected':'') ;?>>HU - Hungary (+36)</option>
							<option value="+62" <?php echo (($get_personal->prefix == "+62")?'selected':'') ;?>>ID - Indonesia (+62)</option>
							<option value="+353" <?php echo (($get_personal->prefix == "+353")?'selected':'') ;?>>IE - Ireland (+353)</option>
							<option value="+972" <?php echo (($get_personal->prefix == "+972")?'selected':'') ;?>>IL - Israel (+972)</option>
							<option value="+44(IM)" <?php echo (($get_personal->prefix == "+44(IM)")?'selected':'') ;?>>IM - Isle Of Man (+44)</option>
							<option value="+91" <?php echo (($get_personal->prefix == "+91")?'selected':'') ;?>>IN - India (+91)</option>
							<option value="+964" <?php echo (($get_personal->prefix == "+964")?'selected':'') ;?>>IQ - Iraq (+964)</option>
							<option value="+98" <?php echo (($get_personal->prefix == "+98")?'selected':'') ;?>>IR - Iran, Islamic Republic Of (+98)</option>
							<option value="+354" <?php echo (($get_personal->prefix == "+354")?'selected':'') ;?>>IS - Iceland (+354)</option>
							<option value="+39" <?php echo (($get_personal->prefix == "+39")?'selected':'') ;?>>IT - Italy (+39)</option>
							<option value="+1876" <?php echo (($get_personal->prefix == "+1876")?'selected':'') ;?>>JM - Jamaica (+1876)</option>
							<option value="+962" <?php echo (($get_personal->prefix == "+962")?'selected':'') ;?>>JO - Jordan (+962)</option>
							<option value="+81" <?php echo (($get_personal->prefix == "+81")?'selected':'') ;?>>JP - Japan (+81)</option>
							<option value="+254" <?php echo (($get_personal->prefix == "+254")?'selected':'') ;?>>KE - Kenya (+254)</option>
							<option value="+996" <?php echo (($get_personal->prefix == "+996")?'selected':'') ;?>>KG - Kyrgyzstan (+996)</option>
							<option value="+855" <?php echo (($get_personal->prefix == "+855")?'selected':'') ;?>>KH - Cambodia (+855)</option>
							<option value="+686" <?php echo (($get_personal->prefix == "+686")?'selected':'') ;?>>KI - Kiribati (+686)</option>
							<option value="+269" <?php echo (($get_personal->prefix == "+269")?'selected':'') ;?>>KM - Comoros (+269)</option>
							<option value="+1869" <?php echo (($get_personal->prefix == "+1869")?'selected':'') ;?>>KN - Saint Kitts And Nevis (+1869)</option>
							<option value="+850" <?php echo (($get_personal->prefix == "+850")?'selected':'') ;?>>KP - Korea Democratic Peoples Republic Of (+850)</option>
							<option value="+82" <?php echo (($get_personal->prefix == "+82")?'selected':'') ;?>>KR - Korea Republic Of (+82)</option>
							<option value="+965" <?php echo (($get_personal->prefix == "+965")?'selected':'') ;?>>KW - Kuwait (+965)</option>
							<option value="+1345" <?php echo (($get_personal->prefix == "+1345")?'selected':'') ;?>>KY - Cayman Islands (+1345)</option>
							<option value="+7" <?php echo (($get_personal->prefix == "+7")?'selected':'') ;?>>KZ - Kazakstan (+7)</option>
							<option value="+856" <?php echo (($get_personal->prefix == "+856")?'selected':'') ;?>>LA - Lao Peoples Democratic Republic (+856)</option>
							<option value="+961" <?php echo (($get_personal->prefix == "+961")?'selected':'') ;?>>LB - Lebanon (+961)</option>
							<option value="+1758" <?php echo (($get_personal->prefix == "+1758")?'selected':'') ;?>>LC - Saint Lucia (+1758)</option>
							<option value="+423" <?php echo (($get_personal->prefix == "+423")?'selected':'') ;?>>LI - Liechtenstein (+423)</option>
							<option value="+94" <?php echo (($get_personal->prefix == "+94")?'selected':'') ;?>>LK - Sri Lanka (+94)</option>
							<option value="+231" <?php echo (($get_personal->prefix == "+231")?'selected':'') ;?>>LR - Liberia (+231)</option>
							<option value="+266" <?php echo (($get_personal->prefix == "+266")?'selected':'') ;?>>LS - Lesotho (+266)</option>
							<option value="+370" <?php echo (($get_personal->prefix == "+370")?'selected':'') ;?>>LT - Lithuania (+370)</option>
							<option value="+352" <?php echo (($get_personal->prefix == "+352")?'selected':'') ;?>>LU - Luxembourg (+352)</option>
							<option value="+371" <?php echo (($get_personal->prefix == "+371")?'selected':'') ;?>>LV - Latvia (+371)</option>
							<option value="+218" <?php echo (($get_personal->prefix == "+218")?'selected':'') ;?>>LY - Libyan Arab Jamahiriya (+218)</option>
							<option value="+212" <?php echo (($get_personal->prefix == "+212")?'selected':'') ;?>>MA - Morocco (+212)</option>
							<option value="+377" <?php echo (($get_personal->prefix == "+377")?'selected':'') ;?>>MC - Monaco (+377)</option>
							<option value="+373" <?php echo (($get_personal->prefix == "+373")?'selected':'') ;?>>MD - Moldova, Republic Of (+373)</option>
							<option value="+382" <?php echo (($get_personal->prefix == "+382")?'selected':'') ;?>>ME - Montenegro (+382)</option>
							<option value="+1599" <?php echo (($get_personal->prefix == "+1599")?'selected':'') ;?>>MF - Saint Martin (+1599)</option>
							<option value="+261" <?php echo (($get_personal->prefix == "+261")?'selected':'') ;?>>MG - Madagascar (+261)</option>
							<option value="+692" <?php echo (($get_personal->prefix == "+692")?'selected':'') ;?>>MH - Marshall Islands (+692)</option>
							<option value="+389"<?php echo (($get_personal->prefix == "+389")?'selected':'') ;?>>MK - Macedonia, The Former Yugoslav Republic Of (+389)</option>
							<option value="+223" <?php echo (($get_personal->prefix == "+223")?'selected':'') ;?>>ML - Mali (+223)</option>
							<option value="+95" <?php echo (($get_personal->prefix == "+95")?'selected':'') ;?>>MM - Myanmar (+95)</option>
							<option value="+976" <?php echo (($get_personal->prefix == "+976")?'selected':'') ;?>>MN - Mongolia (+976)</option>
							<option value="+853" <?php echo (($get_personal->prefix == "+853")?'selected':'') ;?>>MO - Macau (+853)</option>
							<option value="+1670" <?php echo (($get_personal->prefix == "+1670")?'selected':'') ;?>>MP - Northern Mariana Islands (+1670)</option>
							<option value="+222" <?php echo (($get_personal->prefix == "+222")?'selected':'') ;?>>MR - Mauritania (+222)</option>
							<option value="+1664" <?php echo (($get_personal->prefix == "+1664")?'selected':'') ;?>>MS - Montserrat (+1664)</option>
							<option value="+356" <?php echo (($get_personal->prefix == "+356")?'selected':'') ;?>>MT - Malta (+356)</option>
							<option value="+230" <?php echo (($get_personal->prefix == "+230")?'selected':'') ;?>>MU - Mauritius (+230)</option>
							<option value="+960" <?php echo (($get_personal->prefix == "+960")?'selected':'') ;?>>MV - Maldives (+960)</option>
							<option value="+265" <?php echo (($get_personal->prefix == "+265")?'selected':'') ;?>>MW - Malawi (+265)</option>
							<option value="+52" <?php echo (($get_personal->prefix == "+52")?'selected':'') ;?>>MX - Mexico (+52)</option>
							<option value="+60" <?php echo (($get_personal->prefix == "+60")?'selected':'') ;?>>MY - Malaysia (+60)</option>
							<option value="+258" <?php echo (($get_personal->prefix == "+258")?'selected':'') ;?>>MZ - Mozambique (+258)</option>
							<option value="+264" <?php echo (($get_personal->prefix == "+264")?'selected':'') ;?>>NA - Namibia (+264)</option>
							<option value="+687" <?php echo (($get_personal->prefix == "+687")?'selected':'') ;?>>NC - New Caledonia (+687)</option>
							<option value="+227" <?php echo (($get_personal->prefix == "+227")?'selected':'') ;?>>NE - Niger (+227)</option>
							<option value="+234" <?php echo (($get_personal->prefix == "+234")?'selected':'') ;?>>NG - Nigeria (+234)</option>
							<option value="+505" <?php echo (($get_personal->prefix == "+505")?'selected':'') ;?>>NI - Nicaragua (+505)</option>
							<option value="+31" <?php echo (($get_personal->prefix == "+31")?'selected':'') ;?>>NL - Netherlands (+31)</option>
							<option value="+47" <?php echo (($get_personal->prefix == "+47")?'selected':'') ;?>>NO - Norway (+47)</option>
							<option value="+977" <?php echo (($get_personal->prefix == "+977")?'selected':'') ;?>>NP - Nepal (+977)</option>
							<option value="+674" <?php echo (($get_personal->prefix == "+674")?'selected':'') ;?>>NR - Nauru (+674)</option>
							<option value="+683" <?php echo (($get_personal->prefix == "+683")?'selected':'') ;?>>NU - Niue (+683)</option>
							<option value="+64" <?php echo (($get_personal->prefix == "+64")?'selected':'') ;?>>NZ - New Zealand (+64)</option>
							<option value="+968" <?php echo (($get_personal->prefix == "+968")?'selected':'') ;?>>OM - Oman (+968)</option>
							<option value="+507" <?php echo (($get_personal->prefix == "+507")?'selected':'') ;?>>PA - Panama (+507)</option>
							<option value="+51" <?php echo (($get_personal->prefix == "+51")?'selected':'') ;?>>PE - Peru (+51)</option>
							<option value="+689" <?php echo (($get_personal->prefix == "+689")?'selected':'') ;?>>PF - French Polynesia (+689)</option>
							<option value="+675" <?php echo (($get_personal->prefix == "+675")?'selected':'') ;?>>PG - Papua New Guinea (+675)</option>
							<option value="+63" <?php echo (($get_personal->prefix == "+63")?'selected':'') ;?>>PH - Philippines (+63)</option>
							<option value="+92" <?php echo (($get_personal->prefix == "+92")?'selected':'') ;?>>PK - Pakistan (+92)</option>
							<option value="+48" <?php echo (($get_personal->prefix == "+48")?'selected':'') ;?>>PL - Poland (+48)</option>
							<option value="+508" <?php echo (($get_personal->prefix == "+508")?'selected':'') ;?>>PM - Saint Pierre And Miquelon (+508)</option>
							<option value="+870" <?php echo (($get_personal->prefix == "+870")?'selected':'') ;?>>PN - Pitcairn (+870)</option>
							<option value="+1(PR)" <?php echo (($get_personal->prefix == "+1(PR)")?'selected':'') ;?>>PR - Puerto Rico (+1)</option>
							<option value="+351" <?php echo (($get_personal->prefix == "+351")?'selected':'') ;?>>PT - Portugal (+351)</option>
							<option value="+680" <?php echo (($get_personal->prefix == "+680")?'selected':'') ;?>>PW - Palau (+680)</option>
							<option value="+595" <?php echo (($get_personal->prefix == "+595")?'selected':'') ;?>>PY - Paraguay (+595)</option>
							<option value="+974" <?php echo (($get_personal->prefix == "+974")?'selected':'') ;?>>QA - Qatar (+974)</option>
							<option value="+40" <?php echo (($get_personal->prefix == "+40")?'selected':'') ;?>>RO - Romania (+40)</option>
							<option value="+381" <?php echo (($get_personal->prefix == "+381")?'selected':'') ;?>>RS - Serbia (+381)</option>
							<option value="+7" <?php echo (($get_personal->prefix == "+7")?'selected':'') ;?>>RU - Russian Federation (+7)</option>
							<option value="+250" <?php echo (($get_personal->prefix == "+250")?'selected':'') ;?>>RW - Rwanda (+250)</option>
							<option value="+966" <?php echo (($get_personal->prefix == "+966")?'selected':'') ;?>>SA - Saudi Arabia (+966)</option>
							<option value="+677" <?php echo (($get_personal->prefix == "+677")?'selected':'') ;?>>SB - Solomon Islands (+677)</option>
							<option value="+248" <?php echo (($get_personal->prefix == "+248")?'selected':'') ;?>>SC - Seychelles (+248)</option>
							<option value="+249" <?php echo (($get_personal->prefix == "+249")?'selected':'') ;?>>SD - Sudan (+249)</option>
							<option value="+46" <?php echo (($get_personal->prefix == "+46")?'selected':'') ;?>>SE - Sweden (+46)</option>
							<option value="+65" <?php echo (($get_personal->prefix == "+65")?'selected':'') ;?>>SG - Singapore (+65)</option>
							<option value="+290" <?php echo (($get_personal->prefix == "+290")?'selected':'') ;?>>SH - Saint Helena (+290)</option>
							<option value="+386" <?php echo (($get_personal->prefix == "+386")?'selected':'') ;?>>SI - Slovenia (+386)</option>
							<option value="+421" <?php echo (($get_personal->prefix == "+421")?'selected':'') ;?>>SK - Slovakia (+421)</option>
							<option value="+232" <?php echo (($get_personal->prefix == "+232")?'selected':'') ;?>>SL - Sierra Leone (+232)</option>
							<option value="+378" <?php echo (($get_personal->prefix == "+378")?'selected':'') ;?>>SM - San Marino (+378)</option>
							<option value="+221" <?php echo (($get_personal->prefix == "+221")?'selected':'') ;?>>SN - Senegal (+221)</option>
							<option value="+252" <?php echo (($get_personal->prefix == "+252")?'selected':'') ;?>>SO - Somalia (+252)</option>
							<option value="+597" <?php echo (($get_personal->prefix == "+597")?'selected':'') ;?>>SR - Suriname (+597)</option>
							<option value="+239" <?php echo (($get_personal->prefix == "+239")?'selected':'') ;?>>ST - Sao Tome And Principe (+239)</option>
							<option value="+503" <?php echo (($get_personal->prefix == "+503")?'selected':'') ;?>>SV - El Salvador (+503)</option>
							<option value="+963" <?php echo (($get_personal->prefix == "+963")?'selected':'') ;?>>SY - Syrian Arab Republic (+963)</option>
							<option value="+268" <?php echo (($get_personal->prefix == "+268")?'selected':'') ;?>>SZ - Swaziland (+268)</option>
							<option value="+1649" <?php echo (($get_personal->prefix == "+1649")?'selected':'') ;?>>TC - Turks And Caicos Islands (+1649)</option>
							<option value="+235" <?php echo (($get_personal->prefix == "+235")?'selected':'') ;?>>TD - Chad (+235)</option>
							<option value="+228" <?php echo (($get_personal->prefix == "+228")?'selected':'') ;?>>TG - Togo (+228)</option>
							<option value="+66" <?php echo (($get_personal->prefix == "+66")?'selected':'') ;?>>TH - Thailand (+66)</option>
							<option value="+992" <?php echo (($get_personal->prefix == "+992")?'selected':'') ;?>>TJ - Tajikistan (+992)</option>
							<option value="+690" <?php echo (($get_personal->prefix == "+690")?'selected':'') ;?>>TK - Tokelau (+690)</option>
							<option value="+670" <?php echo (($get_personal->prefix == "+670")?'selected':'') ;?>>TL - Timor-leste (+670)</option>
							<option value="+993" <?php echo (($get_personal->prefix == "+993")?'selected':'') ;?>>TM - Turkmenistan (+993)</option>
							<option value="+216" <?php echo (($get_personal->prefix == "+216")?'selected':'') ;?>>TN - Tunisia (+216)</option>
							<option value="+676" <?php echo (($get_personal->prefix == "+676")?'selected':'') ;?>>TO - Tonga (+676)</option>
							<option value="+90" <?php echo (($get_personal->prefix == "+90")?'selected':'') ;?>>TR - Turkey (+90)</option>
							<option value="+1868" <?php echo (($get_personal->prefix == "+1868")?'selected':'') ;?>>TT - Trinidad And Tobago (+1868)</option>
							<option value="+688" <?php echo (($get_personal->prefix == "+688")?'selected':'') ;?>>TV - Tuvalu (+688)</option>
							<option value="+886" <?php echo (($get_personal->prefix == "+886")?'selected':'') ;?>>TW - Taiwan, Province Of China (+886)</option>
							<option value="+255" <?php echo (($get_personal->prefix == "+255")?'selected':'') ;?>>TZ - Tanzania, United Republic Of (+255)</option>
							<option value="+380" <?php echo (($get_personal->prefix == "+380")?'selected':'') ;?>>UA - Ukraine (+380)</option>
							<option value="+256" <?php echo (($get_personal->prefix == "+256")?'selected':'') ;?>>UG - Uganda (+256)</option>
							<option value="+1(US)" <?php echo (($get_personal->prefix == "+1(US)")?'selected':'') ;?>>US - United States (+1)</option>
							<option value="+598" <?php echo (($get_personal->prefix == "+598")?'selected':'') ;?>>UY - Uruguay (+598)</option>
							<option value="+998" <?php echo (($get_personal->prefix == "+998")?'selected':'') ;?>>UZ - Uzbekistan (+998)</option>
							<option value="+39" <?php echo (($get_personal->prefix == "+39")?'selected':'') ;?>>VA - Holy See (vatican City State) (+39)</option>
							<option value="+1784" <?php echo (($get_personal->prefix == "+1784")?'selected':'') ;?>>VC - Saint Vincent And The Grenadines (+1784)</option>
							<option value="+58" <?php echo (($get_personal->prefix == "+58")?'selected':'') ;?>>VE - Venezuela (+58)</option>
							<option value="+1284" <?php echo (($get_personal->prefix == "+1284")?'selected':'') ;?>>VG - Virgin Islands, British (+1284)</option>
							<option value="+1340" <?php echo (($get_personal->prefix == "+1340")?'selected':'') ;?>>VI - Virgin Islands, U.s. (+1340)</option>
							<option value="+84" <?php echo (($get_personal->prefix == "+84")?'selected':'') ;?>>VN - Viet Nam (+84)</option>
							<option value="+678" <?php echo (($get_personal->prefix == "+678")?'selected':'') ;?>>VU - Vanuatu (+678)</option>
							<option value="+681" <?php echo (($get_personal->prefix == "+681")?'selected':'') ;?>>WF - Wallis And Futuna (+681)</option>
							<option value="+685" <?php echo (($get_personal->prefix == "+685")?'selected':'') ;?>>WS - Samoa (+685)</option>
							<option value="+381" <?php echo (($get_personal->prefix == "+381")?'selected':'') ;?>>XK - Kosovo (+381)</option>
							<option value="+967" <?php echo (($get_personal->prefix == "+967")?'selected':'') ;?>>YE - Yemen (+967)</option>
							<option value="+262" <?php echo (($get_personal->prefix == "+262")?'selected':'') ;?>>YT - Mayotte (+262)</option>
							<option value="+27" <?php echo (($get_personal->prefix == "+27")?'selected':'') ;?>>ZA - South Africa (+27)</option>
							<option value="+260" <?php echo (($get_personal->prefix == "+260")?'selected':'') ;?>>ZM - Zambia (+260)</option>
							<option value="+263" <?php echo (($get_personal->prefix == "+263")?'selected':'') ;?>>ZW - Zimbabwe (+263)</option>
						  </select>
						</div>
						<div class="form-group col-md-4">
						  <label>Telephone Number</label><br>
						  <span style="font-size:11px;">Telephone Number</span>
						  <input type="text" class="form-control" name="phone" id="inputEmail4" value="<?php echo $get_personal->telephone;?>" placeholder="">
						</div>
					  </div>
					 
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label>Email</label>
						  <input type="text" class="form-control" id="inputEmail4" name="email" value="<?php echo $get_personal->email;?>" placeholder="Email">
						</div>
						<div class="form-group col-md-6">
						  <label>LinkedIn Profile</label>
						  <input type="text" class="form-control" id="inputEmail4" name="linkedin" value="<?php echo $get_personal->linkedIn;?>" placeholder="LinkedIn Profile">
						</div>
					  </div>
					  <div class="form-row">						
						<div class="form-group col-md-6">
						  <label>Do you currently have valid B1/B2 visa?</label>
						  <select id="inputState" class="form-control" name="visa">
						  	<option value="">Choose...</option>
							<option value="yes" <?php echo (($get_personal->visa == "yes")?'selected':'') ;?>>Yes</option>
							<option value="no" <?php echo (($get_personal->visa == "no")?'selected':'') ;?>>No</option>
						  </select>
						</div>
						<div class="form-group col-md-6">
						  <label>Seaman's Book</label>
						  <select id="inputState" class="form-control" name="seamans_book">
						  	<option value="">Choose...</option>
							<option value="yes" <?php echo (($get_personal->seamans_book == "yes")?'selected':'') ;?>>Yes</option>
							<option value="no" <?php echo (($get_personal->seamans_book == "no")?'selected':'') ;?>>No</option>
						  </select>
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label>Smoke</label>
						  <select id="inputState" class="form-control" name="smoke">
						  	<option value="">Choose...</option>
							<option value="yes" <?php echo (($get_personal->smoke == "yes")?'selected':'') ;?>>Yes</option>
							<option value="no" <?php echo (($get_personal->smoke == "no")?'selected':'') ;?>>No</option>
						  </select>
						</div>
						<div class="form-group col-md-6">
						  <label>When you can start the new job?</label>
						  <select id="inputState" class="form-control" name="start_job">
						  	<option value="">Choose...</option>
							<option value="Now" <?php echo (($get_personal->start_job == "Now")?'selected':'') ;?>>Now</option>
							<option value="In 1 Month" <?php echo (($get_personal->start_job == "In 1 Month")?'selected':'') ;?>>In 1 Month</option>
							<option value="In 2 Month" <?php echo (($get_personal->start_job == "In 2 Month")?'selected':'') ;?>>In 2 Month</option>
						  </select>
						</div>
					  </div>
					  <div class="form-row">						
						<div class="form-group col-md-6">
						  <label>Visible Tattos</label>
						  <select id="inputState" class="form-control" name="tatto">
						  	<option value="">Choose...</option>
							<option value="yes" <?php echo (($get_personal->tatto == "yes")?'selected':'') ;?>>Yes</option>
							<option value="no" <?php echo (($get_personal->tatto == "no")?'selected':'') ;?>>No</option>
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
$this->load->view('common/footer');
?>

<script type="text/javascript">
 $(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy',
        })

        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#datePicker').datepicker('hide');
            $('#eventForm').formValidation('revalidateField', 'date');

        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});
        </script>
 <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>