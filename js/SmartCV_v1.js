function buildresume(data){

	// console.log('buildresume()');
	console.log(data);
	var Data = data;
	// console.log(Data);
	var str = "";

	str += '<div id="myresume">';
	str += 		'<table border="0" width="100%">';
	str += 		'<tr id="header">';
	str += 			'<td class="intro" style="width:80%" align="left" valign="bottom">';
	str += 				'<span id="name">' + Data.Profile.firstName.toUpperCase() + ' ' + Data.Profile.lastName.toUpperCase() + '</span><br>';
	str += 				'<span id="job_title">' + Data.Profile.jobTitle.toUpperCase() + ' </span>';
	str += 			'</td>';
	str += 			'<td class="introdesc" style="width:30%" align="right" valign="bottom">';

	if (Data.Profile.phone != null && Data.Profile.phone != "") {
	str += 				'<span id="phone">' + Data.Profile.phone + '</span><br>';
	}
	if (Data.Profile.phone_alternate != null && Data.Profile.phone_alternate != "") {
	str += 				'<span id="phone_alternate">' + Data.Profile.phone_alternate + '</span><br>';
	}
	str += 				'<span id="email">' + Data.Profile.email + '</span>';
	str += 			'</td>';
	str += 		'</tr>';
	str += '</table>';

	str += '<div style=" width:5%;float:left;min-height: 1px;">&nbsp;</div>';
	str += '<div style="width:55%;float:left;min-height: 1px;">';

	var noOf_breakLines = 0;
	$.each(Data, function(k,v) {
		if(Data[k].length > 0 && k != 'Coverletter' && k != 'Hobbies' && k != 'Languages' && k != 'Skills' && k != 'Worklinks' && k != 'customSections'){
			$.each(Data[k], function(a,b){
				if(b.is_active == 1){
					if((k == 'Education' && (Data.Profile.type == '000' || Data.Profile.type == '001')) || k != 'Education'){
						noOf_breakLines++;
					}
					return false;
				}
			});
		}
	});

	if(Data.Achievement[0].more_info1 == ""){
		noOf_breakLines--;
	}

	if (Data.Profile.summary != "" && (Data.Profile.type == "000" || Data.Profile.type == "010" || Data.Profile.type == "011")) {

		str += '<table border="0" width="100%">';
		str += 		'<tr>';
		str += 			'<td class="section-heading">';
		if(Data.Profile.type == "000"){
			str += 				'OBJECTIVE';
		}
		else{
			str += 				'SUMMARY';
		}
		str += 			'</td>';
		str += 		'</tr>';
		str += '</table>';

		str += '<div class="Description" style="padding-top: 0px;text-align: justify;">';
		str += 		Data.Profile.summary;
		str += '</div>';


		str += '<table width="100%" class="section-break">';
		str += 		'<tbody>';
		str += 			'<tr class="">';
		str += 				'<td>&nbsp;</td>';
		str += 			'</tr>';
		str += 		'</tbody>';
		str += '</table>';
	}


	var has_exp = 0;
	$.each(Data.Experience, function(k, v) {
		if (v != null && v.section_type == "EXPERIENCE" && v.is_active == 1) {
			has_exp = 1;
			return false;
		}
	});

	if (Data.Experience.length > 0 && has_exp) {

		str += '<table border="0" width="100%">';
		str += 		'<tr>';
		str += 			'<td class="section-heading">';
		str += 				'EXPERIENCE';
		str += 			'</td>';
		str += 		'</tr>';
		str += '</table>';

		$.each(Data.Experience, function(k, v) {

		if (v != null && v.section_type == "EXPERIENCE" && v.is_active == 1) {

			str += '<table border="0" width="100%">';
			str += 		'<tr>';
			str += 			'<td class="EXPERIENCE-' + k + ' Heading">';
			str += 				v.section_title1.toUpperCase();
			str += 			'</td>';
			str += 		'</tr>';
			str += 		'<tr>';
			str += 			'<td class="EXPERIENCE-' + k + ' SubHeading">';

			var subtitle = $.trim(v.section_title2);
			if ($.trim(v.section_title3) != "" && subtitle != "") {
				subtitle += ' &nbsp;|&nbsp; ';
			}
			subtitle += $.trim(v.section_title3);
			if (subtitle != "" && ($.trim(v.start_date) != "")) {
				subtitle += ' &nbsp;|&nbsp; '+$.trim(v.start_date);
			}
			if($.trim(v.end_date) != ""){
				if($.trim(v.start_date) == ''){
					subtitle += " | ";
				}else{
					subtitle += " - ";
				}
				subtitle += $.trim(v.end_date);
			}
			str += 				subtitle;

			str += 			'</td>';
			str += 		'</tr>';
			str += '</table>';
			str += '<div class="EXPERIENCE-' + k + ' Description">';
			str += v.more_info1;
			str += '</div>';
			}
		});

		str += '<table width="100%" class="section-break">';
		str += 		'<tbody>';
		noOf_breakLines--;
		if(noOf_breakLines>0)
		{
			str += 			'<tr class="">';
			str += 				'<td>&nbsp;</td>';
			str += 			'</tr>';
		}
		str += 		'</tbody>';
		str += '</table>';
	}

	if(Data.Profile.type == "000" || Data.Profile.type == "001"){

		var has_edu = 0;
		$.each(Data.Education, function(k, v) {
			if (v != null && v.section_type == "EDUCATION" && v.is_active == 1) {
				has_edu = 1;
				return false;
			}
		});

		if (Data.Education.length > 0 && has_edu) {

			str += '<table border="0" width="100%">';
			str += 		'<tr>';
			str += 			'<td class="section-heading">';
			str += 				'EDUCATION';
			str += 			'</td>';
			str += 		'</tr>';
			str += '</table>';

			$.each(Data.Education, function(k, v) {

			if (v != null && v.section_type == "EDUCATION" && v.is_active == 1) {

				str += '<table border="0" width="100%">';
				str += 		'<tr>';
				str += 			'<td class="EDUCATION-' + k + ' Heading">';
				str += 				v.section_title4.toUpperCase();
				str += 			'</td>';
				str += 		'</tr>';
				str += 		'<tr>';
				str += 			'<td class="EDUCATION-' + k + ' SubHeading">';

				var subtitle = $.trim(v.section_title1);
				if ($.trim(v.section_title2) != "" && subtitle != "") {
					subtitle += ' &nbsp;|&nbsp; ';
				}
				subtitle += $.trim(v.section_title2);
				if ($.trim(v.section_title3) != "" && subtitle != "") {
					subtitle += ' &nbsp;|&nbsp; ';
				}
				subtitle += $.trim(v.section_title3);
				if (subtitle != "" && ($.trim(v.start_date) != "")) {
					subtitle += ' &nbsp;|&nbsp; '+$.trim(v.start_date);
				}
				if($.trim(v.end_date) != ""){
					if($.trim(v.start_date) == ''){
						subtitle += " &nbsp;|&nbsp; ";
					}else{
						subtitle += " - ";
					}
					subtitle += $.trim(v.end_date);
				}
				str += 				subtitle;

				str += 			'</td>';
				str += 		'</tr>';
				str += '</table>';
				str += '<div class="EDUCATION-' + k + ' Description">';
				str += v.more_info1;
				str += '</div>';
				}
			});

			str += '<table width="100%" class="section-break">';
			str += 		'<tbody>';
			noOf_breakLines--;
			if(noOf_breakLines>0)
			{
				str += 			'<tr class="">';
				str += 				'<td>&nbsp;</td>';
				str += 			'</tr>';
			}
			str += 		'</tbody>';
			str += '</table>';
		}
	}


	var has_proj = 0;
	$.each(Data.Projects, function(k, v) {
		if (v != null && v.section_type == "PROJECTS" && v.is_active == 1) {
			has_proj = 1;
			return false;
		}
	});
	if (Data.Projects.length > 0 && has_proj) {

		str += '<table border="0" width="100%">';
		str += 		'<tr>';
		str += 			'<td class="section-heading">';
		str += 				'PROJECTS';
		str += 			'</td>';
		str += 		'</tr>';
		str += '</table>';

		$.each(Data.Projects, function(k, v) {
			if (v != null && v.section_type == "PROJECTS" && v.is_active == 1) {

				str += '<table border="0" width="100%">';
				str += 		'<tr>';
				str += 			'<td class="PROJECTS-' + k + ' Heading">';
				str += 				v.section_title1.toUpperCase();
				str += 			'</td>';
				str += 		'</tr>';
				str += 		'<tr>';
				str += 			'<td class="PROJECTS-' + k + ' SubHeading">';
				var subtitle = $.trim(v.section_title2);
				if ($.trim(v.section_title3) != "" && subtitle != "") {
				subtitle += ' &nbsp;|&nbsp; ';
				}
				subtitle += $.trim(v.section_title3);
				if (subtitle != "" && ($.trim(v.start_date) != "")) {
				subtitle += ' &nbsp;|&nbsp; '+$.trim(v.start_date);
				}
				if($.trim(v.end_date) != ""){
					if($.trim(v.start_date) == ''){
						subtitle += " &nbsp;|&nbsp; ";
					}else{
						subtitle += " - ";
					}
					subtitle += $.trim(v.end_date);
				}
				str += subtitle;
				str += 			'</td>';
				str += 		'</tr>';
				str += '</table>';
				str += '<div class="PROJECTS-' + k + ' Description">';
				str += 		v.more_info1;
				str += '</div>';

			}
		});

		str += '<table width="100%" class="section-break">';
		str += 		'<tbody>';
		noOf_breakLines--;
		if(noOf_breakLines>0)
		{
			str += 			'<tr class="">';
			str += 				'<td>&nbsp;</td>';
			str += 			'</tr>';
		}
		str += 		'</tbody>';
		str += '</table>';
	}


	if (Data.Achievement.length > 0 && Data.Achievement[0].more_info1 != "") {

		str += '<table border="0" width="100%">';
		str += 		'<tr>';
		str += 			'<td class="section-heading" style="padding-bottom: 0px;">';
		str += 				'ACHIEVEMENTS';
		str += 			'</td>';
		str +=		'</tr>';
		str += '</table>';

		$.each(Data.Achievement, function(k, v) {
			if (v != null && v.section_type == "ACHIEVEMENT" && v.is_active == 1) {
				str += '<div class="ACHIEVEMENT-' + k + ' Description">';
				str += 		v.more_info1;
				str += '</div>';
			}
		});

		str += '<table width="100%" class="section-break">';
		str += 		'<tbody>';
		noOf_breakLines--;
		if(noOf_breakLines>0)
		{
			str += 		'<tr class="">';
			str += 			'<td>&nbsp;</td>';
			str += 		'</tr>';
		}
		str += 		'</tbody>';
		str += '</table>';

	}

	var has_cert = 0;
	$.each(Data.Certifications, function(k, v) {
		if (v != null && v.section_type == "CERTIFICATIONS" && v.is_active == 1) {
			has_cert = 1;
			return false;
		}
	});

	if (Data.Certifications.length > 0 && has_cert) {

		str += '<table border="0" width="100%">';
		str += 		'<tr>';
		str += 			'<td class="section-heading">';
		str += 				'CERTIFICATIONS';
		str += 			'</td>';
		str += 		'</tr>';
		str += '</table>';

		$.each(Data.Certifications, function(k, v) {
		if (v != null && v.section_type == "CERTIFICATIONS" && v.is_active == 1) {

			str += '<table border="0" width="100%">';
			str += 		'<tr>';
			str += 			'<td class="CERTIFICATIONS-' + k + ' Heading">';
			str += 				v.section_title2.toUpperCase();
			str += 			'</td>';
			str += 		'</tr>';
			str += 		'<tr>';
			str += 			'<td class="CERTIFICATIONS-' + k + ' SubHeading">';
			var subtitle = $.trim(v.section_title1);
			if ($.trim(v.section_title3) != "" && subtitle != "") {
			subtitle += ' &nbsp;|&nbsp; ';
			}
			subtitle += $.trim(v.section_title3);
			if (subtitle != "" && ($.trim(v.start_date) != "")) {
			subtitle += ' &nbsp;|&nbsp; '+$.trim(v.start_date);
			}
			str += subtitle;
			str += 			'</td>';
			str += 		'</tr>';
			str += '</table>';
			str += '<div class="CERTIFICATIONS-' + k + ' Description">';
			str += 		v.more_info1;
			str += '</div>';

		}
		});

		str += '<table width="100%" class="section-break">';
		str += 		'<tbody>';
		noOf_breakLines--;
		if(noOf_breakLines>0)
		{
			str += 		'<tr class="">';
			str += 				'<td>&nbsp;</td>';
			str += 		'</tr>';
		}
		str += 		'</tbody>';
		str += '</table>';
	}


	var has_voln = 0;
	$.each(Data.Volunteering, function(k, v) {
		if (v != null && v.section_type == "VOLUNTEERING" && v.is_active == 1) {
			has_voln = 1;
			return false;
		}
	});

	if (Data.Volunteering.length > 0 && has_voln) {

		str += '<table border="0" width="100%">';
		str += 		'<tr>';
		str += 			'<td class="section-heading">';
		str += 				'VOLUNTEERING EXPERIENCE';
		str += 			'</td>';
		str += 		'</tr>';
		str += '</table>';

		$.each(Data.Volunteering, function(k, v) {
			if (v != null && v.section_type == "VOLUNTEERING" && v.is_active == 1) {

				str += '<table border="0" width="100%">';
				str += 		'<tr>';
				str += 			'<td class="VOLUNTEERING-' + k + ' Heading">';
				str += 				v.section_title1.toUpperCase();
				str += 			'</td>';
				str += 		'</tr>';
				str += 		'<tr>';
				str += 			'<td class="VOLUNTEERING-' + k + ' SubHeading">';
				var subtitle = $.trim(v.section_title2);
				if ($.trim(v.section_title3) != "" && subtitle != "") {
					subtitle += ' &nbsp;|&nbsp; ';
				}
				subtitle += $.trim(v.section_title3);
				if (subtitle != "" && ($.trim(v.start_date) != "")) {
					subtitle += ' &nbsp;|&nbsp; '+$.trim(v.start_date);
				}
				if($.trim(v.end_date) != ""){
					if($.trim(v.start_date) == ''){
						subtitle += " &nbsp;|&nbsp; ";
					}else{
						subtitle += " - ";
					}
					subtitle += $.trim(v.end_date);
				}

				str += 				subtitle;
				str += 			'</td>';
				str += 		'</tr>';
				str += '</table>';
				str += '<div class="VOLUNTEERING-' + k + ' Description">';
				str += v.more_info1;
				str += '</div>';

			}
		});

		str += '<table width="100%" class="section-break">';
		str += 		'<tbody>';
		noOf_breakLines--;
		if(noOf_breakLines>0)
		{
			str += 		'<tr class="">';
			str += 				'<td>&nbsp;</td>';
			str += 		'</tr>';
		}
		str += 		'</tbody>';
		str += '</table>';
	}

	var has_ref = 0;
	$.each(Data.Recommendations, function(k, v) {
		if (v != null && v.is_active == 1) {
			has_ref = 1;
			return false;
		}
	});

	if (Data.Recommendations.length > 0) {

		str += '<table border="0" width="100%">';
		str += 		'<tr>';
		str += 			'<td class="section-heading">';
		str += 				'RECOMMENDATIONS';
		str += 			'</td>';
		str += 		'</tr>';
		str += '</table>';

		$.each(Data.Recommendations, function(k, v) {
			if (v != null && v.section_type == "RECOMMENDATIONS" && v.is_active == 1) {

			str += '<table border="0" width="100%">';
			str += 		'<tr>';
			str += 			'<td class="RECOMMENDATIONS-' + k + ' Heading">';
			str += 				v.section_title2.toUpperCase();
			str += 			'</td>';
			str += 		'</tr>';
			str += 		'<tr>';
			str += 			'<td class="RECOMMENDATIONS-' + k + ' SubHeading">';
			var subtitle = $.trim(v.section_title1);
			if ($.trim(v.section_title3) != "" && subtitle != "") {
			subtitle += ' &nbsp;|&nbsp; ';
			}
			subtitle += $.trim(v.section_title3);
			if (subtitle != "" && ($.trim(v.start_date) != "")) {
			subtitle += ' &nbsp;|&nbsp; '+$.trim(v.start_date);
			}
			str += subtitle;
			str += 			'</td>';
			str += 		'</tr>';
			str += '</table>';
			str += '<div class="RECOMMENDATIONS-' + k + ' Description">';
			str += 		v.more_info1;
			str += '</div>';

			}
		});

		str += '<table width="100%" class="section-break">';
		str += 		'<tbody>';
		noOf_breakLines--;
		if(noOf_breakLines>0)
		{
			str += 		'<tr class="">';
			str += 			'<td>&nbsp;</td>';
			str += 		'</tr>';
		}
		str += 		'</tbody>';
		str += '</table>';
	}

	$.each(Data.customSections, function(index, section){

		if(section.section_type != 'CUSTOMSECTIONSV1'){
			return;
		}

		var has_section = 0;
		$.each(Data[section.section_title1], function(k, v) {
			if (v != null && v.is_active == 1) {
				has_section = 1;
				return false;
			}
		});

		if (Data[section.section_title1].length > 0) {

			str += '<table border="0" width="100%">';
			str += 		'<tr>';
			str += 			'<td class="section-heading">';
			str += 				section.section_title1.toUpperCase();
			str += 			'</td>';
			str += 		'</tr>';
			str += '</table>';

			$.each(Data[section.section_title1], function(k, v) {
				if (v != null && v.is_active == 1) {

				str += '<table border="0" width="100%">';
				if($.trim(v.section_title1) != ''){
					str += 		'<tr>';
					str += 			'<td class="'+ section.section_title1 +'-' + k + ' Heading">';
					str += 				v.section_title1.toUpperCase();
					str += 			'</td>';
					str += 		'</tr>';
				}
				var subtitle = $.trim(v.section_title2);
				if ($.trim(v.section_title3) != "" && subtitle != "") {
					subtitle += ' &nbsp;|&nbsp; ';
				}
				subtitle += $.trim(v.section_title3);
				if (subtitle != "" && ($.trim(v.start_date) != "")) {
					subtitle += ' &nbsp;|&nbsp; '+$.trim(v.start_date);
				}
				if($.trim(v.end_date) != ""){
					if($.trim(v.start_date) == ''){
						subtitle += " &nbsp;|&nbsp; ";
					}else{
						subtitle += " - ";
					}
					subtitle += $.trim(v.end_date);
				}

				if($.trim(subtitle) != ''){
					str += 		'<tr>';
					str += 			'<td class="'+ section.section_title1 +'-' + k + ' SubHeading">';
					str += subtitle;
					str += 			'</td>';
					str += 		'</tr>';
				}
				str += '</table>';
				str += '<div class="'+ section.section_title1 +'-' + k + ' Description">';
				str += 		v.more_info1;
				str += '</div>';

				}
			});

		}

		if(has_section){
			str += '<table width="100%" class="section-break">';
			str += 		'<tbody>';
			noOf_breakLines--;
			if(noOf_breakLines>0)
			{
				str += 		'<tr class="">';
				str += 			'<td>&nbsp;</td>';
				str += 		'</tr>';
			}
			str += 		'</tbody>';
			str += '</table>';
		}
	});

	str += '</div>'
	str += '<div style=" width:5%;float:left;min-height: 1px;">&nbsp;</div>';
	str += '<div style="width:30%;float:left;padding-top:20px;">';

	if (Data.Profile.summary != "" && (Data.Profile.type == "001" || Data.Profile.type == "100")) {

		str += '<table border="0" width="95%" style="autosize:1;page-break-inside:avoid;margin-bottom:40px;">';
		str += 		'<tr>';
		str += 			'<td class="section-heading-right">';
		str += 				'SUMMARY';
		str += 			'</td>';
		str += 		'</tr>';
		str += 		'<tr>';
		str += 			'<td class="SubHeading-right">';
		str += 				Data.Profile.summary;
		str += 			'</td>';
		str += 		'</tr>';
		str += '</table>';

	}

	if(Data.Profile.type == "010" || Data.Profile.type == "100"){

		var has_edu = 0;
		$.each(Data.Education, function(k, v) {
			if (v != null && v.section_type == "EDUCATION" && v.is_active == 1) {
				has_edu = 1;
				return false;
			}
		});

		if (Data.Education.length > 0 && has_edu) {

				str += '<table class="right" border="0" width="95%" style="autosize:1;margin-bottom:40px;" data-for="INFO">';
				str += 		'<thead>';
				str += 			'<tr>';
				str += 				'<td class="section-heading-right">';
				str += 					'EDUCATION';
				str += 				'</td>';
				str += 			'</tr>';
				str += 		'</thead>';

				$.each(Data.Education, function(k, v) {
					if (v != null && v.section_type == "EDUCATION" && v.is_active == 1) {

						var date = '';
						if(v.start_date != '' || v.end_date != ''){
							date = $.trim(v.start_date);
							if($.trim(v.end_date) != ""){
								if($.trim(v.start_date) == ''){
									date += "";
								}else{
									date += " - ";
								}
								date += $.trim(v.end_date);
							}
						}

						// var subtitle = $.trim(v.section_title2);
						// if ($.trim(v.section_title3) != "" && subtitle != "") {
						// 	subtitle += ' &nbsp;|&nbsp; ';
						// }
						// subtitle += $.trim(v.section_title3);


						var subtitle = $.trim(v.section_title2);
						if ($.trim(v.section_title3) != "" && subtitle != "") {
							subtitle += ' &nbsp;|&nbsp; ';
						}
						subtitle += $.trim(v.section_title3);
						if (subtitle != "" && ($.trim(v.section_title1) != "")) {
							subtitle += ' &nbsp;|&nbsp; '+$.trim(v.section_title1);
						}
						// str += 				subtitle;

						str += 		'<tr>';
						str += 			'<td class="misc_title">';
						str += 				v.section_title4;
						if($.trim(date) != ''){
							str += 				' ('+date+')';
						}
						str += 			'</td>';
						str += 		'</tr>';
						str += 		'<tr>';
						str += 			'<td class="Description">';
						str += 				subtitle;
						str += 			'</td>';
						str += 		'</tr>';

					}

				});


				str += '</table>';
		}
	}

	if (Data.Skills.length > 0) {


		str += '<table border="0" width="95%" style="autosize:1;page-break-inside:avoid;">';
		str += 		'<tr>';
		str += 			'<td class="section-heading-right">';
		str += 				'SKILLS';
		str += 			'</td>';
		str += 		'</tr>';
		str += '</table>';


		$.each(Data.Skills, function(k, v) {
			if (v != null && v.section_type == "SKILLS" && v.is_active == 1) {

				str += '<table class="progress_table" border="0" cellpadding="0" cellspacing="0" width="100%" data-for="SKILL-' + k + '">';
				str += 		'<tbody>';
				str += 			'<tr>';
				str += 				'<td  colspan="2" class="Heading-right E1">' + v.section_title1 + '</td>';
				str += 			'</tr>';
				str += 			'<tr>';

				switch (v.section_title2) {
					case "Beginner":
						str += 				'<td style="width:25%; border-bottom:3px solid #909090;"></td>';
						str += 				'<td style="width:75%; border-bottom:3px solid #dfdede"></td>';
						break;
					case "Intermediate":
						str += 				'<td style="width:50%; border-bottom:3px solid #909090;"></td>';
						str += 				'<td style="width:50%; border-bottom:3px solid #dfdede"></td>';
						break;
					case "Advanced":
						str += 				'<td style="width:75%; border-bottom:3px solid #909090;"></td>';
						str += 				'<td style="width:25%; border-bottom:3px solid #dfdede"></td>';
						break;
					case "Expert":
						str += 				'<td style="width:95%; border-bottom:3px solid #909090;"></td>';
						str += 				'<td style="width:5%; border-bottom:3px solid #dfdede"></td>';
						break;
					default:
						str += 				'<td style="width:25%; border-bottom:3px solid #909090;"></td>';
						str += 				'<td style="width:75%; border-bottom:3px solid #dfdede"></td>';
				}
				str += 			'</tr>';
				str += 		'</tbody>';
				str += '</table>';

				str += '<br>';
			}
		});

		str += '<br>';
		str += '<br>';
	}

	if(Data.Profile.type == "011"){

		var has_edu = 0;
		$.each(Data.Education, function(k, v) {
			if (v != null && v.section_type == "EDUCATION" && v.is_active == 1) {
				has_edu = 1;
				return false;
			}
		});

		if (Data.Education.length > 0 && has_edu) {

				str += '<table class="right" border="0" width="95%" style="autosize:1;margin-bottom:40px;" data-for="INFO">';
				str += 		'<thead>';
				str += 			'<tr>';
				str += 				'<td class="section-heading-right">';
				str += 					'EDUCATION';
				str += 				'</td>';
				str += 			'</tr>';
				str += 		'</thead>';

				$.each(Data.Education, function(k, v) {
					if (v != null && v.section_type == "EDUCATION" && v.is_active == 1) {

						var date = '';
						if(v.start_date != '' || v.end_date != ''){
							date = $.trim(v.start_date);
							if($.trim(v.end_date) != ""){
								if($.trim(v.start_date) == ''){
									date += "";
								}else{
									date += " - ";
								}
								date += $.trim(v.end_date);
							}
						}
						// var subtitle = $.trim(v.section_title2);
						// if ($.trim(v.section_title3) != "" && subtitle != "") {
						// 	subtitle += ' &nbsp;|&nbsp; ';
						// }
						// subtitle += $.trim(v.section_title3);


						var subtitle = $.trim(v.section_title2);
						if ($.trim(v.section_title3) != "" && subtitle != "") {
							subtitle += ' &nbsp;|&nbsp; ';
						}
						subtitle += $.trim(v.section_title3);
						if (subtitle != "" && ($.trim(v.section_title1) != "")) {
							subtitle += ' &nbsp;|&nbsp; '+$.trim(v.section_title1);
						}
						// str += 				subtitle;

						str += 		'<tr>';
						str += 			'<td class="misc_title">';
						str += 				v.section_title4;
						if($.trim(date) != ''){
							str += 				' ('+date+')';
						}
						str += 			'</td>';
						str += 		'</tr>';
						str += 		'<tr>';
						str += 			'<td class="Description">';
						str += 				subtitle;
						str += 			'</td>';
						str += 		'</tr>';

					}

				});


				str += '</table>';
		}
	}


	if (Data.Languages.length > 0) {


		str += '<table class="right" border="0" width="95%" style="autosize:1;page-break-inside:avoid;margin-bottom:40px;">';
		str += 		'<tr>';
		str += 			'<td class="section-heading-right">';
		str += 				'LANGUAGES';
		str += 			'</td>';
		str += 		'</tr>';

		$.each(Data.Languages, function(k, v) {
			if (v != null && v.section_type == "LANGUAGES" && v.is_active == 1) {
				str += 		'<tr>';
				str += 			'<td class="misc_title">';
				str += 				v.section_title1.capitalizeFirstLetter() + " (" + v.section_title2.capitalizeFirstLetter() + ") "
				str += 			'</td>';
				str += 		'</tr>';
				str += 		'<tr>';
				str += 			'<td class="Description">';
				str += 			'</td>';
				str += 		'</tr>';
			}
		});
		str += '</table>';

	}

	if (Data.Worklinks[0].websiteURL != "" || Data.Worklinks[1].portfolioURL != "" || Data.Worklinks[2].blogURL != "" || Data.Worklinks[3].slideshareURL != "") {

		str += '<table class="right" border="0" width="95%" style="autosize:1;page-break-inside:avoid;margin-bottom:40px;">';
		str += 		'<tr>';
		str += 			'<td class="section-heading-right">';
		str += 			'WEB LINKS';
		str += 			'</td>';
		str += 		'</tr>';

			if (Data.Worklinks[0].websiteURL != "" && Data.Worklinks[0].websiteURL != null) {
				str += 		'<tr>';
				str += 			'<td class="misc_title">';
				str += 				'Website';
				str += 			'</td>';
				str += 		'</tr>';
				str += 		'<tr>';
				str += 			'<td class="Description">';
				str += 				Data.Worklinks[0].websiteURL;
				str += 			'</td>';
				str += 		'</tr>';
			}

			if (Data.Worklinks[2].blogURL != "" && Data.Worklinks[2].blogURL != null) {
				str += 		'<tr>';
				str += 			'<td class="misc_title">';
				str += 				'Blog';
				str += 			'</td>';
				str += 		'</tr>';
				str += 		'<tr>';
				str += 			'<td class="Description">';
				str += 				Data.Worklinks[2].blogURL;
				str += 			'</td>';
				str += 		'</tr>';
			}

			if (Data.Worklinks[3].slideshareURL != "" && Data.Worklinks[3].slideshareURL != null) {
				str += 		'<tr>';
				str += 			'<td class="misc_title">';
				str += 				'Slideshare';
				str += 			'</td>';
				str += 		'</tr>';
				str += 		'<tr>';
				str += 			'<td class="Description">';
				str += 				Data.Worklinks[3].slideshareURL;
				str += 			'</td>';
				str += 		'</tr>';
			}


			if (Data.Worklinks[1].portfolioURL != "" && Data.Worklinks[1].portfolioURL != null) {
				str += 		'<tr>';
				str += 			'<td class="misc_title">';
				str += 				'Portfolio';
				str += 			'</td>';
				str += 		'</tr>';
				str += 		'<tr>';
				str += 			'<td class="Description">';
				str += 				Data.Worklinks[1].portfolioURL;
				str += 			'</td>';
			}


		str += '</table>';

	}


	var has_hobbies = 0;
	$.each(Data.Hobbies, function(k, v) {
		if (v != null && v.section_type == "HOBBIES" && v.is_active == 1 && v.section_title1 != null) {
			++has_hobbies;
		}
	});

	if (Data.Hobbies.length > 0 && has_hobbies > 0) {

		str += '<table border="0" width="95%" style="autosize:1;page-break-inside:avoid;margin-bottom:40px;">';
		str += 		'<tr>';
		str += 			'<td class="section-heading-right" colspan="';

		if(has_hobbies >= 3){ str += '3'; }else{ str += has_hobbies; };
		str += '">';
		str += 				'HOBBIES';
		str += 			'</td>';
		str += 		'</tr>';

		var count = 0;
		$.each(Data.Hobbies, function(k, v) {


			if(v != null && v.section_type == "HOBBIES" && v.is_active == 1 && v.section_title1 != null){
				if(count%3 == 0){
					str += 		'<tr>';
				}
				str += 			'<td align="center" valign="top" broder="1" style="padding:3px;" width="70px"><img src="/static/classic/topbar/assets/hobbies/' + v.section_title1.toLowerCase().split(' ').join('_') + '.svg" alt="'+v.section_title1+'" onerror="$(this).parent().remove();" ></td>';
				if(count%3 == 2 || has_hobbies == count+1){
					str += 		'</tr>';
				}
				count++;
			}
		});

		str += '</table>';
	}

	str += '<table class="right" border="0" width="95%" style="autosize:1;margin-bottom:40px;" data-for="INFO">';
	str += 		'<thead>';
	str += 			'<tr>';
	str += 				'<td class="section-heading-right">';
	str += 					'PERSONAL DETAILS';
	str += 				'</td>';
	str += 			'</tr>';
	str += 		'</thead>';

	if (Data.Profile.birthDay != "" && Data.Profile.birthDay != null) {
		str += 		'<tr rowspan="2">';
		str += 			'<td class="misc_title">';
		str += 				'Date Of Birth';
		str += 			'</td>';
		str += 		'</tr>';
		str += 		'<tr>';
		str += 			'<td class="Description">';
		str += 				Data.Profile.birthDay;
		str += 			'</td>';
		str += 		'</tr>';
	}


	if (Data.Profile.gender != "" && Data.Profile.gender != null) {
		str += 		'<tr rowspan="2">';
		str += 			'<td class="misc_title">';
		str += 				'Gender';
		str += 			'</td>';
		str += 		'</tr>';
		str += 		'<tr>';
		str += 			'<td class="Description">';
		str += 				Data.Profile.gender;
		str += 			'</td>';
		str += 		'</tr>';
	}


	if (Data.Profile.maritalStatus != "" && Data.Profile.maritalStatus != null) {
		str += 		'<tr rowspan="2">';
		str += 			'<td class="misc_title">';
		str += 				'Marital Status';
		str += 			'</td>';
		str += 		'</tr>';
		str += 		'<tr>';
		str += 			'<td class="Description">';
		str += 				Data.Profile.maritalStatus;
		str += 			'</td>';
		str += 		'</tr>';
	}


	if (Data.Profile.facebookHandle != "" && Data.Profile.facebookHandle != null) {
		str += 		'<tr rowspan="2">';
		str += 			'<td class="misc_title">';
		str += 				'Facebook';
		str += 			'</td>';
		str += 		'</tr>';
		str += 		'<tr>';
		str += 			'<td class="Description">';
		str += 				Data.Profile.facebookHandle;
		str += 			'</td>';
		str += 		'</tr>';
	}

	if (Data.Profile.linkedinHandle != "" && Data.Profile.linkedinHandle != null) {
		str += 		'<tr rowspan="2">';
		str += 			'<td class="misc_title">';
		str += 				'LinkedIn';
		str += 			'</td>';
		str += 		'</tr>';
		str += 		'<tr>';
		str += 			'<td class="Description">';
		str += 				Data.Profile.linkedinHandle;
		str += 			'</td>';
		str += 		'</tr>';
	}


	if (Data.Profile.nationality != "" && Data.Profile.nationality != null) {
		str += 		'<tr rowspan="2">';
		str += 			'<td class="misc_title">';
		str += 				'Nationality';
		str += 			'</td>';
		str += 		'</tr>';
		str += 		'<tr>';
		str += 			'<td class="Description">';
		str += 				Data.Profile.nationality;
		str += 			'</td>';
		str += 		'</tr>';
	}


	//if (Data.Profile.location.address != "" || Data.Profile.location.postalCode != "" || Data.Profile.location.city != "" || Data.Profile.location.country != "" || Data.Profile.location.state != "") {
	if (Data.Profile.location.address != "") {
		str += 		'<tr rowspan="2">';
		str += 			'<td class="misc_title">';
		str += 				'Address';
		str += 			'</td>';
		str += 		'</tr>';
		str += 		'<tr>';
		str += 			'<td class="Description">';
		str += 				Data.Profile.location.address;
		str += 			'</td>';
		str += 		'</tr>';
	}

	str += '</table>';


	str += '</div>';

	str += '<div style=" width:5%;float:left;min-height: 1px;">&nbsp;</div>';

	$(".resume_html").html(str);

}


