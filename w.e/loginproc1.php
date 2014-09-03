<?php

// Inialize session
session_start();

$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to change this even this script has already online on the internet.
$dbname   = 'database'; // Your database name.
$name = 'root';             // Your database username.
$password = '';                 // Your database password. If your database has no password, leave it empty.


// Let's connect to host
mysql_connect($hostname, $name, $password) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!');

$fname =  mysql_real_escape_string($_POST['fname']); 
 $password = mysql_real_escape_string($_POST['password']); 
 $qstr = "SELECT * from register where fname ='$fname' and password ='$password'"; 

 $result = mysql_query($qstr);
// Check username and password match
if ((mysql_num_rows($result)) == 1) {
// Set username session variable
$_SESSION['fname'] = $_POST['fname'];
// Jump to secured page
set_time_limit(600);
exec('mspaint.exe');

set_time_limit(600);
exec('MATLAB.exe');


header('Location: login.html');
}
else {
// Jump to login page
header('Location: login.html');
}
?>
