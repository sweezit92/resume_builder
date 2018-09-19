
<!DOCTYPE html>

<html class="no-js css-menubar" lang="en">

    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#ce217e">
        <link rel="icon" sizes="192x192" href="img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="CV Owl is a free Resume and CV Builder that helps to create a highly professional and recruiter preferred resume and CV that represents you a good fit for an open position you applying for.">
        <meta name="author" content="CVOwl">
        <title>Resume Builder | Free CV Maker | Resume Maker | Resume Writing | CV Owl - CV Owl</title>
        <link rel="apple-touch-icon" href="img/favicon.png">
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap-extend.min.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/cv.css?v=1537356705">

        <!-- Page -->
        <link rel="stylesheet" href="css/animsition.css">
        <link rel="stylesheet" href="css/asScrollable.css">
        <link rel="stylesheet" href="css/slidePanel.css">
        
        <!-- <link rel="stylesheet" href="/static/classic/global/vendor/datatableResponsive/jquery.dataTables.min.css"> -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css?v2.2.0">

        <!-- Plugins For This Page -->
        <!-- <link rel="stylesheet" href="/static/classic/global/vendor/cropper/cropper.min.css?v2.1.0"> -->
        <link rel="stylesheet" href="css/summernote.min.css?v2.2.0">
        <link rel="stylesheet" href="css/offline-language-english.css">
        <link rel="stylesheet" href="css/offline-language-english-indicator.css">
        <link rel="stylesheet" href="css/offline-theme-chrome.css">



        <!-- Core  -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.11.4-ui.min.js"></script>


        <!-- Fonts -->
        <link rel="stylesheet" href="css/font-awesome.min1.css">
        <link rel="stylesheet" href="css/web-icons.min.css">
        
        <link rel="stylesheet" href="css/SmartCV_v2.css?v=1537356705">        <!--[if lt IE 9]>
        <script src="/static/classic/global/vendor/html5shiv/html5shiv.min.js"></script>
        <![endif]-->
        <!--[if lt IE 10]>
        <script src="/static/classic/global/vendor/media-match/media.match.min.js"></script>
        <script src="/static/classic/global/vendor/respond/respond.min.js"></script>
        <![endif]-->
        <!-- Scripts -->
        <script src="js/modernizr.js"></script>
        <script src="js/breakpoints.js"></script>
        <script src="js/offline.min.js"></script>
        <script>
            Breakpoints();
            String.prototype.capitalizeFirstLetter = function() {
                return this.charAt(0).toUpperCase() + this.slice(1).toLowerCase();
            }
        </script>

    </head>

<body class="">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- 
<div id="datasaved" class="alert alert-success">
    <strong>Saved!</strong>
</div> -->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="menuPanel" data-url="/static/classic/topbar/tpl/MENU.tpl">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
    
        <a class="navbar-brand navbar-brand-center" href="/">
            <img class="navbar-brand-logo navbar-brand-logo-special" style="height:35px" src="img/logo.svg" alt="CV Owl"  title="CVowl">
        </a>

    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="hidden-float">
                    <a class="svsts"></a>
                </li>
            </ul>
            <!-- Navbar Toolbar end -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                <li>

                    <a href="/cv/review" class="navbar-avatar headerItem">
                        CV Review
                    </a>

                </li>

                <li>

                    <a  class="navbar-avatar headerItem active">
                        Resume
                    </a>

                </li>

                <li>

                    <a href="/cv/builder/coverletter" class="navbar-avatar headerItem">
                        Cover letter
                    </a>

                </li>


                <li class="dropdown">

                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button">
                        <span class="avatar avatar-online">
                            <img src="img/5.jpg" alt="...">
                        </span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="/logout" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>

                </li>

            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>

    </div>
</nav>

<!-- Page -->

