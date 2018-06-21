var affiche = document.querySelector(".chrono");


function rebours() {

	var date1 = moment();
	var date2 = moment("Jun 30 05:42:00 2018");

	
	var hours = date2.diff(date1, 'hours');
	var minutes = date2.diff(date1, 'minutes');
	var seconds = date2.diff(date1, 'seconds');
	
	if (seconds > 60) {
			var minutes = date2.diff(date1, 'minutes');
			var seconds = seconds - minutes * 60;
		}

	if (minutes > 60) {
			var hours = date2.diff(date1, 'hours');
			var minutes = minutes - hours * 60;
		}


	if (hours > 24) {
		var days = date2.diff(date1, 'days');
		var hours = hours - days * 24;
	}

	


	
	

	if (hours < 10)
		hours = '0' + hours;

	if (minutes < 10)
		minutes = '0' + minutes;

	if (seconds < 10)
		seconds = '0' + seconds

	affiche.innerHTML =  days + "j " + hours + 'h ' + minutes + "min " + seconds + 's';
}
rebours();

setInterval(rebours, 1000);

