
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="img/fav.jpg"> -->
    
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder</title>

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


<body class="version2">

<?php
$this->load->view("common/header");
?>

    <style type="text/css">
    
    @media (max-width: 768px) {
        .hero-img2 {
            margin-top: 0px !important;
            display: none;
        }
    }

</style>

<!-- Start hero-section -->
<section class="hero-section-blog-details">
    <div style="background: url('<?php echo base_url();?>img/Great-Cover-Letter-Banner.jpg');">
        <div class="text-center" style="margin:40px;">
            <div class="col-md-12 pt-100 pb-80">
               <a class="blog-heading">LOGIN</a>
            </div>
        </div>
    </div>
</section>
<!-- End hero-section -->
<!-- Start contact section -->
<section class="contact-section section-gap_" style="margin-bottom: 30px;margin-top:50px;">
    <div class="container">
        
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6 col-md-6 contact-left">
                <img class="img-fluid" src="<?php echo base_url();?>img/reg-manangement-hero.png" alt="" style="margin-top:;">
            </div>
            <div class="col-lg-5 col-md-6 contact-left">
                <?php
                  if($this->session->flashdata('failed')){
                ?>
                    <div class="alert alert-danger" style="margin-bottom:40px;">
                        <strong><?php echo $this->session->flashdata('failed');?></strong>
                    </div>
                <?php
                }
                if($this->session->flashdata('success')){
                ?>
                    <div class="alert alert-success" style="margin-bottom:40px;">
                        <strong><?php echo $this->session->flashdata('success');?></strong>
                    </div>
                <?php
                }
                ?>
                <form method="POST" action="<?php echo base_url('setting/update_pass');?>" style="margin-bottom:40px;">
					
					<div class="form-group">
						<label for="exampleInputPassword1">New Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="new_password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Confirm Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact section -->


<?php
$this->load->view("common/footer");
?>

</body>

</html>