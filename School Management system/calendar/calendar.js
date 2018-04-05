var CALENDAR = function () {
	var wrap, label, 
			months = ["January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December"];

		function init(newWrap) {
			var yearH = $(newWrap || "#header1");
			wrap  = $(newWrap || "#cal");
			
			var y = new Date().getFullYear();
			
			label = yearH.find("#label");
			label.text(y);
			yearH.find("#prev").bind("click.calender", function () { switchMonth(false); });
			yearH.find("#next").bind("click.calender", function () { switchMonth(true); });	
			for(var i=0; i<12; i++){
				console.profile("createCal");
				calendar = createCal(y, i);
				console.profileEnd("createCal");
				var id="#cal-frame"+i.toString();
				var idm="curr"+i.toString();
				$(id, wrap)
				.find("."+idm)
					.removeClass(idm)
					.addClass("temp")
				.end()
				.prepend(calendar.calendar())
				.find(".temp")
					.remove();
			}		
		}
		
		function switchMonth(next) {
			var cur = label.text(), calendar, tempYear = parseInt(cur, 10);
			
			year  = (next)? tempYear +1 : tempYear-1;
			label.text(year);
			for(var i=0; i<12; i++){
				console.profile("createCal");
				calendar = createCal(year, i);
				console.profileEnd("createCal");
				var id="#cal-frame"+i.toString();
				var idm="curr"+i.toString();
				$(id, wrap)
				.find("."+idm)
					.removeClass(idm)
					.addClass("temp")
				.end()
				.prepend(calendar.calendar())
				.find(".temp")
					.remove();
			}
		}
		
	function createCal(year, month) {
		var day = 1, i, j, haveDays = true, 
				startDay = new Date(year, month, day).getDay(),
				daysInMonth = [31, (((year%4===0)&&(year%100!==0))||(year%400===0)) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ],
				calendar = [];
		if (createCal.cache[year]) {
			if (createCal.cache[year][month]) {
				return createCal.cache[year][month];
			}
		} else {
			createCal.cache[year] = {};
		}
		i = 0;
		while(i<6) {
			calendar[i] = [];
			for (j = 0; j < 7; j++) {
				if (i === 0) {
					if (j === startDay) {
						calendar[i][j] = day++;
						startDay++;
					}
				} else if ( day <= daysInMonth[month]) {
					calendar[i][j] = day++;
				} 
				else {
					calendar[i][j] = "";	
				}
			}
			i++;
		}	
		
		for (i = 0; i < calendar.length; i++) {
			calendar[i] = "<tr><td>" + calendar[i].join("</td><td>") + "</td></tr>";
		}
		var idmm="curr"+month.toString();
		calendar = $("<table>" + calendar.join("") + "</table>").addClass(idmm);

		$("td:empty", calendar).addClass("nil");
		if (month === new Date().getMonth()) {
			$('td', calendar).filter(function () { return $(this).text() === new Date().getDate().toString(); }).addClass("today");
		}
		
		createCal.cache[year][month] = { calendar : function () { return calendar.clone(); }};

		return createCal.cache[year][month];
	}
	createCal.cache = {};

	return {
		init : init,
		switchMonth : switchMonth,
		createCal : createCal
	};

};
