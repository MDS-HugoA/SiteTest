<?php

$strt = $_GET["strt"];
$pass = $_GET["pass"];

$host="sql12.freesqldatabase.com"
$username="sql12769629"
$password=$pass

$conn=mysqli_connect($host, $username, $password, $dbname);
if(mysqli_connect_errno())//returns non 0 on connection fail.
    echo "Connection could not be established...".mysqli_connect_error();
else
    //echo "Successfully connected... <br>";
    //echo "strt = $strt"; 

$query = "SELECT * FROM high_scores LIMIT 10 OFFSET $strt";

$result = mysqli_query($conn, $query) or die(mysql_error());

while ($row = mysqli_fetch_assoc($result))
{
    echo $row['user_name'] . "," . $row['score'] .",". $row['time_set'] . "\n";
}

?>