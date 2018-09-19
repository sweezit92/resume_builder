
var section_arr = [
    {
        "section_name": "PERSONAL DETAILS",
        "url": "/static/classic/topbar/tpl/PERSONAL_DETAILS.tpl",
        "description": "Enter your personal details",
        "img": "/static/classic/topbar/assets/icons/PERSONAL_DETAILS.png",
        "is_active": 1
    },
    {
        "section_name": "CONTACT DETAILS",
        "url": "/static/classic/topbar/tpl/CONTACT_DETAILS.tpl",
        "description": "Enter details on how to reach you and contact you",
        "img": "/static/classic/topbar/assets/icons/SUMMARY.png",
        "is_active": 1
    },
    {
        "section_name": "ABOUT YOU",
        "url": "/static/classic/topbar/tpl/ABOUT_YOU.tpl",
        "description": "Enter a brief description of your professional background",
        "img": "/static/classic/topbar/assets/icons/ABOUT_YOU.png",
        "is_active": 1
    },
    {
        "section_name": "EXPERIENCE",
        "url": "/static/classic/topbar/tpl/EXPERIENCE.tpl",
        "description": "Your professional work experience",
        "img": "/static/classic/topbar/assets/icons/EXPERIENCE.png",
        "is_active": 1
    },
    {
        "section_name": "EDUCATION",
        "url": "/static/classic/topbar/tpl/EDUCATION.tpl",
        "description": "Your academic details",
        "img": "/static/classic/topbar/assets/icons/EDUCATION.png",
        "is_active": 1
    },
    {
        "section_name": "SKILLS",
        "url": "/static/classic/topbar/tpl/SKILL.tpl",
        "description": "Enter your skills & rate your proficiency",
        "img": "/static/classic/topbar/assets/icons/SKILLS.png",
        "is_active": 1
    },
    {
        "section_name": "PROJECTS",
        "url": "/static/classic/topbar/tpl/PROJECT.tpl",
        "description": "Showcase projects which you have worked on",
        "img": "/static/classic/topbar/assets/icons/PROJECTS.png",
        "is_active": 1
    },
    {
        "section_name": "ACHIEVEMENTS",
        "url": "/static/classic/topbar/tpl/ACHIEVEMENTS.tpl",
        "description": "Showcase recognitions you have earned",
        "img": "/static/classic/topbar/assets/icons/ACHIEVEMENTS.png",
        "is_active": 1
    },
    {
        "section_name": "CERTIFICATIONS",
        "url": "/static/classic/topbar/tpl/CERTIFICATION.tpl",
        "description": "Enter details of any Certifications you have qualified",
        "img": "/static/classic/topbar/assets/icons/CERTIFICATIONS.png",
        "is_active": 1
    },
    {
        "section_name": "LANGUAGES",
        "url": "/static/classic/topbar/tpl/LANGUAGE.tpl",
        "description": "Enter the languages that you can speak or write",
        "img": "/static/classic/topbar/assets/icons/LANGUAGES.png",
        "is_active": 1
    },
    {
        "section_name": "HOBBIES",
        "url": "/static/classic/topbar/tpl/HOBBIES.tpl",
        "description": "Choose your hobbies you like",
        "img": "/static/classic/topbar/assets/icons/HOBBIES.png",
        "is_active": 1
    },
    {
        "section_name": "WEB LINKS",
        "url": "/static/classic/topbar/tpl/WORKLINKS.tpl",
        "description": "List links to your website, portfolio, blog & more",
        "img": "/static/classic/topbar/assets/icons/WORKLINKS.png ",
        "is_active": 1
    },
    {
        "section_name": "VOLUNTEERING EXPERIENCE",
        "url": "/static/classic/topbar/tpl/VOLUNTEERING.tpl",
        "description": "Include your volunteering and social works",
        "img": "/static/classic/topbar/assets/icons/VOLUNTEERING.png",
        "is_active": 1
    },
    {
        "section_name": "RECOMMENDATIONS",
        "url": "/static/classic/topbar/tpl/RECOMMENDATIONS.tpl",
        "description": "Include a testimonial from your references here",
        "img": "/static/classic/topbar/assets/icons/RECOMMENDATIONS.png",
        "is_active": 1
    }
];

var coverletter_section = [
    {
        "section_name": "BASIC DETAILS",
        "url": "/static/classic/topbar/tpl/BASIC_DETAILS.tpl",
        "description": "Enter details on how to reach you and contact you",
        "img": "/static/classic/topbar/assets/icons/BASIC_DETAILS.png",
        "is_active": 1
    },
    {
        "section_name": "RECRUITER DETAILS",
        "url": "/static/classic/topbar/tpl/RECRUITER_DETAILS.tpl",
        "description": "Enter details of the recruiter",
        "img": "/static/classic/topbar/assets/icons/SUMMARY.png",
        "is_active": 1
    },
    {
        "section_name": "DESCRIPTION",
        "url": "/static/classic/topbar/tpl/LETTER_DESC.tpl",
        "description": "Enter a brief description of your professional background",
        "img": "/static/classic/topbar/assets/icons/LETTER_DESC.png",
        "is_active": 1
    }
];

var input_fields = {
    "EXPERIENCE": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Job Title",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Company Name",
            "mapTo":"section_title2",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Location",
            "mapTo":"section_title3",
            "is_mandatory":false,
        },
        {
            "tag":"startDate",
            "class":"form-control",
            "label":"Start Date",
            "month":true,
            "year":true,
            "present": false,
            "mapTo":"start_date",
            "is_mandatory":true,
        },
        {
            "tag":"endDate",
            "class":"form-control",
            "label":"End Date",
            "month":true,
            "year":true,
            "present": true,
            "mapTo":"end_date",
            "is_mandatory":true,
        },
        {
            "tag":"textarea",
            "class":"form-control empty",
            "rows": "3",
            "label":"Description",
            "mapTo":"more_info1",
            "is_mandatory":false,
        },
    ],
    "EDUCATION": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Course Name",
            "mapTo":"section_title4",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Instititute Name",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Percentage / CGPA",
            "mapTo":"section_title2",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Location",
            "mapTo":"section_title3",
            "is_mandatory":false,
        },
        {
            "tag":"startDate",
            "class":"form-control",
            "label":"Start Date",
            "month":true,
            "year":true,
            "present": false,
            "mapTo":"start_date",
            "is_mandatory":false,
        },
        {
            "tag":"endDate",
            "class":"form-control",
            "label":"End Date",
            "month":true,
            "year":true,
            "present": true,
            "mapTo":"end_date",
            "is_mandatory":false,
        },
        {
            "tag":"textarea",
            "class":"form-control",
            "rows": "3",
            "label":"Description",
            "mapTo":"more_info1",
            "is_mandatory":false,
        },
    ],
    "SKILLS": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"Skill name",
            "label":"Skill Name",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"select_skill",
            "class":"form-control",
            "type": "select_skill",
            "placeholder":"Proficiency",
            "label":"Proficiency",
            "mapTo":"section_title2",
            "is_mandatory":true,
        },
    ],
    "PROJECTS": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Project Title",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Company/Institute Name",
            "mapTo":"section_title2",
            "is_mandatory":false,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Location",
            "mapTo":"section_title3",
            "is_mandatory":false,
        },
        {
            "tag":"startDate",
            "class":"form-control",
            "label":"Start Date",
            "month":true,
            "year":true,
            "present": false,
            "mapTo":"start_date",
            "is_mandatory":true,
        },
        {
            "tag":"endDate",
            "class":"form-control",
            "label":"End Date",
            "month":true,
            "year":true,
            "present": true,
            "mapTo":"end_date",
            "is_mandatory":false,
        },
        {
            "tag":"textarea",
            "class":"form-control",
            "rows": "3",
            "label":"Description",
            "mapTo":"more_info1",
            "is_mandatory":false,
        },
    ],
    "CERTIFICATIONS": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Certification Title",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Issuer Name",
            "mapTo":"section_title2",
            "is_mandatory":false,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Location",
            "mapTo":"section_title3",
            "is_mandatory":false,
        },
        {
            "tag":"startDate",
            "class":"form-control",
            "label":"Start Date",
            "month":true,
            "year":true,
            "present": false,
            "mapTo":"start_date",
            "is_mandatory":true,
        },
        {
            "tag":"textarea",
            "class":"form-control",
            "rows": "3",
            "label":"Description",
            "mapTo":"more_info1",
            "is_mandatory":false,
        },
    ],
    "LANGUAGES": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"Language Name",
            "label":"Language Name",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"select_skill",
            "class":"form-control",
            "type": "select_language",
            "placeholder":"Proficiency",
            "label":"Proficiency",
            "mapTo":"section_title2",
            "is_mandatory":true,
        },
    ],
    "VOLUNTEERING": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Organisation",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"datalist",
            "class":"form-control",
            "list": ['Animal Welfare', 'Arts and Culture', 'Children', 'Civil Rights & Social Action', 'Disaster and Humanitarian Belief','Education', 'Environment','Health', 'Human Rights', 'Politics', 'Poverty', 'Alleviation', 'Science and Technology', 'Social Services'],
            "placeholder":"",
            "label":"Cause",
            "mapTo":"section_title2",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Location",
            "mapTo":"section_title3",
            "is_mandatory":false,
        },
        {
            "tag":"startDate",
            "class":"form-control",
            "label":"Start Date",
            "month":true,
            "year":true,
            "present": false,
            "mapTo":"start_date",
            "is_mandatory":false,
        },
        {
            "tag":"endDate",
            "class":"form-control",
            "label":"End Date",
            "month":true,
            "year":true,
            "present": true,
            "mapTo":"end_date",
            "is_mandatory":false,
        },
        {
            "tag":"textarea",
            "class":"form-control empty",
            "rows": "3",
            "label":"Description",
            "mapTo":"more_info1",
            "is_mandatory":false,
        },
    ],
    "RECOMMENDATIONS": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Name",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Designation",
            "mapTo":"section_title2",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Company/Institute Name",
            "mapTo":"section_title3",
            "is_mandatory":false,
        },
        {
            "tag":"startDate",
            "class":"form-control",
            "label":"Start Date",
            "month":true,
            "year":true,
            "present": false,
            "mapTo":"start_date",
            "is_mandatory":false,
        },
        {
            "tag":"textarea",
            "class":"form-control empty",
            "rows": "3",
            "label":"Description",
            "mapTo":"more_info1",
            "is_mandatory":false,
        },
    ],
    "CUSTOMSECTIONSV1": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Title",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"",
            "label":"Sub Title 1",
            "mapTo":"section_title2",
            "is_mandatory":false,
        },
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"Sub Title 2",
            "label":"Location",
            "mapTo":"section_title3",
            "is_mandatory":false,
        },
        {
            "tag":"startDate",
            "class":"form-control",
            "label":"Start Date",
            "month":true,
            "year":true,
            "present": false,
            "mapTo":"start_date",
            "is_mandatory":false,
        },
        {
            "tag":"endDate",
            "class":"form-control",
            "label":"End Date",
            "month":true,
            "year":true,
            "present": true,
            "mapTo":"end_date",
            "is_mandatory":false,
        },
        {
            "tag":"textarea",
            "class":"form-control empty",
            "rows": "3",
            "label":"Description",
            "mapTo":"more_info1",
            "is_mandatory":false,
        },
    ],
    "CUSTOMSECTIONSV2": [
        {
            "tag":"input",
            "class":"form-control",
            "type": "text",
            "placeholder":"Title",
            "label":"Skill Name",
            "mapTo":"section_title1",
            "is_mandatory":true,
        },
        {
            "tag":"select_skill",
            "class":"form-control",
            "type": "select_skill",
            "placeholder":"Proficiency",
            "label":"Proficiency",
            "mapTo":"section_title2",
            "is_mandatory":true,
        },
    ],
};

