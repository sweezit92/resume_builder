
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="img/fav.jpg"> -->
    
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume Builder - Contact</title>

<?php
include("metalinks.php");
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
include("header.php");
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
    <div style="background: url('img/Great-Cover-Letter-Banner.jpg');">
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
                    Get in touch with Resume Builder expert resume writers to help you prepare a professional resume that works best for you. Feel free to talk to us regarding any query you may have about Resume Builder online resume maker and cover letter builder.
                </p>
            </div>
        </div>
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6 col-md-6 contact-left">
                <img class="img-fluid" src="img/contact-img.png" alt="">
            </div>
            <div class="col-lg-5 col-md-6 contact-right">
                <form class="form-area contact-form text-right" id="contactform">
                    
                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                    <input name="mobile" placeholder="Enter your mobile" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                    <!-- <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text"> -->

                    <textarea class="common-textarea form-control" cols="30" rows="7" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>

                    <div class="d-flex flex-column">
                        <button type="submit" class="genric-btn2 d-block mt-30 mr-0 ml-auto">Send Message</button>
                        <div class="alert-msg"></div>
                    </div>
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
include("footer.php");
?>



    <!-- Submit Your Resume --->


    
    <script type="text/javascript">

        // $('#resumeSubmitModal').modal('show');
        
        $('.signupBTN').click(function(e){
            toggleSignup();
            $('#LoginModal').modal('show');
        });

        $('.loginBTN').click(function(e){
            $('.login-text').trigger('click');
            $('#LoginModal').modal('show');
        });

        

        function toggleSignup(){
            $('#LoginModal .modal-title').html("Get Started");
            $('#loginForm').hide();
            $('#loginHelp').html('');
            $('#loginEmail').val($('#forgotloginEmail').val());
            $('#forgotPassForm').hide();
            $('#signupForm').show();
        }

        $('.forgotpassword').click(function(e) {
            $('#loginForm').hide();
            $('#forgotloginEmail').val($('#loginEmail').val());
            $('#loginHelp').html('');
            $('#signupForm').hide();
            $('#forgotPassForm').show();
        });

        $('.login-text').click(function(e) {
            $('#LoginModal .modal-title').html("Login");
            $('#loginForm').show();
            $('#loginHelp').html('');
            $('#loginEmail').val($('#forgotloginEmail').val());
            $('#forgotPassForm').hide();
            $('#signupForm').hide();
        });

        $('#loginForm').submit(function(e) {
            e.preventDefault();
            var email = $('#loginEmail').val();
            var pass = $('#loginPassword').val();
            var validated = 1;
            if (email.length < 6 || email.indexOf("@") < 1) {
                $('#loginHelp').html("Invalid Email");
                validated = 0;
                return false;
            } else {
                $('#loginHelp').html("");
            }

            if (pass.length < 6) {
                $('#loginHelp').html("Invalid Password");
                validated = 0;
                return false;
            } else {
                $('#loginHelp').html("");
            }

            if (validated) {
                $('#login_submit.btn-login').html('<i class="fa fa-spinner fa-pulse"></i>');
                $.post('/home/signup_portal', {
                    "email": email,
                    "password": pass,
                    "action": 'login'
                }, function(res, err) {

                    console.log(res);
                    var obj = $.parseJSON(res);
                    if (obj.resp == 1) {
                        location.reload();
                    } else {
                        $('#login_submit.btn-login').html('Login');
                        $('#loginHelp').html(obj.msg);
                    }
                });
            }
        });

        $('#forgotPassForm').submit(function(e) {
            e.preventDefault();
            $('#loginHelp').html('');
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#forgotloginEmail').val())) {

                $('#forgotpassbtn').html('<i class="fa fa-spinner fa-pulse"></i>');

                $.post('/home/forgotpassword', {
                    "email": $('#forgotloginEmail').val()
                }, function(res) {

                    $('#forgotpassbtn').html('Reset Password');

                    var obj = $.parseJSON(res);
                    if (obj.resp == 1) {
                        $('#loginHelp').html(obj.msg);
                        $('#forgotPassForm').hide();
                        $('#loginForm').show();
                    } else {
                        $('#loginHelp').html(obj.msg);
                    }
                });
            } else {
                $('#loginHelp').html("Invalid Email");
            }
        });


        $('#signupForm, #heroSignup').submit(function(e) {
            
            var validate = 1;
            e.preventDefault();

            if($(e.target).attr('id') == 'heroSignup'){

                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#'+$(e.target).attr('id')+' input[name=email]').val()) == false) {
                    validate = 0;
                }

            }else if($(e.target).attr('id') == 'signupForm'){

                $('#loginHelp').html('');
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#signupForm input[name=email]').val()) == false) {
                    $('#loginHelp').html("Invalid Email");
                    validate = 0;
                }
            }

            // if($('#signupForm input[name=name]').val().length < 1){
            //     $('#loginHelp').html("Invalid Name");
            //     validate = 0;
            // }

            // if($('#signupForm input[name=password]').val().length < 6){
            //     $('#loginHelp').html("Password too short");
            //     validate = 0;
            // }

            if(validate == 1){
                $('#'+$(e.target).attr('id')+' button').html('<i class="fa fa-spinner fa-pulse"></i>');

                $.post('/home/signup_portal', $('#'+$(e.target).attr('id')).serializeArray() , function(res) {

                    var obj = $.parseJSON(res);
                    if (obj.resp == 1) {
                        location.reload();
                    } else {
                        $('#'+$(e.target).attr('id')+' button').html('Sign Up');
                        $('#loginHelp').html(obj.msg);
                    }
                });
            }
        });


        if(window.location.hash == '#login'){
            $('#LoginModal').modal('show');
        }

        if(window.location.hash == '#review'){
            $('#submitResumeBTN').trigger('click');
        }

        if(window.location.hash == '#signup'){
            toggleSignup();
            $('#LoginModal').modal('show');
        }
    </script>

    <script type="text/javascript">

        $is_shown = 0;
        function addEvent(obj, evt, fn) {
            if (obj.addEventListener) {
                obj.addEventListener(evt, fn, false);
            }
            else if (obj.attachEvent) {
                obj.attachEvent("on" + evt, fn);
            }
        }
        addEvent(window,"load",function(e) {

            addEvent(document, "mouseout", function(e) {
                e = e ? e : window.event;
                var from = e.relatedTarget || e.toElement;
                if (!from || from.nodeName == "HTML") {
                    // stop your drag event here
                    // for now we can just use an alert
                    if($is_shown == 0 && e.clientY < 0 ){
                        $('#resumeSubmitModal').modal('show');
                        $is_shown = 1;
                    }
                }
            });
        });
    </script>

    <!-- Chatra {literal} -->
    <script>
        (function(d, w, c) {
            w.ChatraID = 'vN2qKNh5QmMqZbKh6';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
            + '//call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>
    <!-- /Chatra {/literal} -->


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '350899822110641');
        fbq('track', 'PageView');
    </script>
    
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=350899822110641&ev=PageView&noscript=1"
    /></noscript>
    
    <!-- End Facebook Pixel Code -->
</body>

</html>