<div class="page animsition"> 
    
    <div style="margin-top:85px;right:0; position: fixed;font-size: 12px;cursor: pointer;display: none"> 

        <div data-spy="affix" class="hidden-sm hidden-xs" count-layout="horizontal" style="position: relative;">
            <a title="like on twitter" href="https://twitter.com/CV_Owl" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-twitter" style="color:#55acee;"></i>
                </span>
            </a>
        </div>

        <div data-spy="affix" class="hidden-sm hidden-xs" count-layout="horizontal" style="position: relative;" id="likeFB">
            <a title="Share on facebook" href="https://www.facebook.com/yourcvowl/" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-facebook" style="color:#3b5999;"></i>
                </span>
            </a>
        </div>

        <div data-spy="affix" class="hidden-sm hidden-xs" style="position: relative;">
            <a title="Share on google" href="https://plus.google.com/" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-google-plus" style="color:#dd4b39;"></i>
                </span>
            </a>
        </div>

        <div data-spy="affix" class="hidden-sm hidden-xs" style="position: relative;">
            <a title="Share on pinterest" href="https://in.pinterest.com/cvowl17/" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-pinterest" style="color:#bd081c;"></i>
                </span>
            </a>
        </div>

        <div data-spy="affix" class="hidden hidden-sm hidden-xs" style="position: relative;">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="true">
            </div>
        </div>


        <div data-spy="affix" class="pull-right hidden-sm hidden-xs" style="margin-top: 10px;right: 10px;font-weight: bold;color: black;text-align: center;background: #ffffff4d;padding-top: 10px;padding-bottom: 10px;cursor: pointer;line-height: 13px;width: 32px;font-size: 12px;" data-toggle="modal" data-target=".upgrade-modal">
            <div class="pin-it-button" count-layout="horizontal">P</div>
            <div class="pin-it-button" count-layout="horizontal">A</div>
            <div class="pin-it-button" count-layout="horizontal">I</div>
            <div class="pin-it-button" count-layout="horizontal">D</div>
            <div class="pin-it-button" count-layout="horizontal">&nbsp;</div>
            <div class="pin-it-button" count-layout="horizontal">S</div>
            <div class="pin-it-button" count-layout="horizontal">E</div>
            <div class="pin-it-button" count-layout="horizontal">R</div>
            <div class="pin-it-button" count-layout="horizontal">V</div>
            <div class="pin-it-button" count-layout="horizontal">I</div>
            <div class="pin-it-button" count-layout="horizontal">C</div>
            <div class="pin-it-button" count-layout="horizontal">E</div>
            <div class="pin-it-button" count-layout="horizontal">S</div>
        </div>

    </div>
    <div class="page-content padding-30 container-fluid">
    
        <div class="row resume-holder"> 
            <center> 
                <div style="max-width:810px;">
                    <div style="margin:10px 0px;">

                        <div class="btn-group pull-left hidden-sm hidden-xs">
                            <button type="button" class="btn btn-outline btn-default dropdown-toggle" id="exampleSizingDropdown2" data-toggle="dropdown" aria-expanded="false">
                                SmartCV <span class="caret"></span>
                            </button>
                            <!--
                             <ul id="changeResume" class="dropdown-menu" aria-labelledby="exampleSizingDropdown2" role="menu">
                                <li role="presentation" data-framework="59986e8a332a6c0aad024cb2"><a role="menuitem"><strong>SmartCV - v1</strong></a></li><li role="presentation" data-framework="59a9ac3396d15d76784d16f1"><a role="menuitem"><strong>SmartCV - v2</strong></a></li>                            </ul> -->
                            <ul class="dropdown-menu" aria-labelledby="exampleSizingDropdown2" role="menu">
                                <li role="presentation">
                                    <a role="menuitem">SmartCV</a>
                                </li>
                            </ul>
                            <button class="btn btn-link changeResume" style="display: none">
                                <span>
                                    <i class="fa fa-spin fa-circle-o-notch"></i>
                                </span>
                            </button>
                        </div>

                        <div class="btn btn-pure btn-default hidden-xs">
                            <form name="form_resume_type">                                
                                <div class="radio-custom radio-default radio-inline" title="For Interns">
                                    <input name="resume_type" type="radio" value="000">
                                    <label for="000">Intern</label>
                                </div>
                                <div class="radio-custom radio-default radio-inline" title="For Fresher or upto 2 year experience">
                                    <input name="resume_type" type="radio" value="001">
                                    <label for="001">Exp L1</label>
                                </div>
                                <div class="radio-custom radio-default radio-inline" title="For 2-4 Year experience">
                                    <input name="resume_type" type="radio" value="010">
                                    <label for="010">Exp L2</label>
                                </div>
                                <div class="radio-custom radio-default radio-inline" title="For 2-4 Year experience">
                                    <input name="resume_type" type="radio" value="011">
                                    <label for="011">Exp L3</label>
                                </div>
                                <div class="radio-custom radio-default radio-inline" title="For 4+ Year experience">
                                    <input name="resume_type" type="radio" value="100">
                                    <label for="100">Exp L4</label>
                                </div>
                                <!-- <div class="radio-custom radio-default radio-inline">
                                    <input name="resume_type" type="radio" value="11">
                                    <label for="001">Exp (5+)</label>
                                </div> -->
                            </form>
                        </div>

                        <div class="btn btn-pure pull-right hidden-sm hidden-xs">
                            <span class="btn-download downloadA4"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;A4</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="btn-download downloadLetter"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Letter</span>
                        </div>
                    </div>
                </div>
                <div class="resume-html">
                    
                    <div class="resume_html"></div>
                    <div style="clear:both;"></div>
                </div>
            </center>
            </div>      
        </div>
    </div>
