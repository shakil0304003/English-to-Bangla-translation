<?php
class proc{
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
////////////////////////////////////work function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function work()
{
$this->dbhost='localhost';
$this->dbusername='root';
$this->dbuserpossword='shakilcuet';
$this->dbname='englishtobangla';

$this->link_id=mysql_connect($this->dbhost,$this->dbusername,$this->dbuserpossword);
mysql_select_db($this->dbname,$this->link_id);

$this->yes=0;

$this->divide();
if($this->yes==0)
{
$this->complex();
}
if($this->yes==0)
{
for($j=0;$j<$this->english_ntemp;$j++)
$this->bangla_word[$j]=$this->bangla_wordtemp[$j];
$this->english_n=$this->english_ntemp;
$this->compound();
}
if($this->yes==0)
{
for($j=0;$j<$this->english_ntemp;$j++)
$this->bangla_word[$j]=$this->bangla_wordtemp[$j];
$this->english_n=$this->english_ntemp;
$this->assertive();
}
if($this->yes==0)
{for($j=0;$j<$this->english_ntemp;$j++)
 $this->bangla_word[$j]=$this->bangla_wordtemp[$j];
 $this->english_n=$this->english_ntemp;
 $this->interrogative();
}

if($this->yes==0)
{for($j=0;$j<$this->english_ntemp;$j++)
 $this->bangla_word[$j]=$this->bangla_wordtemp[$j];
 $this->english_n=$this->english_ntemp;
 $this->imperative();
}


$GLOBALS["bangla"] = "" ;

if($this->yes==1)
{
 $this->many();
for($i=0;$i<$this->nn;$i++)
if($this->bangla_word[$i]=="wU")
{
$ty=$this->bangla_word[$i];
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$i+1]=$ty;
$i++;
}
for($i=0;$i<$this->nn;$i++)
if($this->bangla_word[$i]=="‡Z")
{
$ty=$this->bangla_word[$i];
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$i+1]=$ty;
$i++;
}

if($this->bangla_word[$this->nn-1]=="nq")
$this->nn--;
else if($this->bangla_word[$this->nn-1]=="?" && $this->bangla_word[$this->nn-2]=="nq")
{
$this->bangla_word[$this->nn-2]=$this->bangla_word[$this->nn-1];
$this->nn--;
}

$this->beforeafter();

for($i=0;$i<$this->nn;$i++)
{
if($i==0)
$GLOBALS["bangla"]=$GLOBALS["bangla"] . $this->bangla_word[$i];
else if($this->bangla_word[$i]!="wU"&&$this->bangla_word[$i]!="‡Z")
$GLOBALS["bangla"]=$GLOBALS["bangla"] . " " . $this->bangla_word[$i];
else
{
if($this->bangla_word[$i]!="wU"||($this->bangla_word[$i]=="wU"&&$this->bangla_word[$i-1]!="‡Z"))
{
if($this->bangla_word[$i]=="‡Z")
$GLOBALS["bangla"]=$GLOBALS["bangla"] . "[ G / ‡Z ]" ; 
else
$GLOBALS["bangla"]=$GLOBALS["bangla"] . $this->bangla_word[$i];
}
}
}
mysql_close($this->link_id);
}
}
////////////////////////////////////work function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
///////////////////////////////////assertive function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function assertive()
{
if($this->yes==0)
{
for($j=0;$j<$this->english_ntemp;$j++)
$this->bangla_word[$j]=$this->bangla_wordtemp[$j];
$this->english_n=$this->english_ntemp;
$this->affirmative();
}
if($this->yes==0)
{
for($j=0;$j<$this->english_ntemp;$j++)
$this->bangla_word[$j]=$this->bangla_wordtemp[$j];
$this->english_n=$this->english_ntemp;
$this->negative();
}
}
////////////////////////////////////assertive function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
///////////////////////////////////affirmative function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function affirmative()
{
if($this->english_n == 1)
$this->one_word();

///////perfectcontinuous//////////////////////
if($this->yes==0)
$this->futureperfectcontinuous();
if($this->yes==0)
$this->pastperfectcontinuous();
if($this->yes==0)
$this->presentperfectcontinuous();


////////////perfect///////////////////////////
if($this->yes==0)
$this->futureperfect();
if($this->yes==0)
$this->pastperfect();
if($this->yes==0)
$this->presentperfect();

//////////////continuous//////////////////////
if($this->yes==0)
$this->futurecontinuous();
if($this->yes==0)
$this->pastcontinuous();
if($this->yes==0)
$this->presentcontinuous();


////////////////indefinite//////////////////
if($this->yes==0)
$this->futureindefinite();
if($this->yes==0)
$this->pastindefinite();
if($this->yes==0)
$this->presentindefinite();

}
////////////////////////////////////affirmative function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
///////////////////////////////////negative function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function negative()
{
for($i=0;$i<$this->english_n;$i++)
if($this->bangla_word[$i]=="not"||$this->bangla_word[$i]=="no")
{
for($j=$i;$j<$this->english_n;$j++)
$this->bangla_word[$j]=$this->bangla_word[$j+1];
$this->english_n--;

if($this->bangla_word[$i-1]=="do"||$this->bangla_word[$i-1]=="does"||$this->bangla_word[$i-1]=="did")
{
$kp=0;
if($this->bangla_word[$i-1]=="did")
$kp=1;
for($j=$i-1;$j<$this->english_n;$j++)
$this->bangla_word[$j]=$this->bangla_word[$j+1];
$this->english_n--;
if($kp==1)
{
$ty=$this->bangla_word[$i-1];
$table="verb";
$que="SELECT past FROM " . $table . " WHERE present = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($ii=0;$ii<mysql_num_rows($result);$ii++)
{
 $this->bangla_word[$i-1]=mysql_result($result,$ii,"past");
}
}
}

$this->affirmative();

if($this->yes==1)
{
$this->bangla_word[$this->nn]="bv";
$this->nn++;
}


break;
}
}
////////////////////////////////////negative function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
///////////////////////////////////interrogative  function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function interrogative()
{
$question="wK";
$start=0;
$flag=0;
$ty=$this->bangla_word[0];
$table="question";
$que="SELECT bangla FROM " . $table . " WHERE english = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($ii=0;$ii<mysql_num_rows($result);$ii++)
{
 $question=mysql_result($result,$ii,"bangla");
 $start++;
}
if($this->bangla_word[$start]=="do"||$this->bangla_word[$start]=="does"||$this->bangla_word[$start]=="did")
{
$ll=0;
if($this->bangla_word[$start]=="did")
$ll=1;

$start++;
for($i=0;$i<$this->english_n-$start;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+$start];
$this->english_n=$this->english_n-$start;
if($ll==1)
{
for($i=0;$i<$this->english_n;$i++)
{
$ty=$this->bangla_word[$i];
$table="verb";
$que="SELECT past FROM " . $table . " WHERE present = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($ii=0;$ii<mysql_num_rows($result);$ii++)
{
 $this->bangla_word[$i]=mysql_result($result,$ii,"past");
 $ll=0;
}
if($ll==0)
break;
}
}
}
else
{
for($i=0;$i<$this->english_n-$start;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+$start];
$this->english_n=$this->english_n-$start;
$tty=$this->bangla_word[0];

switch($tty)
{
case "am" :
case "is" :
case "are" :
case "have" :
case "has" :
case "was" :
case "were" :
case "had" :
case "shall" :
case "will" :
             for($i=0;$i<$this->english_n-1;$i++)
             $this->bangla_word[$i]=$this->bangla_word[$i+1];
             $this->english_n=$this->english_n-1;
             
             $this->verbstart();
              
             if($this->n!=0)
             { 
             for($i=$this->english_n;$i>=$this->n;$i--)
             $this->bangla_word[$i+1]=$this->bangla_word[$i];
             $this->bangla_word[$this->n]=$tty;
             $this->english_n=$this->english_n+1;
             }
             else
             {
              for($i=$this->english_n;$i>=$this->n;$i--)
              $this->bangla_word[$i+2]=$this->bangla_word[$i];
              $this->bangla_word[$this->n+1]=$tty;
              $this->bangla_word[$this->n]="he";
              $this->english_n=$this->english_n+2;
              $flag=1;
             }
             $start++; 
             break; 
}

}

if($start>=1)
{
$this->verbstart();
if($this->n==0)
{
              for($i=$this->english_n;$i>=$this->n;$i--)
              $this->bangla_word[$i+1]=$this->bangla_word[$i];
              $this->bangla_word[$this->n]="he";
              $this->english_n=$this->english_n+1;
              $flag=1;
           
}
if($this->yes==0)
$this->negative();
if($this->yes==0)
$this->affirmative();
if($this->yes==1)
{
for($i=$this->nn;$i>$sub+1;$i--)
$this->bangla_word[$i]=$this->bangla_word[$i-1];
$this->bangla_word[$sub+1]=$question;
$this->nn++;
$this->bangla_word[$this->nn]="?";
$this->nn++;

if($flag==1)
{
for($i=0;$i<$this->nn;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->nn--;
}
}

}

}
///////////////////////////////////interrogative  function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////imperative function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function imperative()
{
 for($i=$this->english_n;$i>0;$i--)
 $this->bangla_word[$i]=$this->bangla_word[$i-1];
 $this->bangla_word[0]="you";
 $this->english_n++;
  
 if($this->yes==0)
 $this->negative();
 if($this->yes==0)
 $this->affirmative();
 if($this->yes==1)
 { for($i=0;$i<$this->nn-1;$i++)
   $this->bangla_word[$i]=$this->bangla_word[$i+1];
   $this->nn--;
  }

}
////////////////////////////////////imperative function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////////divide function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

public function divide()     
{
$this->english_n=0;
$this->t=0;
$this->x=0;
$this->bangla_word=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->bangla_wordtemp=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");

$english=$GLOBALS["english"];

$this->x=strlen($english);
$this->english_n=0;
$this->t=0;

for($i=0;$i<$this->x;$i++)
{

if($english[$i]==' ')
{
if($i-1<0||($english[$i-1]!=' '&&$english[$i-1]!=','))
{
$this->english_n++;
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

for($i=0;$i<$this->english_n;$i++)
if($this->bangla_word[$i]=="in")
$this->bangla_word[$i]="to";

for($i=0;$i<$this->english_n;$i++)
$this->bangla_wordtemp[$i]=$this->bangla_word[$i];
$this->english_ntemp=$this->english_n;

}     
/////////////////////////////////divide function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function one_word\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function one_word()
{
 $table="noun";
 $ty=$this->bangla_word[0];
 $que="SELECT banglaword FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[0] = mysql_result($result,$i,"banglaword");
 $this->n=1;
 $this->nn=1;
 $this->yes=1;
}
}
////////////////////////////////one_word function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


////////////////////////////////starting function presentindefinite\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function presentindefinite()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();

$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $ty=$this->bangla_word[$this->n];
 $que="SELECT present FROM " . $table . " WHERE present = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{
 $zx=1;
 $verb=$this->nn;
 $this->n++;
 $this->nn++;
}

if($zx==0)
{
 $zx=0;
 $table="verb";
 $ty=$this->bangla_word[$this->n];
 $que="SELECT present FROM " . $table . " WHERE present3 = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{
 $this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $verb=$this->nn;
 $this->n++;
 $this->nn++;
 break;
}

}


if($zx==1)
{
 $table="verbbangla";
 $person1="prein1";
 if($this->person[$subject]==2)
 $person1="prein2";
 if($this->person[$subject]==3)
 $person1="prein3";

 $ty=$this->bangla_word[$this->n-1];
 
 if($ty=="have")
 $this->have($subject);
 
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
}
$this->extension();

if($this->yes==1)
{
$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
$this->bangla_word[$i]=$this->bangla_transfer[$i];
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}

}

}

}
////////////////////////////////presentindefinite function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function presentcontinuous\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function presentcontinuous()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if($this->bangla_word[$this->n]=="am"||$this->bangla_word[$this->n]=="is"||$this->bangla_word[$this->n]=="are")
{
 $this->n++;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
$que="SELECT present FROM " . $table . " WHERE presentcontinuous = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}

if($zx==1)
{
 $table="verbbangla";
 $person1="preco1";
 if($this->person[$subject]==2)
 $person1="preco2";
 if($this->person[$subject]==3)
 $person1="preco3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);

 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
 
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
{$this->bangla_word[$i]=$this->bangla_transfer[$i];
}
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}
}
////////////////////////////////presentcontinuous function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function presentperfect\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function presentperfect()
{

$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}

 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if($this->bangla_word[$this->n]=="have"||$this->bangla_word[$this->n]=="has")
{
 $this->n++;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
 $que="SELECT present FROM " . $table . " WHERE pastperticiple = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}



if($zx==1)
{
 $table="verbbangla";
 $person1="prepe1";
 if($this->person[$subject]==2)
 $person1="prepe2";
 if($this->person[$subject]==3)
 $person1="prepe3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
$this->bangla_word[$i]=$this->bangla_transfer[$i];
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}
}
////////////////////////////////presentperfect function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

