function validate()
{
var nam=document.forms["Register"]["fname"].value;
var lnam=document.forms["Register"]["lname"].value;
var pass=document.forms["Register"]["Password"].value;
var conf=document.forms["Register"]["confirm"].value;
var emailid=document.forms["Register"]["email"].value;
var yr=document.forms["Register"]["year"].value;
var ch=document.forms["Register"]["check"].checked;
  if (nam==null || nam=="")
  {
  alert("Name is not filled");
  }
  if (lnam==null || lnam=="")
  {
  alert("Name is not filled");
  }
	if (pass==null || pass=="")
  {
  alert("Password is not filled");
  }
  
  if (pass.length<6)
  {
  alert("Password shorter than 6 characters");
  }
else
  if (!(pass==conf))
  {
 alert("password doesn't match");
  }

txt = emailid.substr(0,1);
if(!((txt >= 'a' && txt <= 'z') || (txt >= 'A' && txt <= 'Z')))
{
alert("First character has to be an alphabet");
}


var atpos=emailid.indexOf("@");
alert(atpos);
var dotpos1=emailid.indexOf(".");
alert(dotpos1);
var dotpos=emailid.lastIndexOf(".");
alert("dot pos" + dotpos);


alert("length" + emailid.length)
if(emailid.length>dotpos+4)
{
alert("not a valid emailasbdnjkasbndkjbn");
}

if(!(dotpos==dotpos1))
{
if(dotpos>dotpos1+3 || dotpos<dotpos1+2)
{
alert("Not valid asnkdn");
}}
if (emailid==null || emailid=="")
  {
	   alert("Email field can't be left blank");
  }
  else
if (atpos>dotpos1
)
  {
  alert("Not a valid e-mail address");
  }
if(yr<=1900||yr>=2010)
{
	alert("Invalid date or format");
}
if(document.forms["Register"]["check"].checked==false)
{
	alert("Cannot procede without terms of services being accepted");
}

if (nam==null || nam=="" || pass==null || pass=="" ||pass.length<6 || !(pass==conf) || emailid==null || emailid=="" || atpos<1 || dotpos<atpos+2 || dotpos+2>=emailid.length||yr<=1900||yr>=2010||document.forms["Register"]["check"].checked==false||c==1 ||atpos<dotpos1)
{
	return false;
}
}


