<?php

//get the q parameter from URL
$q=$_GET["gamestatus"];

$arrindicator=0;
  
$markedboxtracker=array();

$j=0;
for($i=0;$i<4;$i++){
   if($q[$i]=='0') { 
   $markedboxtracker[$arrindicator]=$j;
   $arrindicator=$arrindicator+1;
   $markedboxtracker[$arrindicator]=$j+1;
   $arrindicator=$arrindicator+1;
  }
if($q[$i]=='1' or $q[$i]=='3') { 
   $markedboxtracker[$arrindicator]=$j;
   $arrindicator=$arrindicator+1;
  }
if($q[$i]==4 or $q[$i]=='C') { 
   $markedboxtracker[$arrindicator]=$j+1;
   $arrindicator=$arrindicator+1;
  }
$j=$j+2;
}   


$e=$q[4];

if($e=='0' or $e=='1' or $e=='3') { 
   $markedboxtracker[$arrindicator]=8;
   $arrindicator=$arrindicator+1;

  }

//$response=join(" ",$markedboxtracker);                

$z=rand(0,count($markedboxtracker)-1);
$response=$markedboxtracker[$z];


echo $response;
?>