////////////////////////////////starting function presentperfectcontinuous\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function presentperfectcontinuous()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if(($this->bangla_word[$this->n]=="have"||$this->bangla_word[$this->n]=="has")&& $this->bangla_word[$this->n+1]=="been")
{
 $this->n+=2;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
$que="SELECT present FROM " . $table . " WHERE presentcontinuous = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}

if($zx==1)
{
 $table="verbbangla";
 $person1="prepc1";
 if($this->person[$subject]==2)
 $person1="prepc2";
 if($this->person[$subject]==3)
 $person1="prepc3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
 
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
{$this->bangla_word[$i]=$this->bangla_transfer[$i];
}
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}

}

////////////////////////////////presentperfectcontinuous function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function pastindefinite\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function pastindefinite()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $ty=$this->bangla_word[$this->n];
 $que="SELECT present FROM " . $table . " WHERE past = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{
 $zx=1;
 $this->bangla_word[$this->n]=mysql_result($result,$i,$present);
 $verb=$this->nn;
 $this->n++;
 $this->nn++;
}



if($zx==1)
{
 $table="verbbangla";
 $person1="pasin1";
 if($this->person[$subject]==2)
 $person1="pasin2";
 if($this->person[$subject]==3)
 $person1="pasin3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
$this->bangla_word[$i]=$this->bangla_transfer[$i];
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}

}

}

}
////////////////////////////////pastindefinite function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function pastcontinuous\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function pastcontinuous()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if($this->bangla_word[$this->n]=="was"||$this->bangla_word[$this->n]=="were")
{
 $this->n++;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
$que="SELECT present FROM " . $table . " WHERE presentcontinuous = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}

if($zx==1)
{
 $table="verbbangla";
 $person1="pasco1";
 if($this->person[$subject]==2)
 $person1="pasco2";
 if($this->person[$subject]==3)
 $person1="pasco3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
 
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
{$this->bangla_word[$i]=$this->bangla_transfer[$i];
}
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}
}
////////////////////////////////pastcontinuous function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function pastperfect\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function pastperfect()
{

$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}

 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if($this->bangla_word[$this->n]=="had")
{
 $this->n++;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
 $que="SELECT present FROM " . $table . " WHERE pastperticiple = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}



if($zx==1)
{
 $table="verbbangla";
 $person1="paspe1";
 if($this->person[$subject]==2)
 $person1="paspe2";
 if($this->person[$subject]==3)
 $person1="paspe3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
$this->bangla_word[$i]=$this->bangla_transfer[$i];
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}
}
////////////////////////////////pastperfect function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function pastperfectcontinuous\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function pastperfectcontinuous()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if(($this->bangla_word[$this->n]=="had")&& $this->bangla_word[$this->n+1]=="been")
{
 $this->n+=2;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
$que="SELECT present FROM " . $table . " WHERE presentcontinuous = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}

if($zx==1)
{
 $table="verbbangla";
 $person1="paspc1";
 if($this->person[$subject]==2)
 $person1="paspc2";
 if($this->person[$subject]==3)
 $person1="paspc3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
 
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
{$this->bangla_word[$i]=$this->bangla_transfer[$i];
}
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}

}

