
//validates the username
function validateName(form_name,object_name,span_name)
{
	var name = document.forms[form_name][object_name];
	var span = document.getElementById(span_name);

  if (name.value == "") 
  {
    if (object_name == "middle_name")
    {
      name.style.border= "";
      span.innerHTML = "";
      return true; 
    }
    else
    {
      span.innerHTML = "*required";
      name.style.border= "1px solid red";
      return false; 
    }
  }
  else
  {
  	//checks if the username does not contain numbers or symbols 
  	var pattern = new RegExp("^[a-zA-Z]+$");

  	if (pattern.test(name.value)) 
  	{
  		name.style.border= "";
 		  span.innerHTML = "";
 		  return true; 
  	}
  	else
  	{
  		span.innerHTML = "*must not contain numbers or symbols";
 		  name.style.border = "1px solid red";
 		  return false; 
  	}
  }
}

//validates message
function validateMessage(form_name,object_name,span_name)
{
  var name = document.forms[form_name][object_name];
  var span = document.getElementById(span_name);

  if (name.value == "") 
  {
    
    span.innerHTML = "*required";
    name.style.border= "1px solid red";
    return false; 
  }
  else
  {
    name.style.border= "";
    span.innerHTML = "";
    return true; 
  }
}

//validates the payroll
function telephoneValidation(form_name,object_name,span_name)
{
    var name = document.forms[form_name][object_name];
    var span = document.getElementById(span_name);
    if (name.value!="")
    {
      //checks if the payroll is a number
      if (!isNaN(name.value)) 
      {
        name.style.border="";
        span.innerHTML="";
        return true;
      }
      else
      {
        name.style.border="1px solid red";
        span.innerHTML="*number required";
        return false;
      }
    }
    else
    {
      name.style.border="1px solid red";
      span.innerHTML="*required";
      return false;
    }
}

function sendSMS()
{

  //validations
  senderIDValidation = validateName("smsForm","senderID","senderspan");
  telephone1Validation = telephoneValidation("smsForm","tel1","tel1span");
  telephone2Validation = telephoneValidation("smsForm","tel2","tel2span");
  telephone3Validation = telephoneValidation("smsForm","tel3","tel3span");
  messageValidation = validateMessage("smsForm","message","messagespan");

  if (senderIDValidation & telephone1Validation & telephone2Validation & telephone3Validation & messageValidation)
  {
  senderID = document.getElementById("senderID").value;
  telephone1 = document.getElementById("tel1").value;
  telephone2 = document.getElementById("tel2").value;
  telephone3 = document.getElementById("tel3").value;
  message= document.getElementById("message").value;

  var form_data = new FormData();  
   $.ajax({
      url: "/lab2/controller.php?", 
      type: "POST",          
      data: form_data, 
      dataType: 'text',
      contentType: false,       
      cache: false,             
      processData:false,        
      success: function(data)   
      {
        if (data == "success")
        {
          window.location="http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to="+telephone1+"+"+telephone2+"+"+telephone3+"&from="+senderID+"&text="+message+"&dlr-mask=31";
        }
      }
    });
  }
  return false;
}























