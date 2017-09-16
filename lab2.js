function triggerUrl() {
	var senderID = document.getElementById('sID').value;
	inputFormat(senderID);
	var recepient1 = document.getElementById('recep1').value;
	inputFormat(recepient1);
	var recepient2 = document.getElementById('recep2').value;
	inputFormat(recepient2);
	var recepient3 = document.getElementById('recep3').value;
	inputFormat(recepient3);
	var text = document.getElementById('text').value;
	inputFormat(text);
	window.location = "http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to="+recepient1
		+"+"+recepient2+"+"+recepient3+"&from="+senderID+"&text="+text+"&dlr-mask=31";
}

function inputFormat(value) {
  	value = trim(value);
  	value = stripslashes(value);
  	value = htmlspecialchars(value);
  	return value;
}
