function validateReqFields(thisform) 
{ 
    var bname=thisform.bname.value; 
    var hname=thisform.hname.value; 
	var uname=thisform.uname.value; 
	var pass=thisform.pass.value; 
	var cp=thisform.contactp.value; 
    if(!isNaN(bname)) 
	{ 
		alert("Invalid Blood Bank name, should contain alphabets only"); 
		thisform.bname.focus(); 
		return false; 
	} 
	if(!isNaN(hname)) 
	{ 
		alert("Invalid Blood Bank name, should contain alphabets only"); 
		thisform.hname.focus(); 
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
	if(!isNaN(cp)) 
	{ 
		alert("Invalid Contact Person Name, should contain alphabets only"); 
		thisform.contactp.focus(); 
		return false; 
	} 
  var cno=thisform.contactno.value; 
	 if(cno==null||cno=="") 
	 { 
		alert("enter the contact number"); 
		thisform.congtactno.focus(); 
		return false; 
	} 
	if(cno.length<10) 
	{ 
		alert("contact number must have atleast 10 digits"); 
		thisform.contactno.focus(); 
		return false; 
	} 
	if(isNaN(cno)) 
	{ 
		alert("Invalid contact number, should contain numbers only"); 
		thisform.contactno.focus(); 
		return false; 
	} 

	return true;
 }