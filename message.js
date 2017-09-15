 //function message in javascript for backend implementation
function message() {
	var name = document.getElementById("name").value; //getting name of the sender
	var pno = document.getElementById("pnumber").value; //getting the number of the recipients
	var tarea = document.getElementById("textarea").value; //getting the message 
	var numbers= "";
	var array = pno.split(',');
	
	//for loop for concatinating the numbers 
	for(i=0; i<array.length; i++){
		numbers+=array[i]+"+";
	}

	//Use of AJAX 
	request = new XMLHttpRequest();
	request.onreadystatechange=function(){
	 if(this.readyState==4 || this.status == 200){
		 alert("Message sent successfully");
	 }
 };
 
 //opening and sending the URL in AJAX
 request.open("GET","http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to="+numbers+"&from="+name+"&text="+tarea+"&&dlr-mask=31",true);
 request.send();
}