////////////////////////////////pastperfectcontinuous function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function futureindefinite\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function futureindefinite()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{ $zx=0;
 if($this->bangla_word[$this->n]=="shall"||$this->bangla_word[$this->n]=="will")
 {$zx=1;
  $this->n++;
  }
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $ty=$this->bangla_word[$this->n];
 $que="SELECT present FROM " . $table . " WHERE present = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{
 $zx=1;
 $this->bangla_word[$this->n]=mysql_result($result,$i,$present);
 $verb=$this->nn;
 $this->n++;
 $this->nn++;
}



if($zx==1)
{
 $table="verbbangla";
 $person1="futin1";
 if($this->person[$subject]==2)
 $person1="futin2";
 if($this->person[$subject]==3)
 $person1="futin3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
$this->bangla_word[$i]=$this->bangla_transfer[$i];
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}

}

}

}
////////////////////////////////futureindefinite function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function futurecontinuous\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function futurecontinuous()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if(($this->bangla_word[$this->n]=="will"||$this->bangla_word[$this->n]=="shall")&&$this->bangla_word[$this->n+1]=="be")
{
 $this->n++;
 $this->n++;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
$que="SELECT present FROM " . $table . " WHERE presentcontinuous = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}

if($zx==1)
{
 $table="verbbangla";
 $person1="futco1";
 if($this->person[$subject]==2)
 $person1="futco2";
 if($this->person[$subject]==3)
 $person1="futco3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
 
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
{$this->bangla_word[$i]=$this->bangla_transfer[$i];
}
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}
}
////////////////////////////////futurecontinuous function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function futureperfect\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function futureperfect()
{

$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}

 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if(($this->bangla_word[$this->n]=="shall"||$this->bangla_word[$this->n]=="will")&&$this->bangla_word[$this->n+1]=="have")
{
 $this->n++;
 $this->n++;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
 $que="SELECT present FROM " . $table . " WHERE pastperticiple = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}



if($zx==1)
{
 $table="verbbangla";
 $person1="futpe1";
 if($this->person[$subject]==2)
 $person1="futpe2";
 if($this->person[$subject]==3)
 $person1="futpe3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
$this->bangla_word[$i]=$this->bangla_transfer[$i];
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}
}
////////////////////////////////futureperfect function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////starting function futureperfectcontinuous\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function futureperfectcontinuous()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->person=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$this->prenoun();
$person=0;

 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
