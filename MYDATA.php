<html>
<head>
</head>
<body>
<?php
define('DB_USER','root');
define('DB_PASSWORD','123@ab');
define('DB_HOST','localhost');
$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link){
die('can not connect: '.mysql_error());
}
mysql_select_db("snippets", $link);
$sql = "SELECT * FROM lectures";
$myData = mysql_query($sql,$link);
while($record = mysql_fetch_array($myData))
{
echo $record['Topic'] . " " . $record['Name'] . " " . $record['Attendance'];  
echo "<br />";
}
mysql_close($link);
?>
</body>
</html>
