var userName = document.getElementById("name");
var email = document.getElementById("email");
var phone = document.getElementById("phone");
var website = document.getElementById("website");
var message = document.getElementById("message");
var counterValue = document.getElementById("counter");
counter = 0;

// validate form 
function validateForm(){
if(email.value == "" || userName.value =="" || phone.value =="" || website.value =="" || message.value==""){
alert("Please Fill In All Forms");
}
else{
	alert("Thank you!!! Form successfully submitted");
}

}

// Increment Function
function increment(){
	counter++;
	counterValue.innerHTML = "Counter is " + counter;

}


// decrement  function
function decrement(){
	counter--;
	counterValue.innerHTML = "Counter is " + counter;

}