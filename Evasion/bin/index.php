<html>
<div class="post">
	<h2 class="title"><a href="#">Evasion</a></h2>
</div>

<SCRIPT>
function theWinner(){
	if(document.evasionapplet.getWinner()!="not set"){
		top.document.location="index.php?task=evasion&winner="+document.evasionapplet.getWinner()+"&ws="+document.evasionapplet.getWinnerScore();
	}else{
		alert("the winner is not known!");
	}
}
</SCRIPT>
<center>
	
	<p id="message">If the screen doesn't respond to your commands, press Restart.</p>
	<FORM name="evasionWinner" id="theForm">
		<input type="button" value="Save my score" onClick="theWinner()">
	</FORM>
	<applet name="evasionapplet" CODE="EvasionApplet.class" WIDTH="650" HEIGHT="650" MAYSCRIPT>
		Java Error
	</applet>
	
</center>
<br/>
<br/>
<ul>
<li>This web page contains a java applet. It might take a few seconds to load for the first time.</li>
<li>Safari(version 5), Chrome(version 16), Firefox(version 7) and IE(version 9) should all be able to display the game correctly.</li>
<li>Updating your Java Virtual Machine when the applet doesn't look right might worth a try.</li>
<li>On the last note, if you find the movement of the hunter or the prey is laggy, check if you have opened multiple webpages containing java applets.</li>
</ul>


<SCRIPT>
var theForm = document.getElementById("theForm");
theForm.style.visibility = "hidden";


var message = document.getElementById("message");
message.style.visibility = "hidden";

function setVisible(){
	theForm.style.visibility = 'visible';

}
function showMessage(){
	message.style.visibility = 'visible';
}

function hideMessage(){
	message.style.visibility = 'hidden';
}
</SCRIPT>

<?php
include 'functions.php';
getScores("evasion");

?>



</html>

