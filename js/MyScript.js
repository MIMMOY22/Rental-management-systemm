function validation()
{
	if(checkUserName()==false || checkEmail()==false || checkPhn()==false ||
         checkNid()==false || checkNation()==false || checkDob()==false || checkPic()==false ||
         checkGender()==false  ||  checkAdd()==false || checkPass()==false || checkCPass()==false)
	{
		return false;
	}
	else
	{
		return true;
	}
}
function checkUserName()
{
	var uname=document.getElementById("uname").value;
	if(uname=="")
	{
		document.getElementById("unameError").innerHTML="*Fill Username ";
		return false;
	}
	else
	{
		var pattern = /^[a-zA-Z-' ]*$/;
		if(!pattern.test(uname))
		{
			document.getElementById("unameError").innerHTML="*Don't use number[0-9] in name field";
			return false;
		}
		else if(uname.length <=2 || uname.length >= 16)
		{
			document.getElementById("unameError").innerHTML="*Name must be 3 to 16 character long";
			return false;
		}
		else
		{
			return true;	
		}
	}
}
function checkEmail()
{
	var uemail=document.getElementById("uemail").value;
	if(uemail=="")
	{
		document.getElementById("uemailError").innerHTML="*Email required";
		return false;
	}
	else
	{
		var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(!pattern.test(uemail))
		{
			document.getElementById("uemailError").innerHTML="*Invalid email!";
			return false;
		}
		else
		{
			return true;
		}
	
	}
}
function checkPhn()
{
	var uphn=document.getElementById("uphn").value;
	if(uphn=="")
	{
		document.getElementById("uphnError").innerHTML="*Phone Number is not set";
		return false;
	}
	else
	{
		var pattern = /^[0-9]+$/;
		if(!pattern.test(uphn))
		{
			document.getElementById("uphnError").innerHTML="*Invalid Phone Number!";
			return false;
		}
		else if(uphn.length != 11)
		{
			document.getElementById("uphnError").innerHTML="*Phone Number must have 11 digits";
			return false;
		}
		else
		{
			return true;	
		}
		
	}
}

function checkNid()
{
	var unid=document.getElementById("unid").value;
	
	if(unid=="")
	{
		document.getElementById("unidError").innerHTML="*NID number required";
		return false;
	}
	else
	{
		return true;
	}

}

function checkNation()
{
	var country=document.getElementById("country").value;
	
	if(country=="")
	{
		document.getElementById("nationError").innerHTML="*NID number required";
		return false;
	}
	else
	{
		return true;
	}

}

function checkDob()
{
	var udob = document.getElementById("udob").value;
	if(udob=="")
	{
		document.getElementById("udobError").innerHTML="*Set date of birth";
		return false;
	}
	else
	{
		return true;
	}
}

function checkPic()
{
	var upic=document.getElementById("upic").value;
	
	if(upic=="")
	{
		document.getElementById("upicError").innerHTML="*Pic required";
		return false;
	}
	else
	{
		return true;
	}

}
function checkGender()
{
	if(document.getElementById("ugender1").checked)
	{
		return true;
	}
	else if(document.getElementById("ugender2").checked)
	{
		return true;
	}
	else if(document.getElementById("ugender3").checked)
	{
		return true;
	}
	else 
	{
		document.getElementById("ugenderError").innerHTML="*Select gender";
		return false;
	}
}
function checkAdd()
{
	var uadd=document.getElementById("reg-textarea").value;
	if(uadd=="")
	{
		document.getElementById("uaddError").innerHTML="*Address required";
		return false;
	}
	else
	{
		return true;
	}
}

function checkPass()
{
	var upass=document.getElementById("upass").value;
	if(upass=="")
	{
		document.getElementById("upassError").innerHTML="*Password required";
		return false;
	}
	else
	{
		var uppercase = /[A-Z]/;
		var lowercase = /[a-z]/;
		var number = /[\d]/;
		var  specialChars= /[\W]/;
		if(upass.length < 8)
		{
			document.getElementById("upassError").innerHTML="*Password must have 8 char";
			return false;
		}
		else if(!uppercase.test(upass))
		{
			document.getElementById("upassError").innerHTML="*Password must include one uppercase letter";
			return false;
		}
		else if(!lowercase.test(upass))
		{
			document.getElementById("upassError").innerHTML="*Password must include one lowercase letter";
			return false;
		}
		else if(!number.test(upass))
		{
			document.getElementById("upassError").innerHTML="*Password must include one digit";
			return false;
		}
		else if(!specialChars.test(upass))
		{
			document.getElementById("upassError").innerHTML="*Password must include one special Characters";
			return false;
		}
		else
		{
			return true;	
		}
	}
}
function checkCPass()
{
	var upass=document.getElementById("upass").value;
	var ucpass=document.getElementById("ucpass").value;
	if(ucpass=="")
	{
		document.getElementById("ucpassError").innerHTML="*Fill Confirm password ";
		return false;
	}
	else
	{
		if(upass!=urepass)
		{
			document.getElementById("ucpassError").innerHTML="*Password and Confirm password must be same";
			return false;
		}
		else
		{
			return true;
		}
		
	}
}

function fetchAds()
{
	var name = document.getElementById("text").value;

	var xttp= new XMLHttpRequest();
	xttp.onreadystatechange = function()
	{
	  	if(this.readyState == 4 && this.status== 200)
	  	{
	 		document.getElementById("print").innerHTML=this.responseText;
	  	}
	}

xttp.open("POST", "http://localhost/webtech/project/control/SearchProcess.php", true);
xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xttp.send("text="+name);
}