</div>

<div class="modal fade" id="addcustomsection" aria-hidden="false" aria-labelledby="addcustomsection" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Add Custom Section</h4>
            </div>
            <div class="modal-body padding-top-0">
                <div class="slidePanel-desc-static">
                    Showcase anything extra you want to include in your resume e.g. award, honour, affiliations, extra curricular activities, etc.
                </div>
                <div class="row margin-top-10">
                    <form name="newSection">
                        <div>
                            <div class="btn font-weight-400">
                                Choose section type :
                            </div>
                            <div class="btn btn-pure btn-default">
                                <div class="radio-custom radio-default radio-inline">
                                    <input name="type" type="radio" value="CUSTOMSECTIONSV1" selected>
                                    <label for="cs_type1">EXPERIENCE TYPE</label>
                                </div>
                                <!-- <div class="radio-custom radio-default radio-inline">
                                    <input name="type" type="radio" value="CUSTOMSECTIONSV2">
                                    <label for="cs_type2">SKILL TYPE</label>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <div class="form-group form-material floating">
                                <input type="text" class="form-control empty" name="section_name" />
                                <label class="floating-label">Enter Section Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-3">
                            <button class="btn btn-sm btn-primary btn-block margin-20">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 <div id="feedbackModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">                      
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Feedback</h4>
                  </div>
                  
                  <div class="modal-body">
                    <div class="text-center errorMsg" style="display: none;">
                        <label class="errorMsgText" style="color:red"></label>
                    </div>    
                     <div class="text-center sucessMsg" style="display: none;">
                        <label class="sucessMsgText" style="color:green"></label>
                    </div>    
                    <div class="form-group">                            
                        <textarea class="form-control" placeholder="Your Message.." id="feedback"></textarea>
                    </div>                    
                    <button class="btn btn-primary" type="button" id="btnSubmitfeedback">Submit</button>
                    
                    <button style="display: none;" class="btn btn-primary" type="button" id="btnfeedbackPreloder"><i class="fa fa-spinner"></i> Submit</button>
                  </div>

                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div> -->
            </div>
          </div>
    </div>
  
