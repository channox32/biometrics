//****************** YOUR CUSTOMIZED JAVASCRIPT **********************//

$(document).ready(function(){
	// $(".team-info").click(function(){
	// 	var link = $(this).attr("href");
	// 	window.location.href = link;
	// 	if($(" .team-list-action .dropdown a.dropdown-toggle").data("clicked")){
	// 		window.location.href="#";
	// 	}
	// });
	
	var month_arr = ['January','February','March','April','May','Jun','July','August','September','October','November','December'];
	setInterval(function(){
		var date = new Date();
		var months = month_arr[date.getMonth()];
		var days = date.getDate();
		var years = date.getFullYear();

		var hours = date.getHours();
		var minutes = date.getMinutes();
		var seconds = date.getSeconds();

		var am_pm = 'AM';
		if(hours>12)
		{
			hours = hours-12;
			am_pm = 'PM';
		}
		if(hours<10)
		{
			hours = '0'+hours;
		}
		if(minutes<10)
		{
			minutes = '0'+minutes;
		}
		if(seconds<10)
		{
			seconds = '0'+seconds;
		}

		var full_date = months+"&nbsp;"+days+"&nbsp;, "+years+"&nbsp;&nbsp;"+hours+"&nbsp;:&nbsp;"+minutes+"&nbsp;:&nbsp;"+seconds+"&nbsp;"+am_pm;

		$('.c-date a').html(full_date);
	},1000);
	
});