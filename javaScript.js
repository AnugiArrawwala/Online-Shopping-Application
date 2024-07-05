var passConfirm = function()
{
	if(document.getElementById("password").value == 
	document.getElementById("confirmpassword").value)
	{
		document.getElementById("Message").style.color = "Red";
		document.getElementById("Message").innerHTML = "Passwords match!";
	}
	else
	{
		document.getElementById("Message").style.color = "Green";
		document.getElementById("Message").innerHTML = "Passwords do not match!";
	}
	
}

function validate() {
  
    alert("Form submitted!");
    return true;
}