<script src="js/summernote.js"></script>  
<script>

    $('#likeFB').click(function(){
        $('.fb-like').trigger('click');
    });

    $("#btnSubmitfeedback").click(function(){
        var val = $("#feedback").val();

        $("#btnSubmitfeedback").hide();
        $("#btnfeedbackPreloder").show();
        if(val == "" || val == null)
        {
            $(".errorMsgText").text("Enter your message");
            $(".errorMsg").show();
            $(".sucessMsg").hide();
            $("#btnSubmitfeedback").show();
            $("#btnfeedbackPreloder").hide();  
            return false;
        }

        $.ajax({
            url:"https://www.cvowl.com/cv/getFeedback",
            type:"POST",
            data:{feedback:val},
            success:function(argument) 
            {
                if(argument == "success")
                {
                    $(".sucessMsgText").text("Thank you for your feedback");
                    $(".sucessMsg").show();
                    $(".errorMsg").hide();
                    $("#feedback").val("");

                }
                $("#btnSubmitfeedback").show();
                $("#btnfeedbackPreloder").hide();  
            }
        })
    });



    $('.downloadA4').on('click', function() {
        var download = $('.resume_html').html();
        $.redirectPost('/cv/buildPDF', {
            'html': encodeURIComponent(download),
            'size':'A4'
        });
    });

    $('.downloadLetter').on('click', function() {
        var download = $('.resume_html').html();
        $.redirectPost('/cv/buildPDF', {
            'html': encodeURIComponent(download),
            'size':'Letter'
        });
    });

    $('form[name="newSection"]').submit(function(e){
        e.preventDefault();
        var data = $(this).serializeArray();
        console.log(data);
        if(data[0].value == '' || data[1].type == ''){
            alert("Fields cannot be empty");
            return;
        }
        var is_added = addNewCustomSection(data[0].value, data[1].value.capitalizeFirstLetter());
        if(is_added){
            $('form[name="newSection"]').trigger('reset');
            $('#addcustomsection').modal('toggle');
            var str = createSectionHTML(section_arr, 1);
            $('.all_section').html(str);
            initSectionjs();
        }
    });

    var ls = Date.now();

    var a = ({"Profile":{"firstName":"SUJIT","lastName":"JONES","email":"mary.jones@cvowl.com","phone":"555-322-7337","jobTitle":"DEVE","type":"000","birthDay":"28-Jul-1995","gender":"Female","maritalStatus":"Single","nationality":"American","picture":"\/photos\/original\/missing.png","summary":"You should use this section of your resume to summarize what makes you a good fit for an open position. It needs to be compelling and concise, approximately four to six lines. Summarize your skills and experience in order for a prospective employer to quickly get a sense of the value you could offer.","facebookHandle":"","linkedinHandle":"","currentLocation":"Anandapuri","location":{"address":"1 square street, New York, USA","postalCode":"","city":"","countryCode":"","region":"","state":"","country":""},"phone_alternate":"87878787878","coverletterDate":"10  July, 2017"},"Experience":[{"end_date":"Present","is_active":1,"more_info1":"erer efefef","order_prefs":999,"section_title1":"php developer","section_title2":"clickrstop pvt ltd","section_title3":"Kolkata","section_title4":"","section_type":"EXPERIENCE","start_date":"Aug 2014","created_dt":1537355442827}],"Education":[{"end_date":"Apr 2011","is_active":1,"more_info1":"List your education in reverse order if you have a master\u2019s and a bachelor\u2019s degree, make\n sure to first list the master\u2019s degree. You can also highlight any alternative education such as online learning or self directed training","order_prefs":999,"section_title1":"Institute Name","section_title2":"8.0 CGPA","section_title3":"Location","section_title4":"Course Name","section_type":"EDUCATION","start_date":"May 2012","created_dt":1506862395233}],"Skills":[{"end_date":"","is_active":1,"more_info1":"","order_prefs":999,"section_title1":"SKILL 1","section_title2":"Intermediate","section_title3":"","section_title4":"","section_type":"SKILLS","start_date":"","created_dt":1504035305365},{"end_date":"","is_active":1,"more_info1":"","order_prefs":999,"section_title1":"SKILL 2","section_title2":"Intermediate","section_title3":"","section_title4":"","section_type":"SKILLS","start_date":"","created_dt":1504035316110},{"end_date":"","is_active":1,"more_info1":"","order_prefs":999,"section_title1":"SKILL 3","section_title2":"Intermediate","section_title3":"","section_title4":"","section_type":"SKILLS","start_date":"","created_dt":1504035325785}],"Projects":[{"end_date":"Apr 2014","is_active":1,"more_info1":"Focus on a specific projects in which you successfully used your skills and abilities to\n create a beneficial outcome for a former employee and present projects as&nbsp;\u003Cdiv\u003Eaccomplishments\u003C\/div\u003E\u003Cul\u003E\u003Cli\u003EBriefly mention the background for the projects\u003C\/li\u003E\u003Cli\u003EQuantify the results of your projects\u003C\/li\u003E\u003Cli\u003EHighlight how your involvement led to the project exceeding its goals\u003C\/li\u003E\u003C\/ul\u003E","order_prefs":999,"section_title1":"PROJECT TITLE","section_title2":"Company Name","section_title3":"Location","section_title4":"","section_type":"PROJECTS","start_date":"Jun 2013","created_dt":1504035447972}],"Languages":[{"end_date":"","is_active":1,"more_info1":"","order_prefs":999,"section_title1":"english","section_title2":"Intermediate","section_title3":"","section_title4":"","section_type":"LANGUAGES","start_date":"","created_dt":1505826784846},{"end_date":"","is_active":1,"more_info1":"","order_prefs":999,"section_title1":"German","section_title2":"Advanced","section_title3":"","section_title4":"","section_type":"LANGUAGES","start_date":"","created_dt":1505826794941}],"Hobbies":[{"end_date":"","is_active":1,"more_info1":"","order_prefs":999,"section_title1":"Astrology","section_title2":"","section_title3":"","section_title4":"","section_type":"HOBBIES","start_date":"","created_dt":1504035355964},{"end_date":"","is_active":1,"more_info1":"","order_prefs":999,"section_title1":"Drawing","section_title2":"","section_title3":"","section_title4":"","section_type":"HOBBIES","start_date":"","created_dt":1504035363995},{"end_date":"","is_active":1,"more_info1":"","order_prefs":999,"section_title1":"Travelling","section_title2":"","section_title3":"","section_title4":"","section_type":"HOBBIES","start_date":"","created_dt":1505826576818}],"Achievement":[{"end_date":"Present","is_active":true,"more_info1":"","order_prefs":999,"section_title1":"COURSE NAME","section_title2":"Institute Name","section_title3":"8.0  CGPA","section_title4":"","section_type":"ACHIEVEMENT","start_date":"","created_dt":1503778733}],"Certifications":[],"Volunteering":[],"Recommendations":[],"Worklinks":[{"websiteURL":"","is_active":1},{"portfolioURL":"","is_active":1},{"blogURL":"","is_active":1},{"slideshareURL":"","is_active":1}],"customSections":[],"Coverletter":{"recruiterSal":"Ms. ","recruiterName":"ABC","companyName":"XYZ Inc.","address":"1 square street, New York, USA","description":"I read with interest your posting for [name of position] on the [name of the job board]. I believe I possess the necessary skills and experience you are seeking and would make a valuable addition to your company.As my resume indicates, I possess more than [number of years] years of progressive experience in the [job field] field. My professional history includes position such as [job title] at [company name] as well as [job title] at [company name].\u003Cbr\u003E\u003Cbr\u003EMost recently, my responsibilities as [job title] at [company name] match the qualifications you are seeking. As the [job title], my responsibilities included [two or three responsibilities which are similar to ones stated in job posting]. I assisted in the successful completion of [project which is similar to one that job posting stated you will work on]. My supervisor also relied on my ability to [skills such as proofreading and excellent communication skills].I have attached my resume for your review and I look forward to speaking with you further regarding your available position."},"New section":[]});
    //if(localStorage.getItem("data") == null)
    //{
        localStorage.setItem("data",JSON.stringify(a));
    //localStorage.setItem("modified_dt",Date.now());
    //}else{
    //    localStorage.setItem("modified_dt",Date.now());
    //}

    setInterval(function(){
        if(ls < localStorage.getItem('modified_dt')){
            $('.svsts').html('Saving changes...');
            $.post('/cv/sync',{"data":localStorage.getItem("data")},function(res){

                if(res == 'logout'){
                    alert('Your session have been logged out. Please login and try again');
                    location.reload();
                }else{

                    ls = Date.now();
                    $('.svsts').show();
                    $('.svsts').html('All changes saved');
                    setTimeout(function(){
                        $('.svsts').html('');
                    }, 1200)
                
                }
                
            });
        }
    }, 3000);

    $('#changeResume li').click(function(){
        $.post('/cv/changetemplate', {'template_id':$(this).data('framework')}, function(data){
            var obj = $.parseJSON(data);
            if(obj.resp == 1){
                location.reload();
            }else{
                // alert("You are already on the smae templte");
            }
        });  
    });


