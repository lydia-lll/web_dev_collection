$(document).ready(function(){

	var appd1 = ":";
	var appd2 = "!";

	$(".cap1, .cap2, .cap3").css("color","rgb(248,215,230)");

	$(".cap1").append( appd1 );
	$(".cap3").append( appd2 );


	$("#cookieBanner").animate({ "bottom":"+=300px"},1000);


	$("#close_btn_cookie").click(function(){
		$("#cookieBanner").animate({ "bottom":"-=300px"},1000);
	});

	function init(){
		var stage = new createjs.Stage("demoCanvas");
		var circle = new createjs.Shape();
		circle.graphics.beginFill("DeepSkyBlue").drawCircle(0,0,50);
		circle.x = 100;
		circle.y = 100;
		stage.addChild(circle);
		// stage.update();

		createjs.Tween.get(circle, { loop: true })
		  .to({ x: 400 }, 1000, createjs.Ease.getPowInOut(4))
		  .to({ alpha: 0, y: 75 }, 500, createjs.Ease.getPowInOut(2))
		  .to({ alpha: 0, y: 125 }, 100)
		  .to({ alpha: 1, y: 100 }, 500, createjs.Ease.getPowInOut(2))
		  .to({ x: 100 }, 800, createjs.Ease.getPowInOut(2));

		createjs.Ticker.setFPS(60);
		createjs.Ticker.addEventListener("tick", stage);

	}

	$("body").ready(init());

});