var ResumeData = initializeCVData();
var activeSection = 'sections';
buildresume(ResumeData);
buildcoverletter(ResumeData);

function createSectionHTML(sectionArray, showTools = 0){
  var str = "";
    $.each(sectionArray, function(k,v)
    {
        if(v != null && v.is_active == 1)
        {
          str += '<a class="list-group-item" href="javascript:void(0)" data-section="'+v.section_name+'" data-toggle="slidePanel" data-url="'+v.url+'" >'+
                '<div class="media">'+
                  '<div class="media-left">'+
                    '<div class="avatar avatar-sm">'+
                      '<img src="'+v.img+'" alt="...">'+
                    '</div>'+
                  '</div>'+
                  '<div class="media-body">'+
                    '<h4 class="media-heading">'+v.section_name.toUpperCase()+'</h4>'+
                    '<small>'+v.description+'</small>'+
                  '</div>';

                    str += '<div class="media-right">';
                    if(showTools == 1 && false){
                      if(v.is_active == 1)
                      {
                        str += '<i class="icon wb-eye visibility-section"'+ 'data-key="'+k+'"'+ 'data-status="'+v.is_active+'"' + 'style="font-size:10px;color: #76838f;"></i>';
                      }else{
                        str += '<i class="icon wb-eye-close visibility-section"'+ 'data-key="'+k+'"'+ 'data-status="'+v.is_active+'"' + 'style="font-size:10px;color: #76838f;"></i>';
                      }
                      str += '<i class="icon wb-close delete-section"'+ 'data-key="'+k+'"' + 'style="font-size:10px;color: #DE5C5C;"></i>';
                    }
                    str +='</div>';
                str += '</div>'+
              '</a>';
        }
    });

    if(ResumeData && ResumeData.customSections){
        $.each(ResumeData.customSections, function(k,v){

            if(v != null)
            {
              str += '<a class="list-group-item" href="javascript:void(0)" data-section="'+v.section_title1+'" data-key="'+k+'" data-toggle="slidePanel" data-url="/static/classic/topbar/tpl/'+((v.section_type == 'CUSTOMSECTIONSV1')? 'CUSTOMSECTIONSV1' : 'CUSTOMSECTIONSV2') +'.tpl" >'+
                    '<div class="media">'+
                      '<div class="media-left">'+
                        '<div class="avatar avatar-sm">'+
                          '<img src="/static/classic/topbar/assets/images/chars/'+v.section_title1.charAt(0).toUpperCase()+'.png" alt="...">'+
                        '</div>'+
                      '</div>'+
                      '<div class="media-body">'+
                        '<h4 class="media-heading">'+v.section_title1.toUpperCase()+'</h4>'+
                        '<small>Your custom section #'+(k+1)+'</small>'+
                      '</div>';

                        str += '<div class="media-right">';
                        if(showTools == 1){
                          if(v.is_active == 1)
                          {
                            str += '<i class="icon wb-eye visibility-section"'+ 'data-key="'+k+'"'+ 'data-status="'+v.is_active+'"' + 'style="font-size:10px;color: #76838f;"></i>';
                          }else{
                            str += '<i class="icon wb-eye-close visibility-section"'+ 'data-key="'+k+'"'+ 'data-status="'+v.is_active+'"' + 'style="font-size:10px;color: #76838f;"></i>';
                          }
                          str += '<i class="icon wb-close delete-section"'+ 'data-key="'+k+'"' + 'style="font-size:10px;color: #DE5C5C;"></i>';
                        }
                        str +='</div>';
                    str += '</div>'+
                  '</a>';
            }


        });
    }

  return str;
}

function initSectionjs() {
    $('.all_section div.media-right .wb-close').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        var activeRecord = $(this).closest('.list-group-item');
        deleteSection(activeRecord.data('section'), activeRecord.data('key'));
        var str = createSectionHTML(section_arr, 1);
        $('.all_section').html(str);
        $('.all_section div.media-right .wb-close').off();
        initSectionjs();

    });

    $('.all_section div.media-right .wb-eye, .all_section div.media-right .wb-eye-close').click(function(e) {

        e.preventDefault();
        e.stopPropagation()
        var activeRecord = $(this).closest('.list-group-item');
        toggleSectionVisibility(activeRecord.data('section'), activeRecord.data('key'));
        var str = createSectionHTML(section_arr, 1);
        $('.all_section').html(str);
        $('.all_section div.media-right .wb-eye, .all_section div.media-right .wb-eye-close').off();
        initSectionjs();
    });
}

function createCustomSectionPanel(active_section_name, cs_type = ''){

    var sectionHeaderStr = '';
    var sectionNewFormBodyStr = '';
    var nextSection;
    var currentSection;

    $.each(ResumeData['customSections'], function(k,v){


        if(v != null && v.is_active == 1 && v.section_title1 == active_section_name)
        {
            sectionHeaderStr += '<li style="cursor:pointer;font-weight:400;display:inline-block;" role="presentation">';
            sectionHeaderStr += '  <a class="';
            sectionHeaderStr += 'active_menu';
            sectionHeaderStr += '" data-toggle="slidePanel" aria-hidden="true" data-section="'+active_section_name+'"><span>'+active_section_name.toUpperCase()+'</span>';
            sectionHeaderStr += '  </a>';
            sectionHeaderStr += '</li>';
        }
    });

    $('#sectionHeader').html(sectionHeaderStr);
    // $("#prev_btn").click({direction: "prev"}, moveToItem);
    // $("#next_btn").click({direction: "next"}, moveToItem);
    // if(nextSection){
    //     $('.btn_next_section').data('url', nextSection.url);
    // }else{
    //     $('.btn_next_section').hide();
    // }

    // // initializing js code
    // $('.scrollable-horizontal').scrollLeft($("a.active_menu").parent().offset().left - $('.scrollable-horizontal').offset().left);

    // var items = $(".mobile_menu_content .scrollable-horizontal li");
    // var scrollContainer = $(".mobile_menu_content .scrollable-horizontal");

        if(cs_type == 'CUSTOMSECTIONSV1'){
            populate_list_group(active_section_name, cs_type);
            console.log(1, active_section_name, cs_type);
            createNewFormBody(active_section_name, cs_type);
        }else{
            populate_sections(active_section_name, cs_type);
        }


    // }


    // $('.slidePanel-desc').html(currentSection.description);



    // function fetchItem(container, items, isNext) {
    //   var i,
    //       scrollLeft = container.scrollLeft();

    //   if (isNext === undefined) {
    //       isNext = true;
    //   }

    //   if (isNext && container[0].scrollWidth - container.scrollLeft() <= container.outerWidth()) {
    //       return $(items[0]);
    //   }
    //   for (i = 0; i < items.length; i++) {

    //       if (isNext && $(items[i]).position().left > 0) {
    //           return $(items[i]);
    //       } else if (!isNext && $(items[i]).position().left >= 0) {
    //           return i == 0 ? $(items[items.length - 1]) : $(items[i-1]);
    //       }
    //   }
    //   return null;
    // }

    // function moveToItem(event) {
    //   var isNext = event.data.direction == "next";
    //   var item = isNext ? fetchItem(scrollContainer, items, true) : fetchItem(scrollContainer, items, false);

    //   if (item) {
    //       scrollContainer.animate({"scrollLeft": item.position().left + scrollContainer.scrollLeft()}, 400);
    //   }
    // }

    $('.addnewBtn').click(function(){
        toggleNewForm();
    });

    window.addEventListener("resize", function(e){
        $('.tab-pane').asScrollable('update');
    });
}