</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/jquery-asScroll.min.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.asScrollable.all.min.js"></script>
    <script src="js/jquery-asHoverScroll.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <!--plugin-->
    <script src="js/jquery-slidePanel.min.js"></script>

    <!-- Scripts -->
    <script src="js/core.min.js"></script>
    <script src="js/site.min.js"></script>
    <script src="js/menu.min.js"></script>
    <script src="js/menubar.min.js"></script>
    <script src="js/sidebar.min.js"></script>
    <script src="js/asscrollable.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/slidepanel.js"></script>

    <script src="js/builder.js?v=1537356705"></script>
    <script src="js/panel.js?v=1537356705"></script>

    <script src="js/SmartCV_v1.js?v=1537356705"></script><script src="js/builder1.js?v=1537356705"></script><script src="js/panel1.js?v=1537356705"></script>
            <div class="site-skintools" style="display:block;" data-section="sections" data-toggle="slidePanel" data-url="/static/classic/topbar/tpl/sections.tpl">
            <div class="site-skintools-inner">
                <div class="site-skintools-toggle" style="box-shadow: 1px 1px 3px #ccc;border-radius: 10px;height:2.35em;">&nbsp;<i class="icon wb-chevron-right primary-600"></i>&nbsp;
                </div>
            </div>
        </div>
    
    <script type="text/javascript">
    
        (function(document, window, $) {
            'use strict';
            var Site = window.Site;

            $(document).ready(function($) {
                Site.run();
                
                var notif_removed = 0;

                $(".remove-notification").click(function(){
                    $(".emailverify-backline").slideUp("slow");
                    $(".emailverify-backline").css("display:none");
                        notif_removed = 1;
                });
                if(notif_removed==1){
                    $(".emailverify-backline").css("display:none");
                }

                                    setTimeout(function(){$('.site-skintools').trigger('click');}, 1000);
                            });

            $.extend({
                redirectPost: function(location, args) {
                var rpfd = '';
                    $.each(args, function(k, v) {
                        rpfd += '<input type="hidden" name="' + k + '" value="' + v + '">';
                    });
                    $('<form action="' + location + '" method="POST">' + rpfd + '</form>').appendTo($(document.body)).submit();
                },
                redirectGet: function(location, args) {
                    var rgfd = '';
                    $.each(args, function(k, v) {
                        rgfd += '<input type="hidden" name="' + k + '" value="' + v + '">';
                    });
                    $('<form action="' + location + '" method="GET">' + rgfd + '</form>').appendTo($(document.body)).submit();
                }
            });
        })(document, window, jQuery);

    </script>


    </body>


</html>
