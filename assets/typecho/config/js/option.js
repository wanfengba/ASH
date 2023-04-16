/*option*/
$(document).ready(function() {
	$("#ASH_notice").css("color", "#ffffff");
	$("#ASH_notice").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_notice").css("display", "block")
	});
	$("#ASH_basic").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_basic").css("display", "block")
	});
	$("#ASH_menu").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_menu").css("display", "block")
	});
	$("#ASH_index").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_index").css("display", "block");
		$(document).ready(ASH_index)
	});
	$("#ASH_image").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_image").css("display", "block");
		$(document).ready(ASH_image)
	});
	$("#ASH_article").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_article").css("display", "block")
	});
	$("#ASH_link").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_link").css("display", "block")
	});
	$("#ASH_effect").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_effect").css("display", "block");
		$(document).ready(ASH_effect)
	});
	$("#ASH_develop").click(function() {
		$(".menulist .menu").css("color", "#000000");
		$(this).css("color", "#ffffff");
		$(".typecho-option").css("display", "none");
		$(".ASH_develop").css("display", "block");
		$(document).ready(ASH_develop)
	})
});

$(document)
	.ready(function() {
		$("#ASH_notice")
			.css("color", "#ffffff");
		$("#ASH_menu")
			.click(function() {
				$(".menulist .menu")
					.css("color", "#000000");
				$(this)
					.css("color", "#ffffff");
				$(".typecho-option")
					.css("display", "none");
				$(".ASH_menu")
					.css("display", "block");
				$(document)
					.ready(ASH_menu);
				$("select[name\x3d'menu_Aside']")
					.change(ASH_menu)
			});
		$("#ASH_index")
			.click(function() {
				$(".menulist .menu")
					.css("color", "#000000");
				$(this)
					.css("color", "#ffffff");
				$(".typecho-option")
					.css("display", "none");
				$(".ASH_index")
					.css("display", "block");
				$(document)
					.ready(ASH_index);
				$("select[name\x3d'Anav']")
					.change(ASH_index);
				$("select[name\x3d'Aframe']")
					.change(ASH_index)
			});
	});