function createPanel(active_section_name){

    var sectionHeaderStr = '';
    var sectionNewFormBodyStr = '';
    var nextSection;
    var currentSection;

    $.each(section_arr, function(k,v){


        if(v != null && v.is_active == 1)
        {
            sectionHeaderStr += '<li style="cursor:pointer;font-weight:400;" role="presentation">';
            sectionHeaderStr += '  <a class="';
            if(v.section_name == active_section_name){
                sectionHeaderStr += 'active_menu';
                currentSection = section_arr[k];
                nextSection = section_arr[k+1];
            }
            sectionHeaderStr += '" data-toggle="slidePanel" aria-hidden="true" data-url="'+v.url+'" data-section="'+v.section_name+'"><span>'+v.section_name.replace(" ", "&nbsp;")+'</span>';
            sectionHeaderStr += '  </a>';
            sectionHeaderStr += '</li>';
        }
    });

    $('#sectionHeader').html(sectionHeaderStr);
    $("#prev_btn").click({direction: "prev"}, moveToItem);
    $("#next_btn").click({direction: "next"}, moveToItem);
    if(nextSection){
        $('.btn_next_section').data('url', nextSection.url);
    }else{
        $('.btn_next_section').hide();
    }

    // initializing js code
    $('.scrollable-horizontal').scrollLeft($("a.active_menu").parent().offset().left - $('.scrollable-horizontal').offset().left);

    var items = $(".mobile_menu_content .scrollable-horizontal li");
    var scrollContainer = $(".mobile_menu_content .scrollable-horizontal");
    var item_pos = [];
    for (var i = 0; i < items.length; i++) {
        item_pos.push(Math.floor($(items[i]).position().left));
    }

    if(currentSection.section_name == "ABOUT YOU" || currentSection.section_name == "SKILLS" || currentSection.section_name == "LANGUAGES" || currentSection.section_name == "ACHIEVEMENTS" || currentSection.section_name == "PERSONAL DETAILS" || currentSection.section_name == "CONTACT DETAILS" ||  currentSection.section_name == "WEB LINKS" ||  currentSection.section_name == "HOBBIES"){
        populate_sections(currentSection.section_name);
    }else{

        if(currentSection.section_name == 'VOLUNTEERING EXPERIENCE'){
            currentSection.section_name = 'VOLUNTEERING';
        }

        populate_list_group(currentSection.section_name);

        createNewFormBody(currentSection.section_name);

        if(currentSection.section_name == 'VOLUNTEERING'){
            currentSection.section_name = 'VOLUNTEERING EXPERIENCE';
        }
    }


    $('.slidePanel-desc').html(currentSection.description);



    function fetchNextItemPosition(container, items, isNext) {
        var i,
        scrollLeft = container.scrollLeft();

        if(isNext == false)
        {
            for (i = item_pos.length-1; i >= 0; i--)
            {
                if((item_pos[i] - item_pos[0]) < scrollLeft){
                    return (item_pos[i] - item_pos[0]);
                }
            }

            return item_pos[item_pos.length-1];
        }
        else
        {
            for (i = 0; i < item_pos.length-1; i++)
            {
                if((item_pos[i] - item_pos[0]) >= scrollLeft){
                    return (item_pos[i+1] - item_pos[0]);
                }
            }
            return 0;
        }

    }

    function moveToItem(event) {
        var isNext = event.data.direction == "next";
        var pos = isNext ? fetchNextItemPosition(scrollContainer, items, true) : fetchNextItemPosition(scrollContainer, items, false);
        scrollContainer.animate({"scrollLeft": pos+"px"}, 400);

    }

    $('.addnewBtn').click(function(){
        toggleNewForm();
    });

    window.addEventListener("resize", function(e){
        $('.tab-pane').asScrollable('update');
    });
}

function createCLPanel(active_section_name){

    var sectionHeaderStr = '';
    var sectionNewFormBodyStr = '';
    var nextSection;
    var currentSection;

    $.each(coverletter_section, function(k,v){


        if(v != null && v.is_active == 1)
        {
            sectionHeaderStr += '<li style="cursor:pointer;font-weight:400;" role="presentation">';
            sectionHeaderStr += '  <a class="';
            if(v.section_name == active_section_name){
                sectionHeaderStr += 'active_menu';
                currentSection = coverletter_section[k];
                nextSection = coverletter_section[k+1];
            }
            sectionHeaderStr += '" data-toggle="slidePanel" aria-hidden="true" data-url="'+v.url+'" data-section="'+v.section_name+'"><span>'+v.section_name.replace(" ", "&nbsp;")+'</span>';
            sectionHeaderStr += '  </a>';
            sectionHeaderStr += '</li>';
        }
    });

    $('#sectionHeader').html(sectionHeaderStr);
    $("#prev_btn").click({direction: "prev"}, moveToItem);
    $("#next_btn").click({direction: "next"}, moveToItem);
    if(nextSection){
        $('.btn_next_section').data('url', nextSection.url);
    }else{
        $('.btn_next_section').hide();
    }

    // initializing js code
    $('.scrollable-horizontal').scrollLeft($("a.active_menu").parent().offset().left - $('.scrollable-horizontal').offset().left);

    var items = $(".mobile_menu_content .scrollable-horizontal li");
    var scrollContainer = $(".mobile_menu_content .scrollable-horizontal");
    var item_pos = [];
    for (var i = 0; i < items.length; i++) {
        item_pos.push(Math.floor($(items[i]).position().left));
    }

    $('.slidePanel-desc').html(currentSection.description);



    function fetchNextItemPosition(container, items, isNext) {
        var i,
        scrollLeft = container.scrollLeft();

        if(isNext == false)
        {
            for (i = item_pos.length-1; i >= 0; i--)
            {
                if((item_pos[i] - item_pos[0]) < scrollLeft){
                    return (item_pos[i] - item_pos[0]);
                }
            }

            return item_pos[item_pos.length-1];
        }
        else
        {
            for (i = 0; i < item_pos.length-1; i++)
            {
                if((item_pos[i] - item_pos[0]) >= scrollLeft){
                    return (item_pos[i+1] - item_pos[0]);
                }
            }
            return 0;
        }

    }

    function moveToItem(event) {
        var isNext = event.data.direction == "next";
        var pos = isNext ? fetchNextItemPosition(scrollContainer, items, true) : fetchNextItemPosition(scrollContainer, items, false);
        scrollContainer.animate({"scrollLeft": pos+"px"}, 400);

    }

    $('.addnewBtn').click(function(){
        toggleNewForm();
    });

    window.addEventListener("resize", function(e){
        $('.tab-pane').asScrollable('update');
    });
}

function addNewCustomSection(cs_type, section_name){

    var obj =  {
                    end_date: "",
                    is_active: 1,
                    more_info1: "",
                    order_prefs: 999,
                    section_title1: "",
                    section_title2: "",
                    section_title3: "",
                    section_title4: "",
                    section_type: cs_type,
                    start_date: "",
                    created_dt: new Date().getTime()
                };

    obj.section_title1 = section_name;

    if(section_name.length > 3){
        ResumeData['customSections'].push(obj);
        ResumeData[section_name] = [];
        saveResumeData();
        return true;
    }else{
        alert('Section name must be of more than 3 characters');
        return false;
    }
}

function initializeCVData(){
    ResumeData = localStorage.getItem('data');
    ResumeData = $.parseJSON(ResumeData);

    // if(ResumeData.Profile.type != 'FRESHER' && ResumeData.Profile.type != 'EXPERIENCED'){
        $('form[name="form_resume_type"] input[value="'+ResumeData.Profile.type+'"]').attr('checked','checked');
    // }

    $('form[name="form_resume_type"] input[type=radio]').on('change',function() {
        ResumeData.Profile.type = this.value;
        saveResumeData();
    });

    return ResumeData;
}

