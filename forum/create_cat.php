<?php
//create_cat.php
include 'connect.php';
include 'header.php';

echo '<h2>Create a category</h2>';
if($_SESSION['signed_in'] == false | $_SESSION['user_level'] != 1 )
{
	//the user is not an admin
	echo '<br />Sorry, you do not have sufficient rights to access this page.';
}
else
{
	//the user has admin rights
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		//the form hasn't been posted yet, display it
		echo '<form method="post" action="">
			<p><br />Category name : <input type="text" name="cat_name" /><br />
			<br />Category description :<br /> <textarea name="cat_description" /></textarea><br /><br /></p>
			<div class="user-post3"><input type="submit" value="Add category" /></div>
		 </form>';
	}
	else
	{
		//the form has been posted, so save it
		$sql = "INSERT INTO categories(cat_name, cat_description)
		   VALUES('" . mysql_real_escape_string($_POST['cat_name']) . "',
				 '" . mysql_real_escape_string($_POST['cat_description']) . "')";
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo '<br />Error' . mysql_error();
			echo '<br/>Try creating category using another name.';
		}
		else
		{
			echo '<br />New category succesfully added.';
		}
	}
}

include 'footer.php';
?>