function ASH_menu() {
    var menu_Aside = $("select[name='menu_Aside']").children('option:selected').val();
    if(menu_Aside == 'right'){
        $("textarea[name='Aside_Author_Image']").parentsUntil("form").show();
        $("textarea[name='Aside_Wap_Image']").parentsUntil("form").show();
        $("textarea[name='Aside_Author_Motto']").parentsUntil("form").show();
        $("textarea[name='ADContent']").parentsUntil("form").show();
        $("textarea[name='ACustomAside']").parentsUntil("form").show();
        $("input[name='Aside_Author_Link']").parentsUntil("form").show();
        $("input[name='Aside_Weather_Key']").parentsUntil("form").show();
        $("select[name='Aside_3DTag']").parentsUntil("form").show();
        $("select[name='Aside_Flatterer']").parentsUntil("form").show();
        $("select[name='Aside_History_Today']").parentsUntil("form").show();
        $("select[name='Aside_Weather_Style']").parentsUntil("form").show();
        $("select[name='Aside_Newreply_Status']").parentsUntil("form").show();
        $("select[name='Aside_Hot_Num']").parentsUntil("form").show();
        $("select[name='Aside_Timelife_Status']").parentsUntil("form").show();
        $("select[name='Aside_Author_Nav']").parentsUntil("form").show();
        $("input[name='Aside_wide']").parentsUntil("form").hide();
    }else if(menu_Aside == 'left'){
        $("textarea[name='Aside_Author_Image']").parentsUntil("form").show();
        $("textarea[name='Aside_Wap_Image']").parentsUntil("form").show();
        $("textarea[name='Aside_Author_Motto']").parentsUntil("form").show();
        $("textarea[name='ADContent']").parentsUntil("form").show();
        $("textarea[name='ACustomAside']").parentsUntil("form").show();
        $("input[name='Aside_Author_Link']").parentsUntil("form").show();
        $("input[name='Aside_Weather_Key']").parentsUntil("form").show();
        $("select[name='Aside_3DTag']").parentsUntil("form").show();
        $("select[name='Aside_Flatterer']").parentsUntil("form").show();
        $("select[name='Aside_History_Today']").parentsUntil("form").show();
        $("select[name='Aside_Weather_Style']").parentsUntil("form").show();
        $("select[name='Aside_Newreply_Status']").parentsUntil("form").show();
        $("select[name='Aside_Hot_Num']").parentsUntil("form").show();
        $("select[name='Aside_Timelife_Status']").parentsUntil("form").show();
        $("select[name='Aside_Author_Nav']").parentsUntil("form").show();
        $("input[name='Aside_wide']").parentsUntil("form").hide();
    }else if(menu_Aside == 'on'){
        $("input[name='Aside_wide']").parentsUntil("form").show();
        $("textarea[name='Aside_Author_Image']").parentsUntil("form").hide();
        $("textarea[name='Aside_Wap_Image']").parentsUntil("form").hide();
        $("textarea[name='ADContent']").parentsUntil("form").hide();
        $("textarea[name='ACustomAside']").parentsUntil("form").hide();
        $("input[name='Aside_Weather_Key']").parentsUntil("form").hide();
        $("select[name='Aside_3DTag']").parentsUntil("form").hide();
        $("select[name='Aside_Flatterer']").parentsUntil("form").hide();
        $("select[name='Aside_History_Today']").parentsUntil("form").hide();
        $("select[name='Aside_Weather_Style']").parentsUntil("form").hide();
        $("select[name='Aside_Newreply_Status']").parentsUntil("form").hide();
        $("select[name='Aside_Hot_Num']").parentsUntil("form").hide();
        $("select[name='Aside_Timelife_Status']").parentsUntil("form").hide();
        $("select[name='Aside_Author_Nav']").parentsUntil("form").hide();
    }
}
function ASH_index() {
    var Aframe = $("select[name='Aframe']").children('option:selected').val();
    if(Aframe == 'one'){
        $("input[name='Ahaed_Author']").parentsUntil("form").hide();
        $("input[name='Asubtitle']").parentsUntil("form").hide();
        $("input[name='Aweb_bg']").parentsUntil("form").hide();
        $("select[name='Awaves']").parentsUntil("form").hide();
        $("input[name='AIndex_Hot']").parentsUntil("form").show();
        $("input[name='AIndex_Recommend']").parentsUntil("form").show();
        $("textarea[name='AIndex_Notice']").parentsUntil("form").show();
        $("select[name='Aframe_index']").parentsUntil("form").hide();
    }else if(Aframe == 'two'){
        $("input[name='Anav_Author']").parentsUntil("form").show();
        $("input[name='Asubtitle']").parentsUntil("form").show();
        $("input[name='Aweb_bg']").parentsUntil("form").show();
        $("input[name='AIndex_Recommend']").parentsUntil("form").hide();
        $("input[name='AIndex_Hot']").parentsUntil("form").hide();
        $("textarea[name='AIndex_Notice']").parentsUntil("form").hide();
        $("select[name='Aframe_index']").parentsUntil("form").hide();
    }else if(Aframe == 'three'){
        $("input[name='Anav_Author']").parentsUntil("form").show();
        $("input[name='Asubtitle']").parentsUntil("form").show();
        $("input[name='Aweb_bg']").parentsUntil("form").show();
        $("select[name='Awaves']").parentsUntil("form").show();
        $("textarea[name='AIndex_Notice']").parentsUntil("form").hide();
        $("select[name='Aframe_index']").parentsUntil("form").hide();
    }else if(Aframe == 'four'){
        $("input[name='Ahaed_Author']").parentsUntil("form").hide();
        $("input[name='Asubtitle']").parentsUntil("form").hide();
        $("input[name='Aweb_bg']").parentsUntil("form").hide();
        $("select[name='Awaves']").parentsUntil("form").hide();
        $("input[name='AIndex_Recommend']").parentsUntil("form").hide();
        $("input[name='AIndex_Hot']").parentsUntil("form").hide();
        $("textarea[name='AIndex_Notice']").parentsUntil("form").hide();
        $("select[name='Aframe_index']").parentsUntil("form").show();
    }
    var Anav = $("select[name='Anav']").children('option:selected').val();
    if(Anav == 'one'){
         $("input[name='Anav_Author']").parentsUntil("form").hide();
    }else{
         $("input[name='Anav_Author']").parentsUntil("form").show();
    }
}