function populate_list_group(section_name, cs_type = '') {
    // body...
    console.log(section_name, cs_type);
    if(ResumeData){

        var section_data = ResumeData[section_name.capitalizeFirstLetter()].sort(function(a, b) {
                                if (a == null || b == null) return 0;
                                    return parseFloat(a.order_prefs) - parseFloat(b.order_prefs);
                                });

        if(section_data){
            var str = '';
            $.each(section_data, function(k,v){

                str += '<a class="list-group-item margin-15" href="javascript:void(0)" data-key="'+k+'" id="'+k+'" >';
                str +=  '<div class="media">';
                str +=      '<div class="media-left" style="padding-right:0px;">';
                str +=          '<div class="avatar drag-handle margin-right-15" style="width:15px;"><img src="https://lh3.googleusercontent.com/-R2RhurLgYNY/Vy2hoYXFqqI/AAAAAAAAB1U/mWrX0vaZRToOHzgxYJqTQRQ9TkwBz-mCACL0B/w15-h32-no/rsz_drag_icon.png" alt="..." width="20px">';
                str +=          '</div>';
                str +=      '</div>';
                str +=      '<div class="media-left" style="padding-right:10px;">';
                if(v.section_title1 == undefined){
                    str +=          '<div class="avatar avatar-sm" style="width:35px;"><img src="/static/classic/topbar/assets/images/chars/'+'#'+'.png" alt="...">';
                }else{
                    str +=          '<div class="avatar avatar-sm" style="width:35px;"><img src="/static/classic/topbar/assets/images/chars/'+v.section_title1.charAt(0).toUpperCase()+'.png" alt="...">';
                }
                str +=          '</div>';
                str +=      '</div>';
                str +=      '<div class="media-body" data-key="'+k+'">';
                str +=          '<h4 class="media-heading">'+v.section_title1+'</h4>';
                str +=          '<p class="small">'+v.section_title2+' - '+v.section_title3+'</p>';
                str +=      '</div>';
                str +=      '<div class="media-right">';

                if(v.is_active){
                    str +=      '<i class="icon wb-eye visibility"></i>';
                }else{
                    str +=      '<i class="icon wb-eye-close visibility"></i>';
                }
                str +=          '<i class="icon wb-close delete"></i>';
                str +=      '</div>';
                str +=  '</div>';
                str += '</a>';
            });

            $('#list_group_panel').html(str);

            $(".allowSort").sortable({
                axis: "y",
                cursor: "move",
                opacity: 0.65,
                cancel: ".editForm",
                handle: '.drag-handle',
                update: function(event, ui) {
                    var sectionOrder = $(this).sortable('toArray');
                    var orderpref = 0;
                    $.each(sectionOrder, function(k, datav) {
                        if (datav != "") {
                            ResumeData[section_name.capitalizeFirstLetter()][datav].order_prefs = orderpref;
                            orderpref++;
                        }
                    });
                    populate_list_group(section_name);
                    saveResumeData();
                },
                forcePlaceholderSize: true
            });


            $('#list_group_panel div.media-body').click(function() {

                var activeRecord = $(this).closest('.list-group-item');
                activeRecord.hide();
                var str = createeditFormBody(section_name, activeRecord.data('key'), cs_type);
                $(str).insertAfter(activeRecord).slideDown('slow');
                $('#editForm-title').html('EDIT '+ section_name.toUpperCase());
                initjsforeditForm(section_name, activeRecord.data('key'), cs_type);

            });

            $('#list_group_panel div.media-right .wb-close').click(function() {

                var activeRecord = $(this).closest('.list-group-item');
                deleteRecord(section_name, activeRecord.data('key'));
                populate_list_group(section_name, cs_type);

            });

            $('#list_group_panel div.media-right .wb-eye, #list_group_panel div.media-right .wb-eye-close').click(function() {

                var activeRecord = $(this).closest('.list-group-item');
                toggleRecordVisibility(section_name, activeRecord.data('key'));
                populate_list_group(section_name, cs_type);

            });

        }else{

            //Report Error
        }

    }else{
        // Report Error
    }
}

function populate_skill_list_group(section_name, cs_type = '') {

    if(ResumeData){

        if(cs_type != ''){
            var section_field = input_fields[cs_type];
        }else{
            var section_field = input_fields[section_name.toUpperCase()];
        }

        var section_data = ResumeData[section_name.capitalizeFirstLetter()].sort(function(a, b) {
                                if (a == null || b == null) return 0;
                                    return parseFloat(a.order_prefs) - parseFloat(b.order_prefs);
                                });


        var str = '';

        $.each(section_data, function(key, val) {

            str += '<form class=" form-material padding-15 editFormItem" data-key="'+key+'">';
            str +=      '<div class="input-group">';
            $.each(section_field, function(k,v) {

                switch(v.tag){
                    case 'input':
                        str += '<div class="col-xs-5">';
                        str +=      '<input type="'+v.type+'" class="'+v.class+'" placeholder="'+v.placeholder+'" value="' + section_data[key][v.mapTo] + '"  data-key="'+key+'" name="'+v.mapTo+'">';
                        str += '</div>';
                        break;

                    case 'select_skill':
                        str += '<div class="col-xs-5">';
                        str +=      '<select class="'+v.class+'" data-key="'+key+'" name="'+v.mapTo+'">';
                        str +=          '<option>'+v.label+'</option>';
                        str +=          '<option value="Beginner"';
                                        if(section_data[key][v.mapTo] == 'Beginner'){
                                            str += ' selected ';
                                        }
                        str +=          '>Beginner</option>';
                        str +=          '<option value="Intermediate"';
                                        if(section_data[key][v.mapTo] == 'Intermediate'){
                                            str += ' selected ';
                                        }
                        str +=          '>Intermediate</option>';
                        str +=          '<option value="Advanced"';
                                        if(section_data[key][v.mapTo] == 'Advanced'){
                                            str += ' selected ';
                                        }
                        str +=          '>Advanced</option>';
                        str +=          '<option value="Expert"';
                                        if(section_data[key][v.mapTo] == 'Expert'){
                                            str += ' selected ';
                                        }
                        str +=          '>Expert</option>';
                        str +=      '</select>';
                        str += '</div>';
                        break;

                    case 'select_language':
                        str += '<div class="col-xs-5">';
                        str +=      '<select class="'+v.class+'">';
                        str +=          '<option>'+v.label+'</option>';
                        str +=          '<option value="Beginner"';
                                        if(section_data[key][v.mapTo] == 'Beginner'){
                                            str += ' selected ';
                                        }
                        str +=          '>Beginner</option>';
                        str +=          '<option value="Intermediate"';
                                        if(section_data[key][v.mapTo] == 'Intermediate'){
                                            str += ' selected ';
                                        }
                        str +=          '>Intermediate</option>';
                        str +=          '<option value="Advanced"';
                                        if(section_data[key][v.mapTo] == 'Advanced'){
                                            str += ' selected ';
                                        }
                        str +=          '>Advanced</option>';
                        str +=          '<option value="Expert"';
                                        if(section_data[key][v.mapTo] == 'Expert'){
                                            str += ' selected ';
                                        }
                        str +=          '>Expert</option>';
                        str +=      '</select>';
                        str += '</div>';
                        break;
                }
            });

            str +=              '<div class="col-xs-2 no-line-break">';
                                if (section_data[key].is_active == 1) {
                                    str += '<i class="icon wb-eye" style="font-size:10px;color:#76838f;margin-top:13px;cursor:pointer;"></i>&nbsp;&nbsp;';
                                }
                                else {
                                    str += '<i class="icon wb-eye-close" style="font-size:10px;color: #76838f; margin-top: 13px;cursor:pointer;"></i>&nbsp;&nbsp;';
                                }

                                str += '<i class="icon wb-close" style="font-size:10px;color: #DE5C5C;cursor:pointer;"></i>';
            str +=              '</div>';
            str +=      '</div>';
            str += '</form>';

        });

        str += '</span>';

        $('#list_group_panel').html(str);

        str = '';

        str +=  '<div class="form-material padding-15 padding-top-0 newFormItem">';
        str +=      '<div class="input-group">';

        $.each(section_field, function(k,v) {

            switch(v.tag){
                case 'input':
                    str += '<div class="col-xs-5">';
                    str +=      '<input type="'+v.type+'" class="'+v.class+'" placeholder="'+v.placeholder+'" name="'+v.mapTo+'">';
                    str += '</div>';
                    break;

                case 'select_skill':
                    str += '<div class="col-xs-5">';
                    str +=      '<select class="'+v.class+'" name="'+v.mapTo+'"">';
                    str +=          '<option>'+v.label+'</option>';
                    str +=          '<option value="Beginner"';

                    str +=          '>Beginner</option>';
                    str +=          '<option value="Intermediate"';

                    str +=          '>Intermediate</option>';
                    str +=          '<option value="Advanced"';

                    str +=          '>Advanced</option>';
                    str +=          '<option value="Expert"';

                    str +=          '>Expert</option>';
                    str +=      '</select>';
                    str += '</div>';
                    break;

                case 'select_language':
                    str += '<div class="col-xs-5">';
                    str +=      '<select class="'+v.class+'" name="'+v.mapTo+'">';
                    str +=          '<option>'+v.label+'</option>';
                    str +=          '<option value="Beginner"';

                    str +=          '>Beginner</option>';
                    str +=          '<option value="Intermediate"';

                    str +=          '>Intermediate</option>';
                    str +=          '<option value="Advanced"';

                    str +=          '>Advanced</option>';
                    str +=          '<option value="Expert"';

                    str +=          '>Expert</option>';
                    str +=      '</select>';
                    str += '</div>';
                    break;
            }
        });
        str +=          '<div class="col-xs-2 no-line-break">';
        str +=              '<button type="button" class="btn btn-success btn-xs add_new">ADD</button>';
        str +=          '</div>';
        str +=      '</div>';
        str +=  '</div>';



        $('#newFormItem').html(str);

        $('.newFormItem .add_new').click(function(e){
            addNewFormSkillItem(section_name, cs_type);
        });

        $('.editFormItem .wb-eye, .editFormItem .wb-eye-close').click(function(){
            var activeRecord = $(this).closest('.editFormItem');
            toggleRecordVisibility(section_name, activeRecord.data('key'));
            populate_skill_list_group(section_name, cs_type);
        });

        $('.editFormItem .wb-close').click(function(){
            var activeRecord = $(this).closest('.editFormItem');
            deleteRecord(section_name, activeRecord.data('key'));
            populate_skill_list_group(section_name, cs_type);
        });

        $('.editFormItem input, .editFormItem select, .editFormItem .note-editable').on('keyup change', function(){
            saveeditFormItemSkill(section_name, $(this).data('key'),  $(this), cs_type);
        });

    }else{
        // Report Error
    }
}

