$(function(){
	$("#help").click(function(){
		$("#window").show();
	});

    $("#close").click(function(){
    	$("#window").hide();
    });

	var $drag = null;
	$(document.body).on("mousemove",function(event){
		if ($drag){
			$drag.offset({
				top: event.pageY,
				left: event.pageX
			});
		}
	});

	$(document.body).on("mousedown","#window",function(event){
		$drag = $(event.target);
	});

	$(document.body).on("mouseup",function(){
		$drag = null;
	});
});

$("#window").hide();