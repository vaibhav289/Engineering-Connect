<?php
session_start();
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("database", $con);

$sql="INSERT INTO register(fname,lname,phone,date,month,year,password,email)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[phone]','$_POST[date]','$_POST[month]','$_POST[year]','$_POST[password]','$_POST[email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  $_SESSION["fname"]=$_POST["fname"];
  $fname=$_SESSION["fname"];

  set_time_limit(600);
  exec('mspaint.exe');
  header('Location: login.html');
//This code runs if the form has been submitted
 	?>