function populate_hobbies_list_group(section_name) {

    if(ResumeData){

        var section_data = ResumeData[section_name.capitalizeFirstLetter()].sort(function(a, b) {
                                if (a == null || b == null) return 0;
                                    return parseFloat(a.order_prefs) - parseFloat(b.order_prefs);
                                });
        var str = '';

        $.each(section_data, function(k, v) {
            if (v != null && v.section_type == "HOBBIES" && v.section_title1 != null) {
                str += '<div class="col-xs-4 col-sm-4">';
                str +=     '<div class="example">';
                str +=         '<a class="thumbnail" href="javascript:void(0)">';
                str +=             '<span class="badge badge-danger up pull-right"><i class="fa fa-close delete" data-key="'+k+'"></i></span>';
                str +=             '<img src="/static/classic/topbar/assets/hobbies/'+v.section_title1.toLowerCase().split(' ').join('_')+'.svg" alt="...">';
                str +=         '</a>';
                str +=     '</div>';
                str += '</div>';

            }else{
              deleteRecord(section_name, k, 0);
            }
        });

        $('#list_group_panel_hobbies').html(str);

        $('#add_new, #list_group_panel_hobbies .delete').off('click');

        $('#add_new').on('click', function(e){
            addNewFormHobbieItem(section_name);
        });

        $('#list_group_panel_hobbies .delete').on('click',function(e) {
            deleteRecord(section_name, $(this).data('key'));
            populate_hobbies_list_group(section_name);
        });
    }
}

function initjsforeditForm(section_name, key, cs_type = '') {

    $('.editForm-save,.editForm-header,.editForm-footer').click(function() {
        saveeditFormItem(section_name, key, cs_type);
    });

    $('.editForm-cancel, .editForm .fa-close').click(function(e) {
        $(".editForm").animate({height: 50}, 'slow', function(){
            populate_list_group(section_name, cs_type);
        });
    });

    $('.editForm textarea').summernote({
        height:100
    });
    $('.editForm .note-style, .editForm .note-fontname,.editForm .note-font,.editForm .note-color, .editForm .note-table,.editForm .note-height,.editForm .note-insert, .editForm .note-view,.editForm .note-help, .editForm  .note-statusbar').remove();
    $('.editForm .note-para').addClass("pull-right");
    $('.editForm .note-para').find('button:nth-child(2)').hide();
    $('.editForm .note-para').find('button:nth-child(3)').hide();
    $('.editForm .note-toolbar, .editForm .note-editor').css("border", "0px");
    $('.editForm .note-toolbar').css("background-color", "white");
    $('.editForm .note-editor').css("border-bottom", "1px #AAAAAA solid");
    $('.editForm .note-editable').data("key", key);


    $('.editForm input, .editForm select, .editForm .note-editable').on('keyup change', function(){
        switch($(this).attr('name')){

            case "section_title1":
                var ele = "."+section_name+"-"+$(this).data("key")+".Heading";
                $(ele).html($(this).val().toUpperCase());
                break;

            case "section_title2":
            case "section_title3":
            case "section_title4":
            case "start_date":
            case "end_date":
                var ele = "."+section_name+"-"+$(this).data("key")+".SubHeading";

                var subtitle = $.trim($('.editForm [name="section_title4"]').val());

                if ($.trim($('.editForm [name="section_title2"]').val()) != "" && subtitle != "") {
                    subtitle += ' &nbsp;|&nbsp; ';
                }
                subtitle += $.trim($('.editForm [name="section_title2"]').val());

                if ($.trim($('.editForm [name="section_title3"]').val()) != "" && subtitle != "") {
                    subtitle += ' &nbsp;|&nbsp; ';
                }
                subtitle += $.trim($('.editForm [name="section_title3"]').val());

                var start_date = '';
                start_date += $($('.editForm [name="start_date"]')[0]).val()+" ";
                start_date += $($('.editForm [name="start_date"]')[1]).val();
                if (subtitle != "" && ($.trim(start_date) != "")) {
                    subtitle += ' &nbsp;|&nbsp; '+$.trim(start_date);
                }

                var end_date = '';
                if($('.editForm input[name="end_date"]').prop('checked')){
                    end_date = ' Present'
                }else{
                    end_date += $($('.editForm [name="end_date"]')[0]).val()+" ";
                    end_date += $($('.editForm [name="end_date"]')[1]).val();
                }
                if($.trim(end_date) != ""){
                    subtitle += " - "+$.trim(end_date);
                }

                $(ele).html(subtitle);
                break;

            case "more_info1":
                var ele = "."+section_name+"-"+$(this).data("key")+".Description";
                if($('.editForm [name="more_info1"]').code() == "" || $('.editForm [name="more_info1"]').code() == "<br>"){
                    $(ele).html('');
                }else{
                    $(ele).html($('.editForm [name="more_info1"]').code());
                }
                break;

            default:
                if($(this).hasClass('note-editable')){
                    var ele = "."+section_name+"-"+$(this).data("key")+".Description";
                    if($('.editForm [name="more_info1"]').code() == "" || $('.editForm [name="more_info1"]').code() == "<br>"){
                        $(ele).html('');
                    }else{
                        $(ele).html($('.editForm [name="more_info1"]').code());
                    }
                }
        }
    });


    var editables = document.getElementsByClassName('note-editable');
    for (var i = 0; i < editables.length; i++) {
        editables[i].addEventListener('paste', function(e) {
        var clipboardData, pastedData;

            e.stopPropagation();
            e.preventDefault();

            clipboardData = e.clipboardData || window.clipboardData;
            pastedData = clipboardData.getData('text/plain');

            document.execCommand('insertText', false, pastedData);
        }, false);
    }

    $("input:checkbox[name='end_date']").on('change', function() {
        $("select[name='end_date']").prop('disabled', function(i, v) { return !v; });
    });
}

function initjsfornewForm(section_name, cs_type = '') {

    // $('.newForm-save').click(function() {
    //     console.log(section_name, key);
    //     saveeditFormItem(section_name, key);
    // });

    // $('.editForm-cancel, .editForm .fa-close').click(function() {
    //     $(".editForm").animate({height: 50}, 'slow', function(){
    //         populate_list_group(section_name);
    //     });
    // });

    $('#newForm-title, #addnewBtn-text').html('ADD '+ section_name.toUpperCase());
    $('.newForm-header .fa-close, .newForm .newForm-cancel').on('click', function(){toggleNewForm('close');});
    $('.newForm .newForm-save').click(function(){
        addNewFormItem(section_name, cs_type);
    });

    $('.newForm textarea').summernote({
        height:100
    });
    $('.newForm .note-style, .newForm .note-fontname,.newForm .note-font,.newForm .note-color, .newForm .note-table,.newForm .note-height,.newForm .note-insert, .newForm .note-view,.newForm .note-help, .newForm  .note-statusbar').remove();
    $('.newForm .note-para').addClass("pull-right");
    $('.newForm .note-para').find('button:nth-child(2)').hide();
    $('.newForm .note-para').find('button:nth-child(3)').hide();
    $('.newForm .note-toolbar, .newForm .note-editor').css("border", "0px");
    $('.newForm .note-toolbar').css("background-color", "white");
    $('.newForm .note-editor').css("border-bottom", "1px #AAAAAA solid");

    var editables = document.getElementsByClassName('note-editable');
    for (var i = 0; i < editables.length; i++) {
        editables[i].addEventListener('paste', function(e) {
        var clipboardData, pastedData;

            e.stopPropagation();
            e.preventDefault();

            clipboardData = e.clipboardData || window.clipboardData;
            pastedData = clipboardData.getData('text/plain');

            document.execCommand('insertText', false, pastedData);
        }, false);
    }

    $("input:checkbox[name='end_date']").on('change', function() {
        $("select[name='end_date']").prop('disabled', function(i, v) { return !v; });
    });
}

