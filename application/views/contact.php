
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">
    
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder - Contact</title>

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
               <a class="blog-heading">WANT TO BUILD YOUR OWN RESUME?</a>
            </div>
        </div>
    </div>
</section>
<!-- End hero-section -->
<!-- Start contact section -->
<section class="contact-section section-gap_" style="margin-bottom: 30px;margin-top:50px;">
    <div class="container">
        <div class="row justify-content-center section-title-wrap">
            <div class="col-lg-12">
                <h2>Hire An Expert Resume Writing Service Provider</h2>
                <p>
                    Get in touch with Resume Builder expert resume writers to help you prepare a professional resume that works best for you. Feel free to talk to us regarding any query you may have about Resume Builder online resume builder.
                </p>
            </div>
        </div>
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-6 col-md-6 contact-left">
                <img class="img-fluid" src="<?php echo base_url();?>img/contact-img.png" alt="">
            </div>
            <div class="col-lg-6 col-md-6 contact-left">
                <form method="post" action="<?php echo base_url("contact/send_message");?>">
                    <div class="form-group">
						<label for="exampleInputEmail1">Your Name</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter E-mail">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Phone Number</label>
						<input type="number" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Message</label>
						<textarea class="form-control" id="exampleInputPassword1" name="message" placeholder="Enter Your Message" rows="4"></textarea>
					</div>
                    
                    <button type="submit" class="btn btn-primary">Send Message</button>
                    
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact section -->

<script type="text/javascript">
    
    $('#contactform').submit(function(e){

        e.preventDefault();
        var self = $(this);
        $.post('/home/contact', self.serializeArray(), function(data){

            self.trigger('reset');

            var obj = $.parseJSON(data);

            self.find('alert-msg').html(obj.data);
        });
    });

</script>

<?php
$this->load->view("common/footer");
?>

</body>

</html>