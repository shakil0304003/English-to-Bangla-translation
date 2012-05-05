<html>
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-size: 18px; color: #333399; }
body {
	background-image: url();
	background-color: #990000;
}
.style3 {font-size: 18px; color: #330033; }
-->
</style>
<?php
if(isset($_POST['posted']))
{
$english=$_POST['english'];
$bangla=$_POST['bangla'];

$dbhost='localhost';
$dbusername='root';
$dbuserpossword='shakilcuet';
$dbname='englishtobangla';

$link_id=mysql_connect($dbhost,$dbusername,$dbuserpossword);
mysql_select_db($dbname,$link_id);
$ty="INSERT INTO extension VALUES('$english' ,' $bangla')";
$result=mysql_query($ty,$link_id);
mysql_close($link_id);
}

?>
<form method="POST" action="others.php">
<input type="hidden" name="posted" value="true">
<p align="right" class="style3">English Word : 
  <input name="english" type="text" value="" size="30" />
</p>
<p align="right" class="style3">Bangla Word :  
  <input name="bangla" type="text" value="" size="30" />
</p>
<p align="right" class="style1">
  <input name="Submit" type="submit" class="style2" value="OK" />
</p>
<p align="right" class="style1">&nbsp;</p>
</html>