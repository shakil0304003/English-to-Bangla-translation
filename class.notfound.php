<?php
class notfound{

private $english_n;
private $english_ntemp;
private $t;
private $x;
private $bangla_word;
private $bangla_wordtemp;
private $dbhost;
private $dbusername;
private $dbuserpossword;
private $dbname;
private $link_id;
private $yes;
private $bangla_transfer;
private $person;
private $number;
private $n;
private $nn;
private $sub;

public function work()
{
///$GLOBALS["flag"]=1;

$this->divide();

$this->dbhost='localhost';
$this->dbusername='root';
$this->dbuserpossword='shakilcuet';
$this->dbname='englishtobangla';
$this->link_id=mysql_connect($this->dbhost,$this->dbusername,$this->dbuserpossword);
mysql_select_db($this->dbname,$this->link_id);


for($ii=0;$ii<$this->english_n;$ii++)
{
 $yes=0;
 $table="prenoun";
 $ty=$this->bangla_word[$ii];
 $que="SELECT bangla FROM " . $table . " WHERE english = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 if($yes==0)
 {
 $table="extension";
 $ty=$this->bangla_word[$ii];
 $que="SELECT banglaword FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }
 if($yes==0)
 {
 $table="inactiveverb";
 $ty=$this->bangla_word[$ii];
 $que="SELECT bangla FROM " . $table . " WHERE english = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }
 if($yes==0)
 {
 $table="noun";
 $ty=$this->bangla_word[$ii];
 $que="SELECT banglaword FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }
 if($yes==0)
 {
 $table="prenoun";
 $ty=$this->bangla_word[$ii];
 $que="SELECT bangla FROM " . $table . " WHERE english = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }
 
 if($yes==0)
 {
 $table="question";
 $ty=$this->bangla_word[$ii];
 $que="SELECT bangla FROM " . $table . " WHERE english = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }

 if($yes==0)
 {
 $table="verb";
 $ty=$this->bangla_word[$ii];
 $que="SELECT present FROM " . $table . " WHERE present = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }
 
 if($yes==0)
 {
 $table="verb";
 $ty=$this->bangla_word[$ii];
 $que="SELECT past FROM " . $table . " WHERE past = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }

 if($yes==0)
 {
 $table="verb";
 $ty=$this->bangla_word[$ii];
 $que="SELECT pastperticiple FROM " . $table . " WHERE pastperticiple = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }
 
 if($yes==0)
 {
 $table="verb";
 $ty=$this->bangla_word[$ii];
 $que="SELECT presentcontinuous FROM " . $table . " WHERE presentcontinuous = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }

 if($yes==0)
 {
 $table="verb";
 $ty=$this->bangla_word[$ii];
 $que="SELECT present3 FROM " . $table . " WHERE present3 = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
 {
 $yes=1; 
 }
 }

 if($yes==0)
  {
  $nn=$GLOBALS["n"];
  $GLOBALS["sa"]=$GLOBALS["sa"] ." ". $ty;
  $GLOBALS["n"]++;

  } 
//////////////////////////
}

mysql_close($this->link_id);

}


////////////////////////////////////divide function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

public function divide()     
{
$this->english_n=0;
$this->t=0;
$this->x=0;
$this->bangla_word=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");

$english=$GLOBALS["english"];

$this->x=strlen($english);
$this->english_n=0;
$this->t=0;

for($i=0;$i<$this->x;$i++)
{

if($english[$i]==' ')
{
if($i-1<0||($english[$i-1]!=' '&&$english[$i-1]!=','))
{$this->english_n++;
$this->bangla_word[$this->english_n]="a";
$this->t=0;
}
}

else if(($english[$i]>='a'&&$english[$i]<='z')||($english[$i]>='A'&&$english[$i]<='Z'))
{
if($english[$i]>='a'&&$english[$i]<='z')
$this->bangla_word[$this->english_n][$this->t]=$english[$i];
else
{
if($english[$i]=='A')
$this->bangla_word[$this->english_n][$this->t]='a';
else if($english[$i]=='B')
$this->bangla_word[$this->english_n][$this->t]='b';
else if($english[$i]=='C')
$this->bangla_word[$this->english_n][$this->t]='c';
else if($english[$i]=='D')
$this->bangla_word[$this->english_n][$this->t]='d';
else if($english[$i]=='E')
$this->bangla_word[$this->english_n][$this->t]='e';
else if($english[$i]=='F')
$this->bangla_word[$this->english_n][$this->t]='f';
else if($english[$i]=='G')
$this->bangla_word[$this->english_n][$this->t]='g';
else if($english[$i]=='H')
$this->bangla_word[$this->english_n][$this->t]='h';
else if($english[$i]=='I')
$this->bangla_word[$this->english_n][$this->t]='i';
else if($english[$i]=='J')
$this->bangla_word[$this->english_n][$this->t]='j';
else if($english[$i]=='K')
$this->bangla_word[$this->english_n][$this->t]='k';
else if($english[$i]=='L')
$this->bangla_word[$this->english_n][$this->t]='l';
else if($english[$i]=='M')
$this->bangla_word[$this->english_n][$this->t]='m';
else if($english[$i]=='N')
$this->bangla_word[$this->english_n][$this->t]='n';
else if($english[$i]=='O')
$this->bangla_word[$this->english_n][$this->t]='o';
else if($english[$i]=='P')
$this->bangla_word[$this->english_n][$this->t]='p';
else if($english[$i]=='Q')
$this->bangla_word[$this->english_n][$this->t]='q';
else if($english[$i]=='R')
$this->bangla_word[$this->english_n][$this->t]='r';
else if($english[$i]=='S')
$this->bangla_word[$this->english_n][$this->t]='s';
else if($english[$i]=='T')
$this->bangla_word[$this->english_n][$this->t]='t';
else if($english[$i]=='U')
$this->bangla_word[$this->english_n][$this->t]='u';
else if($english[$i]=='V')
$this->bangla_word[$this->english_n][$this->t]='v';
else if($english[$i]=='W')
$this->bangla_word[$this->english_n][$this->t]='w';
else if($english[$i]=='X')
$this->bangla_word[$this->english_n][$this->t]='x';
else if($english[$i]=='Y')
$this->bangla_word[$this->english_n][$this->t]='y';
else if($english[$i]=='Z')
$this->bangla_word[$this->english_n][$this->t]='z';
}

$this->t++;
}
else if($english[$i]==',')
{
if($english[$i-1]!=' ')
$this->english_n++;
$this->bangla_word[$this->english_n]="a";
$this->t=0;
$this->bangla_word[$this->english_n][$this->t]=$english[$i];
$this->t++;
$this->english_n++;
$this->bangla_word[$this->english_n]="a";
$this->t=0;
}
else
{
$this->bangla_word[$this->english_n][$this->t]=$english[$i];
$this->t++;
}
}
if($this->t!=0)
{
$this->english_n++;
}


}     
/////////////////////////////////divide function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\





};
?>