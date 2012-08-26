function Countdown_Capture() {
	//Example: 49 hours, 31 minutes, and 0 seconds until Gruul's Lair !
	var oCountdownTime = document.getElementById("divCountdown").innerHTML;
	if (oCountdownTime != 'undefined' && oCountdownTime != '' && oCountdownTime != null) {
		//First modify Format to 'h:m:s Event'
		oCountdownTime = oCountdownTime.replace(' hours, ', ':');
		oCountdownTime = oCountdownTime.replace(' minutes, and ', ':');
		oCountdownTime = oCountdownTime.replace(' !', '');
		var aTimeEvent = oCountdownTime.split(' seconds until ')
		var sTimeOnly = aTimeEvent[0];
		var sEventOnly = aTimeEvent[1];
		//Now get time values
		var aTimeOnly = sTimeOnly.split(':');
		var sHH = aTimeOnly[0];
		var sMM = aTimeOnly[1];
		var sSS = aTimeOnly[2];
		//Display the Event Info
		Event_Display(sEventOnly);
		//Now pass the times to the Countdown_Timer function to begin the timer
		Countdown_Timer(sHH, sMM, sSS);
		/* It's up to you to figure out how to display them from here.*/
	} else {
		Event_Display('No Event Scheduled');
		Countdown_Timer(0, 0, 0);
	}
}

function Event_Display(sEventHTML) {
	document.getElementById("tdEventDisplay").innerHTML = sEventHTML;
	//document.getElementById("spanEvent").innerHTML = sEventHTML;
}

function Countdown_Timer(sHH, sMM, sSS) {
	//First Format time Display to have at least 2-digit numbers.  such as 00:00:00
	var sHHDis = sHH.toString()
	var sMMDis = sMM.toString()
	var sSSDis = sSS.toString()
	if (sHHDis.length == 1) {
		sHHDis = '0' + sHHDis;
	}
	if (sMMDis.length == 1) {
		sMMDis = '0' + sMMDis;
	}
	if (sSSDis.length == 1) {
		sSSDis = '0' + sSSDis;
	}
	//First, display them. I chose to use Gold:Silver:Copper colors to represent the times, with white ':'
	var sTimerHTML = '<font style="color: #FFCC00">' + sHHDis + '</font>';
	sTimerHTML += ' : <font style="color: #999999">' + sMMDis + '</font>';
	sTimerHTML += ' : <font style="color: #996600">' + sSSDis + '</font>';	
	document.getElementById("tdEventTimer").innerHTML = sTimerHTML;
	//Now Count Down
	if (sSS > 0) {
		sSS = (sSS-1);
		window.setTimeout("Countdown_Timer(" + sHH + "," + sMM + "," + sSS + ")", 1000);
	} else if (sMM > 0) {
		sMM = (sMM-1)
		sSS = 59;
		window.setTimeout("Countdown_Timer(" + sHH + "," + sMM + "," + sSS + ")", 1000);
	} else if (sHH > 0) {
		sHH = (sHH-1)
		sMM = 59;
		sSS = 59;
		window.setTimeout("Countdown_Timer(" + sHH + "," + sMM + "," + sSS + ")", 1000);
	}
}


function Move_BottomMenu() {
	var oFrame = document.getElementById("tblScrollingMenu")
 	oFrame.style.bottom = ((document.body.scrollTop)*-1) + 'px';
	//(document.body.scrollTop) + "px";
}

function Change_Src(sObjName, sDir) {
	document.getElementById('img' + sObjName).src = 'settings/teamb/files/' + sObjName + sDir + '.gif';
}
