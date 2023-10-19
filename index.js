$(document).ready(function () {
	$(".login").hide();
	$(".register_li").addClass("active");

	$(".login_li").click(function () {
		$(this).addClass("active");
		$(".register_li").removeClass("active");
		$(".login").show();
		$(".reg").hide();
	})

	$(".register_li").click(function () {
		$(this).addClass("active");
		$(".login_li").removeClass("active");
		$(".reg").show();
		$(".login").hide();
	})
});