if($zx==1)
{
if(($this->bangla_word[$this->n]=="shall"||$this->bangla_word[$this->n]=="will")&& $this->bangla_word[$this->n+1]=="have"&& $this->bangla_word[$this->n+2]=="been")
{
 $this->n+=3;
}
else
$zx=0;
}
$this->aftersubjectbeforeverb();
if($zx==1)
{
 $zx=0;
 $table="verb";
 $verb=$this->nn;
 $ty=$this->bangla_word[$this->n];
$que="SELECT present FROM " . $table . " WHERE presentcontinuous = " . "'$ty'";
$result=mysql_query($que,$this->link_id);
for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_word[$this->n]=mysql_result($result,$i,"present");
 $zx=1;
 $this->n++;
 $this->nn++;
 break;
}

if($zx==1)
{
 $table="verbbangla";
 $person1="futpc1";
 if($this->person[$subject]==2)
 $person1="futpc2";
 if($this->person[$subject]==3)
 $person1="futpc3";
 
 $ty=$this->bangla_word[$this->n-1];
 if($ty=="have")
 $this->have($subject);
 $que="SELECT ".$person1." FROM " . $table . " WHERE english = " . "'$ty'";
 
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn-1] = mysql_result($result,$i,$person1);
 
}
$this->extension();

