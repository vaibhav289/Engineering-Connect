<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 	<meta name="description" content="A short description." />
 	<meta name="keywords" content="put, keywords, here" />
 	<title>PHP-MySQL forum</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div id="wrapper">
     <!--site header-->
        <div id="header">
        		
                <!--site logo-->
                <p><b>Engineering Connect</b></p>
                               
        </div><!--header-->  	
        <!--starting of upperblock-->
        		<div id="upperblock">
        
        
        
				        <!-- Start PureCSSMenu.com MENU -->
                        <div class="navigation">
<ul class="pureCssMenu pureCssMenum0">
	<li class="pureCssMenui0"><a class="pureCssMenui0" href="http://localhost/w.e/html%20files/index.html">Home</a></li>
	<li class="pureCssMenui0"><a class="pureCssMenui0" href="/forum/create_topic.php"><span>Create Topic</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li class="pureCssMenui0"><a class="pureCssMenui0" href="/forum/create_cat.php"><span>Create Category</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->

	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li class="pureCssMenui0"><a class="pureCssMenui0" href="http://localhost/forum/index.php"><span>Forum Home</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li class="pureCssMenui0"><a class="pureCssMenui0" href="http://localhost/w.e/html%20files/paper.html">Papers</a></li>
	<li class="pureCssMenui0"><a class="pureCssMenui0" href="http://localhost/w.e/html%20files/faq.html">FAQ</a></li>
    
	<li>
		<!--search bar-->
		<div class="searchbar">		<form method="get" action="http://www.google.com/search">

						<p><input type="text"   " name="q" value=" " /><input type="submit" value=" Search " /></p>
                </form>		</div><!--end of search bar-->
	</li> 
</ul>



<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>


    	
<div class="clear">


</div>

     
</div><!--end of upperblock-->   

<div id="sign">

	<?php
		if($_SESSION['signed_in'])
		{
			echo 'Welcome <b>' . htmlentities($_SESSION['user_name']) . '</b>. <br/><a class="item2" href="signout.php">Sign out</a>';
		}
		else
		{
			echo '<a class="item1" href="signin.php">Sign in</a> or <a class="item" href="signup.php">Register</a>';
		}
		?>
        </div>
			
            <div id="filling">
           

			<div id="content">

        