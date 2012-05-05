<html>
<head>
<title>
Noun Entry
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#00CC33">
<?php

if(isset($_POST['posted']))
{
$english=$_POST['English'];
$number=$_POST['number'];
$person=$_POST['person'];
$bangla=$_POST['bangla'];
$penglish=$_POST['penglish'];
$pbangla=$_POST['pbangla'];

if(strlen($english)!=0&&strlen($number)!=0&&strlen($person)!=0&&strlen($bangla)!=0)
{
$dbhost='localhost';
$dbusername='root';
$dbuserpossword='shakilcuet';
$dbname='englishtobangla';

$link_id=mysql_connect($dbhost,$dbusername,$dbuserpossword);
mysql_select_db($dbname,$link_id);
$ty="INSERT INTO noun VALUES('$english' ,'$number','$person','$bangla')";
$result=mysql_query($ty,$link_id);
if(strlen($penglish)!=0&&strlen($pbangla)!=0)
{
$number=2;
$ty="INSERT INTO noun VALUES('$penglish' ,'$number','$person','$pbangla')";
$result=mysql_query($ty,$link_id);
$ty="INSERT INTO number VALUES('$english','$penglish')";
$result=mysql_query($ty,$link_id);

}
mysql_close($link_id);
///
}
}
?>

<form method="POST" action="noun.php">
<input type="hidden" name="posted" value="true">

<p align="right">
  <font face="Arial" size=6 color= #FF0000>
         English Word  :
  <input name="English" type="text" class="style1" title="false" value="" size="30" row="1" font="Tunga">
  </br>
  </font></p>
<p align="right"><font face="Arial" size=6 color= #FF0000> Number (1/2)  :
    <input name="number" type="number" class="style1" value="" size="30" row="1">
  </br>
</font></p>
<p align="right"><font face="Arial" size=6 color= #FF0000> Person(1/2/3) :
    <input name="person" type="number" class="style1" value="" size="30" row="1">
  </br>
</font></p>
<p align="right"><font face="Arial" size=6 color= #FF0000> Bangla  Word  :
    <input name="bangla" type="text" class="style1" dir="ltr" lang="SutonnyMJ" size="30" row="1">
  </br>
</font></p>
<p align="right"><font face="Arial" size=6 color= #FF0000> plural(English)  Word  :
    <input name="penglish" type="text" class="style1" value="" size="30" row="1">
  </br>
</font></p>
<p align="right"><font face="Arial" size=6 color= #FF0000> Plural(Bangla)   Word  :
    <input name="pbangla" type="text" class="style1" dir="ltr" lang="SutonnyMJ" size="30" row="1">
  </br>
</font></p>
<p align="right"><font color="#FF0000"><strong>(if no plural then textarea should be null)</br>
  <br>
  </strong></font><font color="#CC66FF"><strong>
  <input name="Submit" type="submit" value="OK">
</strong></font></p>
</body>
</html>