if($this->yes==1)
{$this->sub=$subject;
for($i=0;$i<$this->nn;$i++)
{$this->bangla_word[$i]=$this->bangla_transfer[$i];
}
$ty=$this->bangla_word[$verb];
for($i=$verb;$i<$this->nn-1;$i++)
$this->bangla_word[$i]=$this->bangla_word[$i+1];
$this->bangla_word[$this->nn-1]=$ty;
}
}
}

}

////////////////////////////////futureperfectcontinuous function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

////////////////////////////////starting function extension\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

public function extension()
{

$verb = $this->bangla_word[$this->n-1];
$shinthiea = 0;

while($this->n<$this->english_n)
{
$tm=0;
$jj=0;
for($j=($this->english_n)-1;$j>=$this->n;$j--)
{
 $jj=$j;
 $table="extension";
 $ty=$this->bangla_word[$this->n];
 for($k=$this->n+1;$k<=$j;$k++)
 $ty=$ty." ".$this->bangla_word[$k];

 $que="SELECT banglaword FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $tm=1;
 }
if($tm==1)
{
break;
}

if($tm==0)
{
 $table="noun";
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{
 $this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 if($shinthiea==0 && $this->person[$this->n]==3 && $verb!="am" && $verb!="are" && $verb!="be" && $verb!="have" && $verb!="become" && $verb!="come" && $verb!="go" && $verb!="fly" && $verb!="sit" && $verb!="write")
 {
  $this->bangla_transfer[$this->nn + 1] = "[/‡K]";
  $this->nn++;
 }
 else if($shinthiea==0 && $this->person[$this->n]==3 && $verb=="sit")
  {
  $this->bangla_transfer[$this->nn] = $this->bangla_transfer[$this->nn]."‡Z";
  }
  $tm=1; 
}


}


if($tm==1)
{
break;
}

if($tm==0)
{
 $table="inactiveverb";
 $que="SELECT bangla FROM " . $table . " WHERE english = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{
 $this->bangla_transfer[$this->nn] = mysql_result($result,$i,"bangla");
 if($this->bangla_transfer[$this->nn-1]!="‡Z")
 $this->bangla_transfer[$this->nn]=$this->bangla_transfer[$this->nn]."‡Z";
 $tm=1; 
}


}


if($tm==1)
{
break;
}


}

if($tm==0)
break;

$this->n=$jj+1;
$this->nn++;
$shinthiea=1;
}

if($this->n==$this->english_n)
{$this->yes=1;
 for($i=0;$i<$this->nn;$i++)
 if($this->bangla_transfer[$i]=="Rb¨"||$this->bangla_transfer[$i]=="nB‡Z"||$this->bangla_transfer[$i]=="m‡OM")
{
 $ty=$this->bangla_transfer[$i];
for($j=$i;$j<$this->nn;$j++)
$this->bangla_transfer[$j]=$this->bangla_transfer[$j+1];
$this->bangla_transfer[$this->nn-1]=$ty;
}
}

}

