var sender = document.getElementById("name");
var recipient = document.getElementById("number");
var textArea = document.getElementById("textArea");

 //This block creates anevent listner and prevents the form from being submited to a server
document.getElementById('contact').addEventListener("submit", function(e){
    e.preventDefault();
     // checks the fields to ensure they arent empty
    if (sender.value == ""){
     alert("add a sender ID");
     return false;
    }
    if(recipient.value == ""){
        alert("Add phone No");
        return false;
    }
    if(textArea.value == ""){
        alert("Add text");
        return false;
    } else{
        // this line is used to send the message collected via the url provided
        window.location.href = "http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to="+recipient.value+"&from="+sender.value+"&text="+textArea.value+"&dlr-mask=31"
    }
    
})

