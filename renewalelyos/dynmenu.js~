function initPage() {
	if(document.location.href.match(/\/news\.php/))
		showMenu();
	else
		hideMenu();
		
	//document.getElementById("mainmenu").style.display = "block";
}




function showMenu()
{
	document.getElementById("MenuArea").style.display = "";
	document.getElementById("ContentArea").style.width = "685px";
	var ch = document.getElementById("ContentArea").clientHeight;
	var mh = document.getElementById("MenuArea").clientHeight;
	if(mh+50 > ch)
		document.getElementById("ContentArea").style.height=(mh+50) + "px";
}


function hideMenu()
{

	document.getElementById("MenuArea").style.display = "none";

	document.getElementById("ContentArea").style.width = "890px";
	document.getElementById("ContentArea").style.height = "";
}


function toggleMenu()
{

	el = document.getElementById("MenuArea");	

	if (el.style.display == "none") showMenu();
	else hideMenu();

	return false;

}
