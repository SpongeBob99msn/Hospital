<?php

$hn='localhost'; //hostname
$db='shrouze_hospital'; //database
$un='shrouze_hospital';
$pw='test1234';

$connection=@mysql_connect($hn, $un, $pw, $db) or die("unable to connect");
$db=@mysql_select_db("shrouze_hospital") or die(mysql_error());

$sql="select * from Room";
$result=@mysql_query($sql) or die(mysql_error());

echo"<table border ='1'>";
echo"<tr><td>Roomnumber></td><td>RoomType></td><td>Unavailable></td>  <tr>";
while($row =mysql_fetch_assoc($result)) {

echo"<tr><td>{$row['RoomNumber']}</td> <td> {$row['RoomType']}</td><td>{$row['Unavailable']}></td> <tr>";


}

echo"</table>";

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Number Maker</title>
    <style>


      table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}

th, td {
  padding: 15px;
  text-align: left;
}

th, td {
  background-color: #4CAF50;
  color: white;
}


    </style>
  </head>
  <body body bgcolor="#FFF8DC">
   <h1>Click <a href="http://shrouze.myweb.cs.uwindsor.ca/60334/project/html/admin.html">Here</a>
to go back</h1>
  </body>
</html>
