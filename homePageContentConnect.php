<?php
//Have to figure out how to save the password
$username = "hooptekc_admin";
$password = "KingLaker32";
$host ="localhost";
$dbname="hooptekc_bball_db";

//Establish Connection
$conn = mysql_connect($host,$username,$password);
//Check if connection is successful
if(!conn){
	die("Could not connect:". mysql_error());
} 

//Select the database
mysql_select_db($dbname,$conn);
//QUERY FOR THE TEAM INFO
$sql= mysql_query('SELECT imageUrl, imageComment 
				FROM Images ORDER BY imageID DESC' );
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
				
mysql_close($conn);?>