////////////////////////////////extension function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////have function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function have($sub)
{
if($this->bangla_word[$sub]=="i")
$this->bangla_transfer[$sub]="Avgvi";
else if($this->bangla_word[$sub]=="he"||$this->bangla_word[$sub]=="she")
$this->bangla_transfer[$sub]="Zvi";
else if($this->bangla_word[$sub]=="you")
$this->bangla_transfer[$sub]="‡Zvgvi";
else if($this->bangla_word[$sub]=="we")
$this->bangla_transfer[$sub]="Avgv‡ai";
else
{
$this->bangla_transfer[$sub]=$this->bangla_transfer[$sub]."[ i / Gi ]";
}
}
////////////////////////////////have function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////prenoun function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function prenoun()
{
$tm=0;
for($j=($this->english_n)-1;$j>=$this->n;$j--)
{
 $jj=$j;
 $table="prenoun";
 $ty=$this->bangla_word[$this->n];
 for($k=$this->n+1;$k<=$j;$k++)
 $ty=$ty." ".$this->bangla_word[$k];
 $que="SELECT bangla FROM " . $table . " WHERE english = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"bangla");
 $tm=1;
 }
if($tm==1)
{
break;
}
}
if($tm==1)
{
$this->n=$jj+1;
$this->nn++;

}
}
////////////////////////////////prenoun function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////aftersubjectbeforeverb function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function aftersubjectbeforeverb()
{
$tm=0;
for($j=($this->english_n)-1;$j>=$this->n;$j--)
{
 $jj=$j;
 $table="aftersubjectbeforeverb";
 $ty=$this->bangla_word[$this->n];
 for($k=$this->n+1;$k<=$j;$k++)
 $ty=$ty." ".$this->bangla_word[$k];
 $que="SELECT bangla FROM " . $table . " WHERE english = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"bangla");
 $tm=1;
 }
if($tm==1)
{
break;
}
}
if($tm==1)
{
$this->n=$jj+1;
$this->nn++;

}
}
////////////////////////////////aftersubjectbeforeverb function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////many function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function many()
{
 for($i=0;$i<$this->nn;$i++)
 if($this->bangla_word[$i]=="A‡bK"||$this->bangla_word[$i]=="cÖPzi"||$this->bangla_word[$i]=="wKQz")
 {
 $ty=$this->bangla_word[$i+1];
 $table="noun";
 $que="SELECT englishword FROM " . $table . " WHERE banglaword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
$th="0"; 
for($ii=0;$ii<mysql_num_rows($result);$ii++)
{$th = mysql_result($result,$ii,"englishword");
} 
if($th!="0")
{$ty=$th;
 $table="number";
 $que="SELECT singular FROM " . $table . " WHERE plural = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 $th="0"; 
for($ii=0;$ii<mysql_num_rows($result);$ii++)
{ $th = mysql_result($result,$ii,"singular");
}
if($th!="0")
{
 $ty=$th;
 $table="noun";
 $que="SELECT banglaword FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
 $th="0"; 
for($ii=0;$ii<mysql_num_rows($result);$ii++)
{ $this->bangla_word[$i+1] = mysql_result($result,$ii,"banglaword");
}
}
}


 break;
  }

}
////////////////////////////////many function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
///////////////////////////////verbstart function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function verbstart()
{
$this->n=0;
$this->nn=0;
$this->bangla_transfer=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$this->number=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$person=0;
if($this->bangla_word[0]=="the")
{$this->bangla_transfer[0]="wU";
 $this->n++;
 $this->nn++;
}
 $this->prenoun();
 $n_fi=$this->n;
 for($j=$n_fi+1;$j>=$n_fi;$j--)
 {
 $zx=0;
 $subject=0;
 $verb=0;
 $table="noun";
 $ty = "";
 $ty=$this->bangla_word[$n_fi];
 if($j==$n_fi+1)
 $ty=$ty." ".$this->bangla_word[$n_fi+1];
 $que="SELECT banglaword,number,person FROM " . $table . " WHERE englishword = " . "'$ty'";
 $result=mysql_query($que,$this->link_id);
if(mysql_num_rows($result)>0)
 for($i=0;$i<mysql_num_rows($result);$i++)
{$this->bangla_transfer[$this->nn] = mysql_result($result,$i,"banglaword");
 $this->person[$this->n] = mysql_result($result,$i,"person");
 $this->number[$this->n] = mysql_result($result,$i,"number");
 $subject=$this->n;
 $zx=1;
 $this->n++;
 $this->nn++;
}
 if($zx==1)
{
if($j==$n_fi+1)
$this->n++;
break;
}
}
$this->aftersubjectbeforeverb();

}
/////////////////////////////////////verbstart function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////////////////////compound function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function compound() 
{
$temp=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$temp2=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$temppp=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$flag=0;

for($i=0;$i<$this->english_n;$i++)
$temp[$i]=$this->bangla_word[$i];
$num=$this->english_n;
for($i=0;$i<$num;$i++)
if($temp[$i]=="and"||$temp[$i]=="or"||$temp[$i]=="but")
{
$this->english_n = $i;

$this->affirmative();

if($this->yes==0)
{
for($j=0;$j<$i;$j++)
$this->bangla_word[$j]=$temp[$j];
$this->english_n=$i;
$this->negative();
}

if($this->yes==0)
{
for($j=0;$j<$i;$j++)
$this->bangla_word[$j]=$temp[$j];
$this->english_n=$i;
$this->interrogative();
}
if($this->yes==0)
{
for($j=0;$j<$i;$j++)
$this->bangla_word[$j]=$temp[$j];
$this->english_n=$i;
$this->imperative();
}

if($this->yes==1)
{
$sisi=$this->nn;
for($j=0;$j<$this->nn;$j++)
$temp2[$j]=$this->bangla_word[$j];

if($temp2[$sisi-1]=="nq")
$sisi--;
else if($temp2[$sisi-1]=="?")
$sisi--;


$q2=0;

for($j=$i+1;$j<$num;$j++)
{$this->bangla_word[$q2]=$temp[$j];
 $temppp[$q2]=$temp[$j];
 $q2++;
}

$this->english_n = $q2;
$this->yes=0;

$this->verbstart();

if($this->n==0)
{
$pt=1;
for($j=0;$j<$i;$j++)
if($this->person[$j]!=0)
{
 $pt=$this->person[$j];
 break;
}
$flag=1;
for($j=$this->english_n;$j>=1;$j--)
{$this->bangla_word[$j]=$this->bangla_word[$j-1];
 $temppp[$j]=$temppp[$j-1];
}
$this->english_n++;
$q2++;
if($pt==1)
$this->bangla_word[0]="i";
else if($pt==2)
$this->bangla_word[0]="you";
else if($pt==3)
$this->bangla_word[0]="he";
$temppp[0]=$this->bangla_word[0];
}

$this->affirmative();

if($this->yes==0)
{
for($j=0;$j<$q2;$j++)
$this->bangla_word[$j]=$temppp[$j];
$this->english_n=$q2;
$this->negative();
}

if($this->yes==0)
{
for($j=0;$j<$q2;$j++)
$this->bangla_word[$j]=$temppp[$j];
$this->english_n=$q2;
$this->interrogative();
}

if($this->yes==0)
{
for($j=0;$j<$q2;$j++)
$this->bangla_word[$j]=$temppp[$j];
$this->english_n=$q2;
$this->imperative();
}

if($this->yes==1)
{
if($temp[$i]=="and")
{
$temp2[$sisi]="Ges";
$sisi++;
}
else if($temp[$i]=="or")
{
$temp2[$sisi]="A_ev";
$sisi++;
}
else if($temp[$i]=="but")
{
$temp2[$sisi]="wKb&Zz";
$sisi++;
}

for($j=0;$j<$this->nn;$j++)
if($j!=0||$flag!=1)
{
$temp2[$sisi]=$this->bangla_word[$j];
$sisi++;
}


if($this->nn==1)
{
$zxa=$temp2[$sisi-1] . "[/‡K]";
$temp2[$sisi-1]=$temp2[$sisi-3];
$temp2[$sisi-3]=$zxa;
$zxa=$temp2[$sisi-2];
$temp2[$sisi-2]=$temp2[$sisi-3];
$temp2[$sisi-3]=$zxa;
}


for($j=0;$j<$sisi;$j++)
$this->bangla_word[$j] = $temp2[$j];

$this->nn = $sisi;

}
}
break;
}


}
//////////////////////////////////////compound function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////complex function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function complex()
{
$temp=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$temp2=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$temppp=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");
$flag=0;

for($i=0;$i<$this->english_n;$i++)
$temp[$i]=$this->bangla_word[$i];
$num=$this->english_n;
$my_pleaser = 0;


if($temp[0]=="if")
{
for($i=0;$i<$num-1;$i++)
$temp[$i]=$temp[$i+1];
$num--;
$my_pleaser=1;
}
else if($temp[0]=="though" || $temp[0]=="although")
{
for($i=0;$i<$num-1;$i++)
$temp[$i]=$temp[$i+1];
$num--;
$my_pleaser=2;
}
else if($temp[0]=="whether")
{
for($i=0;$i<$num-1;$i++)
$temp[$i]=$temp[$i+1];
$num--;
$my_pleaser=3;
}
else if($temp[0]=="until")
{
for($i=0;$i<$num-1;$i++)
$temp[$i]=$temp[$i+1];
$num--;
$my_pleaser=4;
}

for($i=0;$i<$num;$i++)
if($temp[$i]==","||$temp[$i]=="that"||($temp[$i]=="so"&&$temp[$i+1]=="that")||$temp[$i]=="because"||$temp[$i]=="before"||$temp[$i]=="after"||$temp[$i]=="therefore")
{

$this->english_n = $i;

for($j=0;$j<$i;$j++)
$this->bangla_word[$j]=$temp[$j];
$this->english_n=$i;
$this->affirmative();

if($this->yes==0)
{
for($j=0;$j<$i;$j++)
$this->bangla_word[$j]=$temp[$j];
$this->english_n=$i;
$this->negative();
}

if($this->yes==0)
{
for($j=0;$j<$i;$j++)
$this->bangla_word[$j]=$temp[$j];
$this->english_n=$i;
$this->interrogative();
}
if($this->yes==0)
{
for($j=0;$j<$i;$j++)
$this->bangla_word[$j]=$temp[$j];
$this->english_n=$i;
$this->imperative();
}
if($this->yes==1)
{


$sisi=$this->nn;
for($j=0;$j<$this->nn;$j++)
$temp2[$j]=$this->bangla_word[$j];

if($temp2[$sisi-1]=="?")
$sisi--;

if($temp2[$sisi-1]=="nq")
$sisi--;

$q2=0;

if(($temp[$i]=="so"&&$temp[$i+1]=="that"))
$i++;

for($j=$i+1;$j<$num;$j++)
{$this->bangla_word[$q2]=$temp[$j];
 $temppp[$q2]=$temp[$j];
 $q2++;
}

$this->english_n = $q2;
$this->yes=0;


$this->verbstart();
$flag=0;

if($this->n==0)
{
$pt=1;
for($j=0;$j<$i;$j++)
if($this->person[$j]!=0)
{
 $pt=$this->person[$j];
 break;
}
$flag=1;
for($j=$this->english_n;$j>=1;$j--)
{$this->bangla_word[$j]=$this->bangla_word[$j-1];
 $temppp[$j]=$temppp[$j-1];
}
$this->english_n++;
$q2++;
if($pt==1)
$this->bangla_word[0]="i";
else if($pt==2)
$this->bangla_word[0]="you";
else if($pt==3)
$this->bangla_word[0]="he";
$temppp[0]=$this->bangla_word[0];
}



$this->compound();

if($this->yes==0)
{
for($j=0;$j<$q2;$j++)
$this->bangla_word[$j]=$temppp[$j];
$this->english_n=$q2;
$this->affirmative();
}

if($this->yes==0)
{
for($j=0;$j<$q2;$j++)
$this->bangla_word[$j]=$temppp[$j];
$this->english_n=$q2;
$this->negative();
}

if($this->yes==0)
{
for($j=0;$j<$q2;$j++)
$this->bangla_word[$j]=$temppp[$j];
$this->english_n=$q2;
$this->interrogative();
}

if($this->yes==0)
{
for($j=0;$j<$q2;$j++)
$this->bangla_word[$j]=$temppp[$j];
$this->english_n=$q2;
$this->imperative();
}

if($this->yes==1)
{
if($temp[$i]==",")
$temp2[$sisi]=",";
else if($temp[$i]=="that" && $temp[$i-1]=="so")
$temp2[$sisi]="hv‡Z";
else if($temp[$i]=="that")
$temp2[$sisi]= "‡h";
else if($temp[$i]=="because")
$temp2[$sisi]= "Kvib";
else if($temp[$i]=="before")
$temp2[$sisi]= "c~‡e©";
else if($temp[$i]=="after")
$temp2[$sisi]= "c‡i";
else if($temp[$i]=="therefore")
$temp2[$sisi]= "‡mBRb¨";


$sisi++;

for($j=0;$j<$this->nn;$j++)
if($j!=0||$flag==0)
{
$temp2[$sisi]=$this->bangla_word[$j];
$sisi++;
}

for($j=0;$j<$sisi;$j++)
$this->bangla_word[$j] = $temp2[$j];
$this->nn = $sisi;

if($my_pleaser==1)
{
for($j=$sisi;$j>=1;$j--)
$this->bangla_word[$j]=$this->bangla_word[$j-1];
$this->bangla_word[0]="hw`";
$this->nn = $sisi+1;
}
else if($my_pleaser==2)
{
for($j=$sisi;$j>=1;$j--)
$this->bangla_word[$j]=$this->bangla_word[$j-1];
$this->bangla_word[0]="hw`I";
$this->nn = $sisi+1;
}
else if($my_pleaser==3)
{
for($j=0;$j<$sisi;$j++)
if($this->bangla_word[$j]==',')
{
for($k=$sisi;$k>$j;$k--)
$this->bangla_word[$k]=$this->bangla_word[$k-1];
$this->bangla_word[$j]="bZzev";
$this->nn = $sisi+1;
break;
}
}
else if($my_pleaser==4)
{
for($j=$sisi;$j>=1;$j--)
$this->bangla_word[$j]=$this->bangla_word[$j-1];
$this->bangla_word[0]="hZewa";
$this->nn = $sisi+1;
}

for($j=0;$j<$this->nn;$j++)
if($this->bangla_word[$j]=="KLb")
$this->bangla_word[$j]="hLb";

}

}

break;
}

}
////////////////////////////////////complex function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 
///////////////////////////////////beforeafter function start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
public function beforeafter()
{
$temp=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1");

for($i=0;$i<$this->nn;$i++)
if($this->bangla_word[$i]=="c~‡e©"||$this->bangla_word[$i]=="c‡i")
{
$pa=0;
for($j=$i+1;$j<$this->nn;$j++)
{
$temp[$pa]=$this->bangla_word[$j];
$pa++;
}

$li=$i;

if($i-1>=0)
if($this->bangla_word[$i-1]==",")
{
$temp[$pa]=",";
$pa++;
$li--;
}
$temp[$pa]=$this->bangla_word[$i];
$pa++;
for($j=0;$j<$li;$j++)
{
$temp[$pa]=$this->bangla_word[$j];
$pa++;
}
for($j=0;$j<$this->nn;$j++)
$this->bangla_word[$j]=$temp[$j];

for($j=0;$j<$this->nn;$j++)
{if($this->bangla_word[$j]=="AvmwQj")
{
$this->bangla_word[$j]="Avmvi";
}
if($this->bangla_word[$j]=="giwQj")
{
$this->bangla_word[$j]="givi";
}
}
break;
}

for($i=0;$i<$this->nn-1;$i++)
if($this->bangla_word[$i]=="Av‡Q"&&$this->bangla_word[$i+1]=="bv")
{
$this->bangla_word[$i]=‡bB;
$this->nn--;
}


}
//////////////////////////////////beforeafter function end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
///////////////////////////////////// class end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
}

?>