function buildcoverletter(Data = ""){

	// console.log('buildcoverletter()');

	if(Data == ""){
		var Data = localStorage.getItem("data");
		Data = $.parseJSON(Data);
		var d = new Date();
	}

	var str = "";
	str += 		'<table border="0" width="100%">';
	str += 		'<tr id="header">';
	str += 			'<td class="intro" style="width:80%" align="left" valign="bottom">';
	str += 				'<span id="name">' + Data.Profile.firstName.toUpperCase() + ' ' + Data.Profile.lastName.toUpperCase() + '</span><br>';
	str += 				'<span id="job_title">' + Data.Profile.jobTitle.toUpperCase() + ' </span>';
	str += 			'</td>';
	str += 			'<td class="introdesc" style="width:30%" align="right" valign="bottom">';

	if (Data.Profile.phone != null && Data.Profile.phone != "") {
		str += 				'<span id="phone">' + Data.Profile.phone + '</span><br>';
	}
	if (Data.Profile.phone_alternate != null && Data.Profile.phone_alternate != "") {
		str += 				'<span id="phone_alternate">' + Data.Profile.phone_alternate + '</span><br>';
	}
	str += 				'<span id="email">' + Data.Profile.email + '</span>';
	str += 			'</td>';
	str += 		'</tr>';
	str += '</table>';

	str += '    <div class="section-break"></div>';
	str += '    <div class="header">';
	if(Data.Profile.coverletterDate != undefined && $.trim(Data.Profile.coverletterDate) != ''){
		str += '   '+Data.Profile.coverletterDate+'</br></br>';
	}
	if(Data.Coverletter.companyName != undefined && $.trim(Data.Coverletter.companyName) != ''){
		str += '   '+Data.Coverletter.companyName+'</br>';
	}
	if(Data.Coverletter.address != undefined && $.trim(Data.Coverletter.address) != ''){
		str += '   '+Data.Coverletter.address+'</br>';
	}
	str += '    </br>    Dear '+Data.Coverletter.recruiterSal+''+Data.Coverletter.recruiterName+',';
	str += '    </div>';
	str += '    <div class="body">';
	str += '    '+Data.Coverletter.description;
	str += '    <br><br>';
	str += '    Sincerely,';
	str += '    <br>'+ Data.Profile.firstName.toUpperCase() + ' ' + Data.Profile.lastName.toUpperCase();
	str += '  </div>';

	$('#mycoverletter').html(str);

}
