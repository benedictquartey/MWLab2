

/**
*This function retrieves values fromm the form and sends a message to the url
**/
function sendMessage() {
	var senderID = document.getElementById('senderID').value;
	var to = document.getElementById('to').value;
	var message1 = document.getElementById('message').value;
	var message = message1.replace(' ', '%20');
	var text ="";
	var array = to.split(",");
	if (array.length > 1) {
		for (i = 0; i < array.length; i++) { 
		    text += array[i]+"+";
		}
	}
	else{
		text = array[0];
	}

	var request = new XMLHttpRequest();

	request.onreadystatechange=function(){

			document.getElementById('note').innerHTML = "Your message has been delivered!";
	};
	request.open("GET","http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to="+text+"&from="+senderID+"&text="+message+"&dlr-mask=31",true);
	request.send();
}