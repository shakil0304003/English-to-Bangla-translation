<html>

<head>
  <title>English to bangla translator</title>
  <style type="text/css">
<!--
.style5 {font-size: 36px}
body {
	background-color: #7FBFFF;
	background-image: url();
}
.style6 {color: #FF0000}
.style7 {color: #993333}
-->
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>



<?php
 $english="i am shakil.";
 $bangla="Avwg mvwKj.";
 $english_para = $english;
 $bangla_para = $bangla;
 $sa = ""; 
 $si = "";
 $flag=0;
 $n=0;
 $stru = 0; 
if(isset($_POST['posted']))
{
$sa = ""; 
$si = "";
$flag=0;//0
$n=0;//0
$stru = 0;
$english_para=$_POST['ENGLISH'];
$english="";
$le=strlen($english_para);
$bangla_para="";


for($i=0;$i<$le;$i++)
{
if($english_para[$i]=='.'||$english_para[$i]=='?')
{

$bangla="";
require_once('class.proc.php');
$obj = new proc();
$obj->work();

if(strlen($bangla)!=0)
{
$bangla_para=$bangla_para . $bangla;

if($english_para[$i]=='.')
{
$bangla_para=$bangla_para . "| ";
}
else if($english_para[$i]=='?')
{
$bangla_para=$bangla_para . " ";
}
 
}
else
{
$rr=$n;
require_once('class.notfound.php');
$obj1 = new notfound();
$obj1->work();
if($rr==$n)
{
$stru=1;
$si=$si . " " .$english;

if($english_para[$i]=='.')
$si=$si . " .";
else if($english_para[$i]=='?')
$si=$si . " ?";
}
if($n>0)
$flag=1;
}
$english="";
}
else if($english_para[$i]!=' ' || strlen($english)!=0)
{

$english=$english . $english_para[$i];

}

}


//<A HREF="mailto:tstauffer@aol.com">Send me e-mail</A>

///////////////////////////////////class a work handel

////////// if ar }
}

?>
<form method="POST" action="2.php">
<input type="hidden" name="posted" value="true">

<p><span class="style5"><font face="Arial" size=5 color = orange>
English Sentence : 
</font></span></p>
<p align="center">

  <textarea name="ENGLISH" cols="40" class="style5" title="false" row="10" value="sdfsd" font="Tunga" >
<?php
  print "$english_para";
  ?>
</textarea>  
  <br>
  <input name="submit" type="submit" class="style5" value="OK">
</p>
<p align="left" class="style5">
  <font face="Arial" size = 6 ><span class="style7">Bangla Sentence :</span></font><font face="Arial" size = 6 color = green > </br>
  </font>
<font face="SutonnyMJ" size=7 color = blue>
<?php
  print "$bangla_para";
  ?>
</font>
</br>
<font face="Arial" size=4 color = black>
<?php
if($flag==1)
{
print ("The following words are not in dictonary : <br>");
}
?>
</font>
<font face="Arial" size=4 color = red>
<?php
if($flag==1)
{
print ("$sa<br>");
}
?>
</font>
<font face="Arial" size=4 color = black>
<?php
if($stru==1)
{
print ("The following sentences are not in any kind of grammatical rules : <br>");
}
?>
</font>
<font face="Arial" size=4 color = red>
<?php
if($stru==1)
{
print ("$si<br>");
}
?>
</font>
<p align="right" class="style6">
<font face="Arial" size=4 color= black>
<A HREF="entry.php">Word Entry</A></br>
</p>
<p align="right" class="style6"><A HREF="http://localhost/phpmyadmin/">Data base</A></br>
</p>
<p align="right" class="style6"><A HREF="help.php">Help</A></br>
</p>
<p align="right" class="style6"><A HREF="cradit.php">Credit</A></br>
</p>
<span class="style6"></font></span>
</body>
</html>