function saveeditFormItem(section_name, key, cs_type = '') {

    if(cs_type != ''){
        var section_field = input_fields[cs_type];
    }else{
        var section_field = input_fields[section_name.toUpperCase()];
    }

    var section_data = ResumeData[section_name.capitalizeFirstLetter()][key];


    var validate = 1;
    $.each(section_field, function(k,v){

        switch(v.mapTo){
            case 'section_title1':
                if(v.is_mandatory){
                    if($('form.editForm input[name="section_title1"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                section_data.section_title1 = $('form.editForm input[name="section_title1"]').val();
                break;

            case 'section_title2':
                if(v.is_mandatory){
                    if($('form.editForm input[name="section_title2"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                section_data.section_title2 = $('form.editForm input[name="section_title2"]').val();
                break;

            case 'section_title3':
                if(v.is_mandatory){
                    if($('form.editForm input[name="section_title3"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                section_data.section_title3 = $('form.editForm input[name="section_title3"]').val();
                break;

            case 'section_title4':
                if(v.is_mandatory){
                    if($('form.editForm input[name="section_title4"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                section_data.section_title4 = $('form.editForm input[name="section_title4"]').val();
                break;

            case 'start_date':
                var start_date = '';
                start_date += $($('.editForm [name="start_date"]')[0]).val()+" ";
                start_date += $($('.editForm [name="start_date"]')[1]).val();

                start_date = $.trim(start_date);

                if(v.is_mandatory){
                    if(start_date == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }
                }
                section_data.start_date = start_date;
                break;

            case 'end_date':

                var end_date = '';
                if($('.editForm input[name="end_date"]').prop('checked')){
                    end_date = 'Present'
                }else{
                    end_date += $($('.editForm [name="end_date"]')[0]).val()+" ";
                    end_date += $($('.editForm [name="end_date"]')[1]).val();
                }

                end_date = $.trim(end_date);

                if(v.is_mandatory){
                    if(end_date == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }
                }
                section_data.end_date = end_date;
                break;

            case 'more_info1':
                if(v.is_mandatory){
                    if($('.editForm [name="more_info1"]').code() == '' || $('.editForm [name="more_info1"]').code() == '<br>'){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }
                }
                if($('.editForm [name="more_info1"]').code() == '' || $('.editForm [name="more_info1"]').code() == '<br>'){
                    section_data.more_info1 = '';
                }else{
                    section_data.more_info1 = $('.editForm [name="more_info1"]').code();
                }
        }

    });

    if(validate){
        ResumeData[section_name.capitalizeFirstLetter()][key] = section_data;
        populate_list_group(section_name, cs_type);
        saveResumeData();
    }
}

function saveeditFormItemSkill(section_name, key, ele, cs_type) {

    if(cs_type != ''){
        var section_field = input_fields[cs_type];
    }else{
        var section_field = input_fields[section_name.toUpperCase()];
    }

    var section_data = ResumeData[section_name.capitalizeFirstLetter()][key];


    var validate = 1;
    $.each(section_field, function(k,v){

        if(ele.attr('name') == v.mapTo){
            section_data[v.mapTo] = ele.val();
        }

    });

    if(validate){
        ResumeData[section_name.capitalizeFirstLetter()][key] = section_data;
        saveResumeData();
    }
}

function addNewFormItem(section_name, cs_type = '') {

    if(cs_type != ''){
        var section_field = input_fields[cs_type];
    }else{
        var section_field = input_fields[section_name];
    }

    var obj =  {
                    end_date: "",
                    is_active: 1,
                    more_info1: "",
                    order_prefs: 999,
                    section_title1: "",
                    section_title2: "",
                    section_title3: "",
                    section_title4: "",
                    section_type: (cs_type != '')?cs_type:section_name.toUpperCase(),
                    start_date: "",
                    created_dt: new Date().getTime()
                };

    var validate = 1;
    $.each(section_field, function(k,v){

        switch(v.mapTo){
            case 'section_title1':
                if(v.is_mandatory){
                    if($('form.newForm input[name="section_title1"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                obj.section_title1 = $('form.newForm input[name="section_title1"]').val();
                break;

            case 'section_title2':
                if(v.is_mandatory){
                    if($('form.newForm input[name="section_title2"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                obj.section_title2 = $('form.newForm input[name="section_title2"]').val();
                break;

            case 'section_title3':
                if(v.is_mandatory){
                    if($('form.newForm input[name="section_title3"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                obj.section_title3 = $('form.newForm input[name="section_title3"]').val();
                break;
            case 'section_title4':
                if(v.is_mandatory){
                    if($('form.newForm input[name="section_title4"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                obj.section_title4 = $('form.newForm input[name="section_title4"]').val();
                break;

            case 'start_date':
                var start_date = '';
                start_date += $($('.newForm [name="start_date"]')[0]).val()+" ";
                start_date += $($('.newForm [name="start_date"]')[1]).val();

                start_date = $.trim(start_date);

                if(v.is_mandatory){
                    if(start_date == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }
                }
                obj.start_date = start_date;
                break;

            case 'end_date':

                var end_date = '';
                if($('.newForm input[name="end_date"]').prop('checked')){
                    end_date = 'Present'
                }else{
                    end_date += $($('.newForm [name="end_date"]')[0]).val()+" ";
                    end_date += $($('.newForm [name="end_date"]')[1]).val();
                }

                end_date = $.trim(end_date);

                if(v.is_mandatory){
                    if(end_date == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }
                }
                obj.end_date = end_date;
                break;

            case 'more_info1':
                if(v.is_mandatory){
                    if($('form.newForm [name="more_info1"]').code() == '' || $('form.newForm [name="more_info1"]').code() == '<br>'){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }
                }

                if($('form.newForm [name="more_info1"]').code() == '<br>' || $('form.newForm [name="more_info1"]').code() == ''){
                    obj.more_info1 = '';
                }else{
                    obj.more_info1 = $('form.newForm [name="more_info1"]').code();
                }
                break;
        }

    });

    if(validate){
        ResumeData[section_name.capitalizeFirstLetter()].push(obj);
        populate_list_group(section_name, cs_type);
        toggleNewForm('close');
        saveResumeData();
    }
}

function addNewFormSkillItem(section_name, cs_type = '') {

    if(cs_type != ''){
        var section_field = input_fields[cs_type];
    }else{
        var section_field = input_fields[section_name.toUpperCase()];
    }

    var obj =  {
                    end_date: "",
                    is_active: 1,
                    more_info1: "",
                    order_prefs: 999,
                    section_title1: "",
                    section_title2: "",
                    section_title3: "",
                    section_title4: "",
                    section_type: (cs_type != '')?cs_type:section_name.toUpperCase(),
                    start_date: "",
                    created_dt: new Date().getTime()
                };

    var validate = 1;
    $.each(section_field, function(k,v){

        switch(v.mapTo){
            case 'section_title1':
                if(v.is_mandatory){
                    if($('.newFormItem input[name="section_title1"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                obj.section_title1 = $('.newFormItem input[name="section_title1"]').val();
                break;

            case 'section_title2':
                if(v.is_mandatory){
                    if($('.newFormItem select[name="section_title2"]').val() == ''){
                        alert(v.label+" is mandatory");
                        validate = 0;
                    }

                }
                obj.section_title2 = $('.newFormItem select[name="section_title2"]').val();
                break;
            default:
                alert('No such map defined');
        }

    });

    if(validate){
        ResumeData[section_name.capitalizeFirstLetter()].push(obj);
        populate_skill_list_group(section_name, cs_type);
        saveResumeData();
    }
}

function addNewFormHobbieItem(section_name) {

    var obj =  {
                    end_date: "",
                    is_active: 1,
                    more_info1: "",
                    order_prefs: 999,
                    section_title1: "",
                    section_title2: "",
                    section_title3: "",
                    section_title4: "",
                    section_type: section_name.toUpperCase(),
                    start_date: "",
                    created_dt: new Date().getTime()
                };

    if($('select[name="hobbie_name"]').val() != ''){
        validate = 1;
        obj.section_title1 = $('select[name="hobbie_name"]').val();
    }

    if(validate){
        ResumeData[section_name.capitalizeFirstLetter()].push(obj);
        populate_hobbies_list_group(section_name);
        saveResumeData();
    }
}

function createNewFormBody(section_name, cs_type = '') {

    if(cs_type != ''){
        var section_field = input_fields[cs_type];
    }else{
        var section_field = input_fields[section_name];
    }

    var newFormBodyStr = '';

    $.each(section_field, function(k,v){

        switch(v.tag){

            case 'input':

                newFormBodyStr += '<div class="form-group form-material floating">';
                newFormBodyStr +=   '<input type="'+v.type+'" class="'+v.class+' empty" name="'+v.mapTo+'" />';
                newFormBodyStr +=   '<label class="floating-label">'+v.label+'</label>';
                newFormBodyStr += '</div>';
                break;

            case 'datalist':
                newFormBodyStr += '<div class="form-group form-material floating">';
                newFormBodyStr += '    <input type="text" class="'+v.class+'" list="'+ v.label+'" name="'+v.mapTo+'" />';
                newFormBodyStr += '        <datalist id="'+v.label+'">';
                                $.each(v.list, function(a,b){
                                    newFormBodyStr += '<option value="'+b+'"/>';
                                });
                newFormBodyStr += '        </datalist>';
                newFormBodyStr += '    <label class="floating-label">'+v.label+'</label>';
                newFormBodyStr += '</div>';
                break;


            case 'textarea':

                newFormBodyStr += '<div class="form-group form-material floating">';
                newFormBodyStr +=   '<textarea rows="'+v.rows+'" class="'+v.class+' empty" name="'+v.mapTo+'" />';
                newFormBodyStr +=   '<label class="floating-label">'+v.label+'</label>';
                newFormBodyStr += '</div>';
                break;

            case 'startDate':

                newFormBodyStr += '<div class="row">';
                if(v.month === true){
                    newFormBodyStr += '<div class="col-sm-5">';
                    newFormBodyStr +=   '<div class="form-group form-material floating">';
                    newFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'">';
                    newFormBodyStr +=          getMonthOptionString();
                    newFormBodyStr +=       '</select>';
                    newFormBodyStr +=       '<label class="floating-label">'+v.label+'</label>';
                    newFormBodyStr +=   '</div>';
                    newFormBodyStr += '</div>';
                }
                if(v.year === true){
                    newFormBodyStr += '<div class="col-sm-3">';
                    newFormBodyStr +=   '<div class="form-group form-material floating">';
                    newFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'">';
                    newFormBodyStr +=          getYearOptionString();
                    newFormBodyStr +=       '</select>';
                    newFormBodyStr +=       '<label class="floating-label">'+'Year'+'</label>';
                    newFormBodyStr +=   '</div>';
                    newFormBodyStr += '</div>';
                }

                if(v.present === true){
                    newFormBodyStr += '<div class="col-sm-4">';
                    newFormBodyStr +=   '<div class="form-group form-material floating">';
                    newFormBodyStr +=       '<input type="checkbox" name="'+v.mapTo+'"/> Present';
                    newFormBodyStr +=   '</div>';
                    newFormBodyStr += '</div>';
                }
                newFormBodyStr += '</div>';
                break;

            case 'endDate':

                newFormBodyStr += '<div class="row">';
                if(v.month === true){
                    newFormBodyStr += '<div class="col-sm-5">';
                    newFormBodyStr +=   '<div class="form-group form-material floating">';
                    newFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'">';
                    newFormBodyStr +=          getMonthOptionString();
                    newFormBodyStr +=       '</select>';
                    newFormBodyStr +=       '<label class="floating-label">'+v.label+'</label>';
                    newFormBodyStr +=   '</div>';
                    newFormBodyStr += '</div>';
                }
                if(v.year === true){
                    newFormBodyStr += '<div class="col-sm-3">';
                    newFormBodyStr +=   '<div class="form-group form-material floating">';
                    newFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'">';
                    newFormBodyStr +=          getYearOptionString();
                    newFormBodyStr +=       '</select>';
                    newFormBodyStr +=       '<label class="floating-label">'+'Year'+'</label>';
                    newFormBodyStr +=   '</div>';
                    newFormBodyStr += '</div>';
                }

                if(v.present === true){
                    newFormBodyStr += '<div class="col-sm-4">';
                    newFormBodyStr +=   '<div class="form-group form-material floating">';
                    newFormBodyStr +=       '<input type="checkbox" name="'+v.mapTo+'" /> Present';
                    newFormBodyStr +=   '</div>';
                    newFormBodyStr += '</div>';
                }
                newFormBodyStr += '</div>';
                break;

            default:
                // Reprot Error
                break;
        }
    });

    newFormBodyStr += '<div class="row margin-10">';
    newFormBodyStr +=     '<div class="col-xs-6 col-sm-6">';
    newFormBodyStr +=         '<button type="button" class="btn btn-block btn-default btn-sm newForm-cancel">';
    newFormBodyStr +=             'Cancel';
    newFormBodyStr +=         '</button>';
    newFormBodyStr +=     '</div>';
    newFormBodyStr +=     '<div class="col-xs-6 col-sm-6">';
    newFormBodyStr +=         '<button type="button" class="btn btn-block btn-primary btn-sm newForm-save">';
    newFormBodyStr +=             'ADD';
    newFormBodyStr +=         '</button>';
    newFormBodyStr +=     '</div>';
    newFormBodyStr += '</div>';

    $('.newForm-body').html(newFormBodyStr);

    console.log(2, section_name, cs_type);
    initjsfornewForm(section_name, cs_type);
}

function createeditFormBody(section_name, key, cs_type = '') {

    if(cs_type != ''){
        var section_field = input_fields[cs_type];
    }else{
        var section_field = input_fields[section_name.toUpperCase()];
    }
    var editFormBodyStr = '';
    var section_data = ResumeData[section_name.capitalizeFirstLetter()][key];

    editFormBodyStr += '<form class="editForm" style="display:none;margin:30px;">';
    editFormBodyStr +=  '<div class="editForm-header">';
    editFormBodyStr +=      '<span>';
    // editFormBodyStr +=          '<i class="fa fa-close"></i>';
    editFormBodyStr +=          '&nbsp;';
    editFormBodyStr +=          '<div id="editForm-title"></div>';
    editFormBodyStr +=      '</span>';
    editFormBodyStr +=      '<div class="avatar avatar-sm">';
    editFormBodyStr +=          '<img src="/static/classic/topbar/assets/images/chars/new.png" alt="...">';
    editFormBodyStr +=      '</div>';
    editFormBodyStr +=  '</div>';
    editFormBodyStr +=  '<div class="editForm-body">';


    $.each(section_field, function(k,v){

        switch(v.tag){

            case 'input':

                editFormBodyStr += '<div class="form-group form-material floating">';
                editFormBodyStr +=   '<input type="'+v.type+'" class="'+v.class+'" name="'+v.mapTo+'" value="'+section_data[v.mapTo]+'" data-key="'+key+'" />';
                editFormBodyStr +=   '<label class="floating-label">'+v.label+'</label>';
                editFormBodyStr += '</div>';
                break;

            case 'datalist':

                editFormBodyStr += '<div class="form-group form-material floating">';
                editFormBodyStr += '    <input type="text" class="'+v.class+'" list="'+ v.label+'" value="'+section_data[v.mapTo]+'" name="'+v.mapTo+'" data-key="'+key+'" />';
                editFormBodyStr += '        <datalist id="'+v.label+'">';
                    $.each(v.list, function(a,b){

                            editFormBodyStr += '<option value="'+b+'"/>';
                    });
                editFormBodyStr += '        </datalist>';
                editFormBodyStr += '    <label class="floating-label">'+v.label+'</label>';
                editFormBodyStr += '</div>';
                break;

            case 'textarea':

                editFormBodyStr += '<div class="form-group form-material floating">';
                editFormBodyStr +=   '<textarea rows="'+v.rows+'" class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'">'+section_data[v.mapTo]+'</textarea>';
                editFormBodyStr +=   '<label class="floating-label">'+v.label+'</label>';
                editFormBodyStr += '</div>';
                break;

            case 'startDate':

                editFormBodyStr += '<div class="row">';
                if(v.month === true){
                    editFormBodyStr += '<div class="col-sm-5">';
                    editFormBodyStr +=   '<div class="form-group form-material floating">';
                    if(section_data[v.mapTo] == 'Present' || section_data[v.mapTo] == 'PRESENT')
                        editFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'" disabled>';
                    else
                        editFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'">';
                    editFormBodyStr +=          getMonthOptionString(section_data[v.mapTo]);
                    editFormBodyStr +=       '</select>';
                    editFormBodyStr +=       '<label class="floating-label">'+v.label+'</label>';
                    editFormBodyStr +=   '</div>';
                    editFormBodyStr += '</div>';
                }

                if(v.year === true){
                    editFormBodyStr += '<div class="col-sm-3">';
                    editFormBodyStr +=   '<div class="form-group form-material floating">';
                    if(section_data[v.mapTo] == 'Present' || section_data[v.mapTo] == 'PRESENT')
                        editFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'" disabled>';
                    else
                        editFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'">';
                    editFormBodyStr +=          getYearOptionString(section_data[v.mapTo]);
                    editFormBodyStr +=       '</select>';
                    editFormBodyStr +=       '<label class="floating-label">'+'Year'+'</label>';
                    editFormBodyStr +=   '</div>';
                    editFormBodyStr += '</div>';
                }

                if(v.present === true){
                    editFormBodyStr += '<div class="col-sm-4">';
                    editFormBodyStr +=   '<div class="form-group form-material floating">';
                    editFormBodyStr +=       '<input type="checkbox" name="'+v.mapTo+'" data-key="'+key+'"/> Present';
                    editFormBodyStr +=   '</div>';
                    editFormBodyStr += '</div>';
                }
                editFormBodyStr += '</div>';
                break;

            case 'endDate':

                editFormBodyStr += '<div class="row">';
                if(v.month === true){
                    editFormBodyStr += '<div class="col-sm-5">';
                    editFormBodyStr +=   '<div class="form-group form-material floating">';
                    if(section_data[v.mapTo] == 'Present' || section_data[v.mapTo] == 'PRESENT')
                        editFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'" disabled>';
                    else
                        editFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'">';
                    editFormBodyStr +=          getMonthOptionString(section_data[v.mapTo]);
                    editFormBodyStr +=       '</select>';
                    editFormBodyStr +=       '<label class="floating-label">'+v.label+'</label>';
                    editFormBodyStr +=   '</div>';
                    editFormBodyStr += '</div>';
                }

                if(v.year === true){
                    editFormBodyStr += '<div class="col-sm-3">';
                    editFormBodyStr +=   '<div class="form-group form-material floating">';
                    if(section_data[v.mapTo] == 'Present' || section_data[v.mapTo] == 'PRESENT')
                        editFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'" disabled>';
                    else
                        editFormBodyStr +=       '<select class="'+v.class+'" name="'+v.mapTo+'" data-key="'+key+'">';
                    editFormBodyStr +=          getYearOptionString(section_data[v.mapTo]);
                    editFormBodyStr +=       '</select>';
                    editFormBodyStr +=       '<label class="floating-label">'+'Year'+'</label>';
                    editFormBodyStr +=   '</div>';
                    editFormBodyStr += '</div>';
                }

                if(v.present === true){
                    editFormBodyStr += '<div class="col-sm-4">';
                    editFormBodyStr +=   '<div class="form-group form-material floating">';
                    if(section_data[v.mapTo] == 'Present' || section_data[v.mapTo] == 'PRESENT'){
                        editFormBodyStr +=       '<input type="checkbox" name="'+v.mapTo+'" data-key="'+key+'" checked/> Present';
                    }else{
                        editFormBodyStr +=       '<input type="checkbox" name="'+v.mapTo+'" data-key="'+key+'" /> Present';
                    }
                    editFormBodyStr +=   '</div>';
                    editFormBodyStr += '</div>';
                }

                editFormBodyStr += '</div>';
                break;

            default:
                // Reprot Error
                break;
        }
    });


    editFormBodyStr += '<div class="row margin-10">';
    editFormBodyStr +=     '<div class="col-xs-6 col-sm-6">';
    editFormBodyStr +=         '<button type="button" class="btn btn-block btn-default btn-sm editForm-cancel">';
    editFormBodyStr +=             'Cancel';
    editFormBodyStr +=         '</button>';
    editFormBodyStr +=     '</div>';
    editFormBodyStr +=     '<div class="col-xs-6 col-sm-6">';
    editFormBodyStr +=         '<button type="button" class="btn btn-block btn-primary btn-sm editForm-save">';
    editFormBodyStr +=             'SAVE';
    editFormBodyStr +=         '</button>';
    editFormBodyStr +=     '</div>';
    editFormBodyStr += '</div>';

    editFormBodyStr +=  '</div>';
    editFormBodyStr +=  '<div class="editForm-footer">';
    editFormBodyStr +=      '<i class="fa fa-angle-up"></i>';
    editFormBodyStr +=  '</div>';
    editFormBodyStr += '</form>';

    return editFormBodyStr;
}

function toggleNewForm(action) {
    // body...
    if(action == 'close'){
        $('.newForm').slideUp('slow', function() {
            $('.addnewBtn').show();
        });

    }else{
        $('.addnewBtn').hide();
        $('.newForm').trigger('reset');
        $('.newForm input').addClass('empty');
        $('.newForm').slideDown('slow', function() {
        });
    }
}

function toggleRecordVisibility(section_name, key) {
    var section_data = ResumeData[section_name.capitalizeFirstLetter()][key];
    if(section_data['is_active'] == 1){
        ResumeData[section_name.capitalizeFirstLetter()][key]['is_active'] = 0;
    }else{
        ResumeData[section_name.capitalizeFirstLetter()][key]['is_active'] = 1;
    }
    saveResumeData();
}

function toggleSectionVisibility(section_name, key) {

    var section_data = ResumeData['customSections'][key];
    if(section_data['is_active'] == 1){
        ResumeData['customSections'][key]['is_active'] = 0;
    }else{
        ResumeData['customSections'][key]['is_active'] = 1;
    }
    saveResumeData();
}

function deleteRecord(section_name, key, shouldAsk = 1) {
    if(confirm('Are you sure you want to delete ?')){
        console.log(section_name + key);
        ResumeData[section_name.capitalizeFirstLetter()].splice([key], 1);
        saveResumeData();
    }
}

function deleteSection(section_name, key) {
    if(confirm('Are you sure you want to delete ?')){
        delete ResumeData[section_name.capitalizeFirstLetter()];
        ResumeData['customSections'].splice([key], 1);
        saveResumeData();
    }
}

function saveResumeData() {

    var duplicate_data = {};

    $.each(ResumeData, function(k, v){
        if (k != null && k != "") {
            if (k == "Profile" || k == "Coverletter") {
                duplicate_data[k] = v;
            }
            else{

                ResumeData[k].sort(function(a, b) {
                if (a == null || b == null) return 0;
                    return parseFloat(a.order_prefs) - parseFloat(b.order_prefs);
                });
                var i = 0;
                duplicate_data[k] = [];
                $.each(v, function(key, val) {
                    if (val != null) {
                        duplicate_data[k].push(val);
                        i++;
                    }
                });
            }
        }
    });

    ResumeData = duplicate_data;
    strResumeData = JSON.stringify(ResumeData);
    localStorage.setItem("data", strResumeData);
    localStorage.setItem("modified_dt", Date.now());
    buildresume(ResumeData);
}

function populate_sections(section_name,cs_type = ''){


    switch(section_name) {

        case "ABOUT YOU":

            var regex = /<br\s*[\/]?>/gi;

            if(ResumeData.Profile.jobTitle != null && ResumeData.Profile.jobTitle != ""){
                $('.jole').removeClass('empty');
                $('.jole').val(ResumeData.Profile.jobTitle);
            }

            if(ResumeData.Profile.summary != null && ResumeData.Profile.summary != ""){
                $('.sury').removeClass('empty');
                $('.sury').val(decodeURIComponent(ResumeData.Profile.summary).replace(regex, "\n"));
            }

            $('.jole, .sury').keyup(function(e) {
                saveSectionData(section_name);
            });

            if($('.sury').prop('scrollHeight') > 250)
            {
                $('.sury').height('250px');
            }
            else{
                $('.sury').height($('.sury').prop('scrollHeight')+"px");
            }
            break;

        case "SKILLS":

            populate_skill_list_group(section_name);
            break;

        case "LANGUAGES":

            populate_skill_list_group(section_name);
            break;

        case "ACHIEVEMENTS":

            $(".deon").val(ResumeData.Achievement[0].more_info1);
            $('.achvForm textarea').summernote({
                height:'100%'
            });
            $('.achvForm .note-style, .achvForm .note-fontname,.achvForm .note-font,.achvForm .note-color, .achvForm .note-table,.achvForm .note-height,.achvForm .note-insert, .achvForm .note-view,.achvForm .note-help, .achvForm  .note-statusbar').remove();
            $('.achvForm .note-para').addClass("pull-right");
            $('.achvForm .note-para').find('button:nth-child(2)').hide();
            $('.achvForm .note-para').find('button:nth-child(3)').hide();
            $('.achvForm .note-toolbar, .achvForm .note-editor').css("border", "0px");
            $('.achvForm .note-toolbar').css("background-color", "white");
            $('.achvForm .note-editor').css("border-bottom", "1px #AAAAAA solid");

            var editables = document.getElementsByClassName('note-editable');
            for (var i = 0; i < editables.length; i++) {
                editables[i].addEventListener('paste', function(e) {
                var clipboardData, pastedData;

                    e.stopPropagation();
                    e.preventDefault();

                    clipboardData = e.clipboardData || window.clipboardData;
                    pastedData = clipboardData.getData('text/plain');

                    document.execCommand('insertText', false, pastedData);
                }, false);
            }

            $('.achvForm .note-editor').keyup(function(e) {
                saveSectionData(section_name);
            });
            break;

        case "PERSONAL DETAILS":
            break;

        case "CONTACT DETAILS":
            break;

        case "WEB LINKS":
            $('[name="websiteURL"]').val(ResumeData.Worklinks[0].websiteURL).trigger('change');
            $('[name="portfolioURL"]').val(ResumeData.Worklinks[1].portfolioURL).trigger('change');
            $('[name="blogURL"]').val(ResumeData.Worklinks[2].blogURL).trigger('change');
            $('[name="slideshareURL"]').val(ResumeData.Worklinks[3].slideshareURL).trigger('change');

            $('[name="websiteURL"],[name="portfolioURL"],[name="blogURL"],[name="slideshareURL"]').on('change keyup', function(e){
                switch($(this).attr('name')){
                    case 'websiteURL':
                        ResumeData.Worklinks[0].websiteURL = $(this).val();
                        saveResumeData();
                        break;
                    case 'portfolioURL':
                        ResumeData.Worklinks[1].portfolioURL = $(this).val();
                        saveResumeData();
                        break;
                    case 'blogURL':
                        ResumeData.Worklinks[2].blogURL = $(this).val();
                        saveResumeData();
                        break;
                    case 'slideshareURL':
                        ResumeData.Worklinks[3].slideshareURL = $(this).val();
                        saveResumeData();
                        break;
                    default :
                        break;
                }
            });

            break;

        case "HOBBIES":
            populate_hobbies_list_group(section_name);
            break;

        default:
            if(cs_type != ''){
                populate_skill_list_group(section_name, cs_type);
            }else{
                console.log('nothing to fill');
            }
            break;
    }
}

function saveSectionData(section_name){


    switch(section_name) {

        case "ABOUT YOU":

            ResumeData.Profile.jobTitle = $(".jole").val().toUpperCase();
            ResumeData.Profile.summary = $('.sury').val().replace(/\n/g, "<br>");
            if($('.sury').prop('scrollHeight') > 250)
            {
                $('.sury').height('250px');
            }
            saveResumeData();
            break;

        case "ACHIEVEMENTS":

            if($(".deon").code() == '' || $(".deon").code() == '<br>'){
                ResumeData.Achievement[0].more_info1 = "";
            }else{
                ResumeData.Achievement[0].more_info1 = $(".deon").code();
            }
            saveResumeData();
            break;

        default:
            alert("I have never heard of that fruit...");
    }
}

function getYearOptionString(date = '') {

    if(date.trim()){
        var year = '<option value="&nbsp;">Year</option>';
    }else{
        var year = '<option selected value="&nbsp;">Year</option>';
    }

    var year_num = 0;

    if(date == 'Present'){
        date = '';
    }else{
        date = date.split(' ');
        year_num = date[1];
    }

    if(year_num == undefined && !isNaN(date[0])){
        year_num = date[0];
    }

    for (i = 1960; i <= new Date().getFullYear()+4; i++) {
        if(year_num == i){
            year += '<option value="' + i + '" selected>' + i + '</option>';
        }else{
            year += '<option value="' + i + '">' + i + '</option>';
        }
    }

    return year;
}

function getMonthOptionString(date = '') {

    if(date.trim()){
        var month = '<option value="&nbsp;">Month</option>';
    }else{
        var month = '<option selected value="&nbsp;">Month</option>';
    }

    if(date == 'Present'){
        date = '';
    }else{
        date = date.split(' ');
        date = date[0];
    }

    var arr = [];
    arr[0] = ['Jan','January'];
    arr[1] = ['Feb','February'];
    arr[2] = ['Mar','March'];
    arr[3] = ['Apr','April'];
    arr[4] = ['May','May'];
    arr[5] = ['Jun','June'];
    arr[6] = ['Jul','July'];
    arr[7] = ['Aug','August'];
    arr[8] = ['Sept','September'];
    arr[9] = ['Oct','October'];
    arr[10] = ['Nov','November'];
    arr[11] = ['Dec','December'];

    $.each(arr, function (k,v) {
        if(v[0] == date){
            month += '<option value="'+v[0]+'" selected>'+v[1]+'</option>';
        }else{
            month += '<option value="'+v[0]+'">'+v[1]+'</option>';
        }
    })

    return month;
}
