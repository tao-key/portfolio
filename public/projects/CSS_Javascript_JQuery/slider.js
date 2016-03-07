$(document).ready(function() {

	var i = 0;
	var align = false;
	var img = ["image/6.jpg","image/7.jpg","image/8.jpg","image/9.jpg","image/10.jpg","image/11.jpg"];
	var move = 0;

	img.forEach(function(element, index){
		$(".slider ul").append("<li><img src='"+element+"' /></li>");
		$("#miniature ul").append("<li><img class='img_mini' src='"+element+"' /></li>");
		$("#bullet").append("<input type='radio' name='choice'>");
	});

	$("#bullet input[type=radio]").first().prop("checked", true);

	/*-----------------*/
	/*-----SUIVANT-----*/
	/*-----------------*/

	$(".suiv").click(function() {
		if (move == img.length-1) {
			move = 0;
			$("#bullet input[type=radio]").first().prop("checked",true);
		}
		else {
			move++;
			$("#bullet input:checked").next().prop("checked",true);
		}
		if (align == "verticale") {
			$(".slider li").animate({
				bottom : 364*move+"px"
			});
			console.log(move);
		}
		if (align == "fondu") {
			if (i == img.length-1) {			
				i = 0;
			} 
			else {
				i++;
			}
			var ok = $(".slider li")[i];	
			$('.slider li').animate({'opacity':0}, 200, function(){
				$('.slider li').css('right', 940*move+"px");
				$('.slider li').animate({'opacity':1},200);
			});
		}
		if (align == "horizontale") {
			$(".slider li").animate({
				right : 940*move+"px"
			});
		}
		if (align != "horizontale" && align != "verticale" && align != "fondu") {
			$(".slider li").animate({
				right : 940*move+"px"
			});
		}
	});

	/*-----------------*/
	/*----PRECEDENT----*/
	/*-----------------*/

	$(".prec").click(function() {
		if (move == 0) {
			move = img.length-1;
			$("#bullet input[type=radio]").last().prop("checked",true);
		}
		else {
			move--;
			$("#bullet input:checked").prev().prop("checked",true);
		}
		if (align == "verticale") {
			$(".slider li").animate({
				bottom : 364*move+"px"
			});
		}
		if (align == "fondu") {
			if (i == 0) {			
				i = img.length-1;
			} else {
				i--;
			}
			var ok = $(".slider li")[i];	
			$('.slider li').animate({'opacity':0}, 200, function(){
				$('.slider li').css('right', 940*move+"px");
				$('.slider li').animate({'opacity':1},200);
			});
		}
		if (align == "horizontale") {
			$(".slider li").animate({
				right : 940*move+"px"
			});
		}
		if (align != "horizontale" && align != "verticale" && align != "fondu") {
			$(".slider li").animate({
				right : 940*move+"px"
			});
		}
	});

	/*-----------------*/
	/*-----BULLETS-----*/
	/*-----------------*/

	$("#bullet input[type=radio]").click(function(){ 
		move = $(this).index();
		if (align == "verticale") {
			$(".slider li").animate({
				bottom : 364*move+"px"
			});
		}
		if (align == "horizontale") {
			$(".slider li").animate({
				right : 940*move+"px"
			});
		}
		if (align == "fondu") {
			if (i == img.length-1) {			
				i = 0;
			} 
			else {
				i++;
			}
			var ok = $(".slider li")[i];	
			$('.slider li').animate({'opacity':0}, 200, function(){
				$('.slider li').css('right', 940*move+"px");
				$('.slider li').animate({'opacity':1},200);
			});
		}
		if (align != "horizontale" && align != "verticale" && align != "fondu") {
			$(".slider li").animate({
				right : 940*move+"px"
			});
		}
	});

	/*-----------------*/
	/*----MINIATURE----*/
	/*-----------------*/

	$("#miniature li").click(function() {
		move = $(this).index();
		$("#bullet input[type=radio]:nth-child("+(move+1)+")").prop("checked",true);
		if (align == "verticale") {
			$(".slider li").animate({
				bottom : 364*move+"px"
			});
		}
		if (align == "horizontale") {
			$(".slider li").animate({
				right : 940*move+"px"
			});
		}
		if (align == "fondu") {
			if (i == img.length-1) {			
				i = 0;
			} 
			else {
				i++;
			}
			var ok = $(".slider li")[i];	
			$('.slider li').animate({'opacity':0}, 200, function(){
				$('.slider li').css('right', 940*move+"px");
				$('.slider li').animate({'opacity':1},200);
			});
		}
		if (align != "horizontale" && align != "verticale" && align != "fondu") {
			$(".slider li").animate({
				right : 940*move+"px"
			});
		}
	});

	/*-----------------*/
	/*-----SELECT------*/
	/*-----------------*/

	$("#select_anim select").change(function() {
		align = $("#select_anim select").find(":selected").val();
		if (align == "horizontale") {
			move = 0;
			$("#bullet input[type=radio]").first().prop("checked", true);
			$(".slider li").css({"float": "left"});
			$(".slider li").animate({
				right : 0+"px",
				top : 0+"px"
			})
		}

		if (align == "verticale") {
			move = 0;
			$("#bullet input[type=radio]").first().prop("checked", true);
			$(".slider li").css({"float": "none", "right": "0"});
		}

		if (align == "fondu") {
			i = 0;
			move = 0;
			$("#bullet input[type=radio]").first().prop("checked", true);
			$(".slider li").css({"float": "left"});
			$(".slider li").animate({
				right : 0+"px",
				top : 0+"px"
			})
		}
	});

});