function togglepopup(){
	document.getElementById("popup-1").classList.toggle("active");
}
function togglepopup1(){
	document.getElementById("popup1-2").classList.toggle("active");
}
function togglepopup2(){
	document.getElementById("popup2-2").classList.toggle("active");
}



function loadData(name){
	if(name=="button1")
		{
		document.getElementById("img1").src="../images/h4.jpg";
		document.getElementById("img1").width="175"; 
		document.getElementById("img1").height="80";
		document.getElementById("para").innerHTML="Union Assurance commences operations with the combined portfolio’s of Aitken Spence, Carson Cumberbatch, Mercantile Credit and Whitall Boustead";
		}
		
	else if(name=="button2")
		{
		document.getElementById("img1").src="../images/h6.jpg";
		document.getElementById("img1").width="175"; 
		document.getElementById("img1").height="80";
		document.getElementById("para").innerHTML="Invests LKR 100 million to upgrade computer systems.<br>Launch of Safe Guard Insurance  with general insurance operation.<br>Commencement of life operations.";
		}
		
	else if(name=="button3")
		{
		document.getElementById("img1").src="../images/h3.jpg";
		document.getElementById("img1").width="175"; 
		document.getElementById("img1").height="80";
		document.getElementById("para").innerHTML="Total insurance premiums exceeded LKR 2 billion.<br>Safe Guard captures 4% of market share in Sri Lanka.<br>1st private insurer to commence operations in Anuradhapura";
		}
	
	else if(name=="button4")
		{
		document.getElementById("img1").src="../images/h7.jpg";
		document.getElementById("img1").width="175"; 
		document.getElementById("img1").height="80";
		document.getElementById("para").innerHTML="The company achieves the LKR 1 billion GWP mark.<br>Deployment of home grown general insurance IT system.<br>Acquisition of the company by the Safty First Group diversified conglomerate";
		}
		
	else if(name=="button5")
		{
		document.getElementById("img1").src="../images/h2.jpg";
		document.getElementById("img1").width="175"; 
		document.getElementById("img1").height="80";
		document.getElementById("para").innerHTML="Company splits into 2 business units Union Assurance PLC (UAL) and Union Assurance General Limited (UAG). Accordingly UAG is formed with a 78% ownership with the Fairfax Group and 22% with Union Assurance PLC";
		}
		
	else if(name=="button6")
		{
		document.getElementById("img1").src="../images/h5.jpg";
		document.getElementById("img1").width="175"; 
		document.getElementById("img1").height="80";
		document.getElementById("para").innerHTML="Union Assurance General completes the 100% share acquisition of Asian Alliance General Insurance, and AAGI accordingly becomes a member of the Fairfax group.";
		}
		
	
	else
		{
		alert("invalid");
		}
}