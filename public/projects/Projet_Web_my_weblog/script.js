$(document).ready(function() {
	
	$("#create_article").click(function(){
		$("#bloc_popup_create_article").css({"visibility" : "visible"});
	});

	$(".fa-pencil").click(function(){
		$("#bloc_popup_modif_membre").css({"visibility" : "visible"});
	});

	$("#modif_profil").click(function(){
		$("#bloc_popup_modif_profil").css({"visibility" : "visible"});
	});
});