function validateReqFields(thisform) 
{ 
    var fname=thisform.fname.value; 
    var mname=thisform.mname.value; 
    var lname=thisform.lname.value; 
	var uname=thisform.uname.value; 
	var pass=thisform.pass.value; 
    if(!isNaN(fname)) 
	{ 
		alert("Invalid First name, should contain alphabets only"); 
		thisform.fname.focus(); 
		return false; 
	} 
    if(!isNaN(mname)) 
	{ 
		alert("Invalid Middle Name, should contain alphabets only"); 
		thisform.mname.focus(); 
		return false; 
	} 
    if(!isNaN(lname)) 
	{ 
		alert("Invalid Last Name, should alphabets only"); 
		thisform.lname.focus(); 
		return false; 
	} 

	if(uname=="")
	{
		alert("Please enter the user name"); 
		thisform.uname.focus();
		return false;
	}
	if(uname.length<6) 
	{
		alert("User name must be of atleast six characters");
		thisform.uname.focus();
		return false;
	} 
	if(pass=="") 
	{
		alert("Please enter the password"); 
		thisform.pass.focus(); 
		return false;
	}
	if(pass.length<8)
	{ 
		alert("Password must contain atleast 8 digits"); 
		thisform.pass.focus(); 
		return false;
	}

  var ph=thisform.mobileno.value; 
	if(ph==null||ph=="") 
	{ 
		alert("enter the phone number"); 
		thisform.phnum.focus(); 
		return false; 
	} 
	if(ph.length<10) 
	{ 
		alert("phone number must have atleast 10 digits"); 
		thisform.phnum.focus(); 
		return false; 
	} 
	if(isNaN(ph)) 
	{ 
		alert("Invalid phone number, should contain numbers only"); 
		thisform.phnum.focus(); 
		return false; 
	} 
    
	var txtDate = thisform.date.value; 
  var objDate; 
	var mSeconds; 
	if (txtDate=="") 
	{ 
		alert("Please enter the Date"); 
		return false; 
	} 
	var day = txtDate.substring(3,5); 
	var month = txtDate.substring(0,2)-1; 
	var year = txtDate.substring(6,10); 
	if (txtDate.substring(2,3) !='/') 
	{ 
		alert("Please enter the Date in correct format"); 
		return false; 
	} 
	if (txtDate.substring(5,6) !='/') 
	{ 
		alert("Please enter the Date in correct format"); 
		return false; 
	}
	mSeconds = (new Date(year, month, day)).getTime(); 
	objDate = new Date(); 
	objDate.setTime(mSeconds); 
	if (objDate.getDate()!= day) 
	{ 
		alert("you have entered the wrong Day"); 
		return false; 
	} 
	if (objDate.getMonth()!= month) 
	{ 
		alert("you have entered the wrong month"); 
		return false; 
	} 
	if (objDate.getFullYear()!= year) 
	{ 
		alert("you have entered the wrong year"); 
		return false; 
	} 



	return true;
 }