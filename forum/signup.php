<html>
<head>
<script type="text/javascript">
function validate()
{
var emailid=document.Register.user_email.value;
valid=true;
if(document.Register.user_name.value=="")
{
alert("Enter FirstName");
valid=false;
document.Register.user_name.focus();
}
if(document.Register.user_pass.value=="")
{
alert("Enter Password");
valid=false;
document.Register.user_pass.focus();
}
if(document.Register.user_pass.value.length < 6)
{
alert("Password must be greater than 6 characters");
valid=false;
document.Register.user_pass.focus();
}
if(document.Register.user_pass_check.value=="")
{
alert("Enter Confirm Password");
valid=false;
document.Register.user_pass_check.focus();
}
if (!(document.Register.user_pass.value==document.Register.user_pass_check.value))
{
 alert("password doesn't match");
 valid=false;
 document.Register.user_pass.focus();
}
if(document.Register.user_email.value=="")
{
alert("Enter Email Address");
valid=false;
document.Register.user_email.focus();
}
txt = emailid.substr(0,1);
if(!((txt >= 'a' && txt <= 'z') || (txt >= 'A' && txt <= 'Z')))
{
alert("First character has to be an alphabet");
valid=false;
document.Register.user_email.focus();
}
var atpos=emailid.indexOf("@");
var dotpos1=emailid.indexOf(".");
var dotpos=emailid.lastIndexOf(".");
if(emailid.length>dotpos+4)
{
alert("not a valid email id");
valid=false;
document.Register.user_email.focus();
}
if(!(dotpos==dotpos1))
{
if(dotpos>dotpos1+3 || dotpos<dotpos1+2)
{
alert("Not a valid email id");
valid=false;
document.Register.user_email.focus();
}}
if (atpos>dotpos1)
{
alert("Not a valid e-mail address");
valid=false;
document.Register.user_email.focus();
}
return valid;
}
</script>
</head>
</html>
<?php
//signup.php
include 'connect.php';
include 'header.php';

echo '<h2>Register</h2><br />';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    /*the form hasn't been posted yet, display it
	  note that the action="" will cause the form to post to the same page it is on */
    echo '<form name="Register" method="post" onsubmit="return validate()" action="">
	
	<table class="info">
                    <tr>
                        
                            <td>UserName:</td>
                            <td> <input name="user_name" type="text" /></td>
                       </tr>
					   
                   <tr>
	                      
                           <td>Password:</td>
                           <td> <input name="user_pass" type="password"/></td>
                      </tr>
 					  <tr>
	                       
                           <td>Confirm Password:</td>
                           <td> <input name="user_pass_check" type="password"/></td>
                      </tr>
					
                     <tr>
 	                  
                        <td> Email Address: </td>
                        <td><input name="user_email" type="email"/></td>
                    </tr>
                    
            	</table>
                
 		<div class="user-post4"><input type="submit" value="Submit" /></div>
 	 </form>';
}
else
{
    /* so, the form has been posted, we'll process the data in three steps:
		1.	Check the data
		2.	Let the user refill the wrong fields (if necessary)
		3.	Save the data 
	*/
	$errors = array(); /* declare the array for later use */
	
	if(isset($_POST['user_name']))
	{
		//the user name exists
		if(!ctype_alnum($_POST['user_name']))
		{
			$errors[] = 'The username can only contain letters and digits.';
		}
		if(strlen($_POST['user_name']) > 30)
		{
			$errors[] = 'The username cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The username field must not be empty.';
	}
	
	
	if(isset($_POST['user_pass']))
	{
		if($_POST['user_pass'] != $_POST['user_pass_check'])
		{
			$errors[] = 'The two passwords did not match.';
		}
	}
	else
	{
		$errors[] = 'The password field cannot be empty.';
	}
	
	if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
	{
		echo 'Some fields are not filled in correctly..<br /><br />';
		echo '<ul>';
		foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
		{
			echo '<li>' . $value . '</li>'; /* this generates a nice error list */
		}
		echo '</ul>';
	}
	else
	{
		//the form has been posted without, so save it
		//notice the use of mysql_real_escape_string, keep everything safe!
		//also notice the sha1 function which hashes the password
		$sql = "INSERT INTO
					users(user_name, user_pass, user_email ,user_date, user_level)
				VALUES('" . mysql_real_escape_string($_POST['user_name']) . "',
					   '" . sha1($_POST['user_pass']) . "',
					   '" . mysql_real_escape_string($_POST['user_email']) . "',
						NOW(),
						0)";
						
		$result = mysql_query($sql);
				if($result)
		{
			echo 'Succesfully registered. You can now <a href="signin.php">sign in</a> and start posting! :-)';
		}
	}
}

include 'footer.php';
?>
