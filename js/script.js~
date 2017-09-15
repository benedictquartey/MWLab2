


var xh = createXMLHttpRequestObject();

function displayResult(){

}

function createXMLHttpRequestObject(){
	var xmlHttp;

	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}
	}else{
		try{
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHttp = false;
		}
	}

	if(!xmlHttp){
		alert("can't create XMLHttpRequest object")
	}else{
		return xmlHttp;
	}

}

function process(){
		var phone = document.getElementById('phone').value;
		var message = document.getElementById('message').value;
		var sender = document.getElementById('sender').value;

		var url = "144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=" + phone + "&from=" + sender + "&text=" + message + "&dlr-mask=31";
		alert("URL: " + url);
		/*if(xh.readyState == 0 || xh.readyState == 4){

  	  	   	xh.open('GET', url, true);
  	 		xh.onreadystatechange = handleServerResponse();
  	 		xh.send(null);
  	  }else{
  	  	setTimeout('process()', 1000);
  	  }*/
}

function handleServerResponse(){
	if(xh.readyState == 4){
		if(xh.status == 200){

			document.getElementById("resultSpan").innerHTML = "Accepted for delivery!";

			setTimeout('process()', 1000);
		}else{
			alert("Something went wrong");
		}
	}
}




