$(function(){
	$("#bar").hide();		
	$(".page").hide();	
});

function Hide(){
	$("#middle,#title,#enter").fadeOut();
	setTimeout(function(){
		$("#bar").show("slow");
		setTimeout(function(){$("#Home").fadeIn();
		},600);
	},400);
}

function showContent(tag){
	$(".page").fadeOut("slow");
	setTimeout(function(){
		$(tag).fadeIn();
	},600);
}

