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
                    <form>
					<div id="main_div">
						<div id="primary_div">
							<div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Title/Position/Rank</label>
								  <input type="text" class="form-control" id="inputEmail4" placeholder="Title/Position/Rank Name">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Company/Organisation Name</label>
								  <input type="text" class="form-control" id="inputEmail4" placeholder="Company/Organisation Name">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Vessel name</label>
								  <input type="text" class="form-control" id="inputEmail4" placeholder="Vessel name">
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Length of the vessel</label>
								  <input type="text" class="form-control" id="inputEmail4" placeholder="Length of the vessel">
								</div>
								<div class="form-group col-md-4">
							  <label for="inputEmail4">Type of the vessel</label>
							  <select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option value="1">Tanker</option>
								<option value="2">Bulk Carrier</option>
								<option value="1">Cargo</option>
								<option value="2">Container</option>
								<option value="2">Passenger</option>
								<option value="1">Offshore</option>
								<option value="2">Yacht</option>
								<option value="2">River</option>
								<option value="2">Onshore</option>
							  </select>
							</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Starting Date</label>
								  <input class="form-control" id="date" name="date" placeholder="MM/YYYY" type="text"/>
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Ending Date</label>
								  <input class="form-control" id="date" name="date" placeholder="MM/YYYY" type="text"/>
								</div>
								<div class="form-group col-md-4">
								  <label for="inputEmail4">Currently Working</label>
								  <br>
								  <input class="form-check-input" style="margin: 10px;" type="checkbox" id="gridCheck">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Company Location</label>
								  <input type="text" class="form-control" id="inputEmail4" placeholder="Company Location">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Company Description</label>
								  <input type="text" class="form-control" id="inputEmail4" placeholder="Company Description">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Contact Person</label>
								  <input type="text" class="form-control" id="inputEmail4" placeholder="Contact Person">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Contact Info</label>
								  <input type="text" class="form-control" id="inputEmail4" placeholder="Contact Info">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-12">
								  <label for="inputEmail4">Tasks</label>
								  <textarea class="form-control" rows="5" id="comment" type="text"></textarea>
								</div>
							  </div>
							   <hr>
						</div>
					</div>
					<br/>
<div class="container">
  <div class="row">
       <div class="col-lg-12">
     <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></button>
<ul class="dropdown-menu">
  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 1</a></li>
  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 2</a></li>
  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 3</a></li>
  <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 4</a></li>
  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 5</a></li>
  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 6</a></li>
</ul>
  </div>
</div>
  </div>
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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
                    <div class="modal-header" style="display: block;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login to continue</h4>
                    </div>
                    <div class="modal-body" style="margin-bottom:10px;">
                        <div class="login-form">
                            <center>
                                <h4 class="errorLog" id="loginHelp"></h4>
                            </center>

                            <form id="loginForm">


                                <input type="text" class="common-input mb-20 form-control" id="loginEmail" name="loginEmail" placeholder="Email" autocomplete="off">
                                
                                <input type="password" class="common-input mb-20 form-control" id="loginPassword" name="loginPassword"  placeholder="Password" autocomplete="off">

                                <h4 style="text-align: right;"><span class="forgotpassword">Forgot Password?</span></h4>
                                <button type="submit" class="btn btn-login genric-btn2" id="login_submit">
                                    <b>Log in</b>
                                </button>

                                <h4 onclick="toggleSignup()" style="text-align: center; margin-top: 24px; font-size: 12px; color: #8c8c8c; cursor: pointer;"><span class="forgotpassword">Don't have an account? <a style="font-weight: 500;">Sign Up here</a></span></h4>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer" style="background: none;text-align: center;display: block;">

                        <div class="footer-area" style="background: none;">
                        <div class="single-footer-widget">
                            <ul class="social-icons" style="font-size: 20px;">  

                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fab fa-facebook" style="color:#3B5998;"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fab fa-google" style="color:#DB4437;"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fab fa-linkedin" style="color:#0077B5;"></i>
                                    </a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    </div>
                </div>
		  </div>
		</div>

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
<script>
var options = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   console.log( options );
   return false;
});
</script>
 
</body>

</html>