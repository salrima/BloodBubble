function validateReqFields(thisform) 
{ 
    var cname=thisform.cname.value; 
    var orgtype=thisform.orgtype.value; 
    var orgname=thisform.orgname.value; 
	var organizer=thisform.organizer.value; 
	var pass=thisform.pass.value; 
    if(!isNaN(cname)) 
	{ 
		alert("Invalid First name, should contain alphabets only"); 
		thisform.cname.focus(); 
		return false; 
	} 
    if(!isNaN(orgtype)) 
	{ 
		alert("Invalid organization type should contain alphabets only"); 
		thisform.orgtype.focus(); 
		return false; 
	} 
    if(!isNaN(orgname)) 
	{ 
		alert("Invalid organization name should alphabets only"); 
		thisform.orgname.focus(); 
		return false; 
	} 
	if(!isNaN(orgnanizer)) 
	{ 
		alert("Invalid organizer name should alphabets only"); 
		thisform.organizer.focus(); 
		return false; 
	} 

	
  var orgphno=thisform.orgphno.value; 
	if(orgphno==null||orgphno=="") 
	{ 
		alert("enter the phone number"); 
		thisform.orgphno.focus(); 
		return false; 
	} 
	if(orgphno.length<10) 
	{ 
		alert("phone number must have atleast 10 digits"); 
		thisform.orgphno.focus(); 
		return false; 
	} 
	if(isNaN(orgphno)) 
	{ 
		alert("Invalid phone number, should contain numbers only"); 
		thisform.orgphno.focus(); 
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