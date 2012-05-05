<html>
<head>
<title>
Verb Entry
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<style type="text/css">
<!--
body {
	background-image: url();
	background-color: #33FF66;
}
.style1 {color: #000000}
.style6 {font-size: 18px}
.style8 {
	color: #CC0099;
	font-weight: bold;
	font-style: italic;
}
.style9 {font-weight: bold; color: #CC0099;}
.style10 {font-size: 18px; font-weight: bold; color: #CC0099;}
-->
</style>

 <form method="POST" action="verd.php">
 <input type="hidden" name="posted" value="true">

<p align="right" class="style9"><span class="style6">Present Form : 
  </span>
  <input name="present" type="text" value="" size="30"  row="1">
</p>

<p align="right" class="style10"> Past Form :   
  <input name="past" type="text" value="" size="30"  row="1">
</p>
<p align="right" class="style10">Pastperticiple Form : 
  <input name="Pastperticiple" type="text" value="" size="30"  row="1">
</p>
<p align="right" class="style10">Verb + ing :
  <input name="presenting" type="text" value="" size="30"  row="1">
</p>
<p align="right" class="style10">Verb in 3rd person : 
  <input name="presents" type="text" value="" size="30"  row="1">
</p>
<p align="right" class="style10">Bangla meaning :
  <input name="bangla" type="text" value="" size="30"  row="1">
</p>
<p align="right" class="style9"><span class="style6">Bangla meaning in use as verb present indifinite form(1st person) :</span>
  <input name="pbangla" type="text" value="" size="30"  row="1">
</p>
<p align="right" class="style1">
  <input type="submit" name="Submit" value="Submit">
</p>
<p align="right" class="style1">&nbsp;</p>
<?php
if(isset($_POST['posted']))
{
$present=$_POST['present'];
$past=$_POST['past'];
$pastperticiple=$_POST['Pastperticiple'];
$presentcon=$_POST['presenting'];
$presents=$_POST['presents'];
$bangla = $_POST['bangla'];
$pbangla = $_POST['pbangla'];
$k=strlen($present);



if(strlen($present)!=0 && strlen($past)!=0 && strlen($pastperticiple)!=0 && strlen($presentcon)!=0 && strlen($presents)!=0 && strlen($bangla)!=0 && strlen($pbangla)!=0)
{

$dbhost='localhost';
$dbusername='root';
$dbuserpossword='shakilcuet';
$dbname='englishtobangla';

$link_id=mysql_connect($dbhost,$dbusername,$dbuserpossword);
mysql_select_db($dbname,$link_id);
$ty="INSERT INTO verb VALUES('$present' ,'$past','$pastperticiple','$presentcon','$presents')";
$result=mysql_query($ty,$link_id);

$ty="INSERT INTO noun VALUES('$presentcon' ,'1','3','$bangla')";
$result=mysql_query($ty,$link_id);


$prein1=$pbangla;
///w B
$prein2=$prein1;
$prein3=$prein1;
$k=strlen($prein1);

for($i=$k-1;$i>=0;$i--)
{
if($prein1[$i]=='w')
{
$prein2[$i]='†';
$prein3[$i]='†';
$prein2=$prein2."v";
break;
}
if($prein1[$i]=='B')
{
$prein2[$i]='I';
$prein3[$i]='q';
break;
}
}

$preco1=$prein1 . "‡ZwQ";
$preco2=$prein1 . "‡Z‡Qv";
$preco3=$prein1 . "‡Z‡Q";
$prepe1=$prein1 . "qvwQ";
$prepe2=$prein1 . "qv‡Qv";
$prepe3=$prein1 . "qv‡Q";
$prepc1=$preco1;
$prepc2=$preco2;
$prepc3=$preco3;

$pasin1=$prein1;
$pasin1 = $pasin1 . "qvwQjvg" ; 

$p=strlen($pasin1);
$pasin2=$pasin1;
$p--;
$tp="";
for($i=0;$i<$p;$i++)
$tp=$tp . $pasin2[$i];
$pasin2=$tp;
$pasin3=$pasin2;
$p--;
$tp="";
for($i=0;$i<$p;$i++)
$tp=$tp . $pasin3[$i];
$pasin3=$tp;
    ////qv †Z
$pasco1=$pasin1;
$pasco2=$pasin2;
$pasco3=$pasin3;
$k=strlen($pasin1);

for($i=0;$i<$k-1;$i++)
if($pasin1[$i]=='q'&&$pasin1[$i+1]=='v')
{
$pasco1[$i]='†';$pasco1[$i+1]='Z';
$pasco2[$i]='†';$pasco2[$i+1]='Z';
$pasco3[$i]='†';$pasco3[$i+1]='Z';
}

$paspe1=$pasin1;
$paspe2=$pasin2;
$paspe3=$pasin3;
$paspc1=$pasco1;
$paspc2=$pasco2;
$paspc3=$pasco3;
$futin1=$prein1 . "e";
$futin2=$prein1 . "ev";
$futin3=$prein1 . "‡e";
$futco1=$prein1 . "‡Z _vwKe";
$futco2=$prein1 . "‡Z _vwKev";
$futco3=$prein1 . "‡Z _vwK‡e";
$futpe1=$prein1 . "qv _vwKe";
$futpe2=$prein1 . "qv _vwKev"; 
$futpe3=$prein1 . "qv _vwK‡e";
$futpc1=$futco1;
$futpc2=$futco2;
$futpc3=$futco3;

$ty="INSERT INTO verbbangla VALUES('$present','$prein1' ,'$prein2','$prein3','$preco1' ,'$preco2','$preco3','$prepe1' ,'$prepe2','$prepe3','$prepc1' ,'$prepc2','$prepc3','$pasin1' ,'$pasin2','$pasin3','$pasco1' ,'$pasco2','$pasco3','$paspe1' ,'$paspe2','$paspe3','$paspc1' ,'$paspc2','$paspc3','$futin1' ,'$futin2','$futin3','$futco1' ,'$futco2','$futco3','$futpe1' ,'$futpe2','$futpe3','$futpc1' ,'$futpc2','$futpc3')";
$result=mysql_query($ty,$link_id);
///vIqv
$k=strlen($bangla);
$xy=$bangla;
if($xy[$k-4]=='v'&& $xy[$k-3]=='I'&& $xy[$k-2]=='q'&& $xy[$k-1]=='v')
{
$tp="";
for($i=0;$i<$k-4;$i++)
$tp=$tp . $xy[$i];
$xy=$tp;
$xy= "‡" . $xy;
}
else
{
$tp="";
for($i=0;$i<$k-1;$i++)
$tp=$tp . $xy[$i];
$xy=$tp;
}

$ty="INSERT INTO inactiveverb VALUES('$present' ,'$xy')";
$result=mysql_query($ty,$link_id);


mysql_close($link_id);
//////
}
}
?>
</html>