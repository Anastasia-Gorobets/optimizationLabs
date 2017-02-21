<?php
//Метод дихотомии
$x=0;
function f($x){
    return (pow($x,3)/12) + (4/pow($x,2));
}
$a=1;
$b=3;
$N=10;
$E=0.2;
$x1=0;
$x2=0;
$f1=0;
$f2=0;
$c=($a+$b)/2; //2.5
$x1=$c-$E/2; //2.4
$x2=$c+$E/2; //2.6
$f1Arr=[];
$f2Arr=[];
for($i=1;$i<$N;$i++){
$f1=f($x1);
$f2=f($x2);
    $f1Arr[(string)$x1]=$f1;
    $f2Arr[(string)$x2]=$f2;
  if($f1<$f2){
      $b=$x2;
  }else if ($f1>$f2){
      $a=$x1;
  }
    $c=($a+$b)/2;
    $x1=$c-$E/2;
    $x2=$c+$E/2;
}
echo "<br>Result:<br>";
echo "<pre>";
echo "f1:<br>";
print_r($f1Arr);
echo "</pre>";
echo "<br>";
echo "<pre>";
echo "f2:<br>";
print_r($f2Arr);
echo "</pre>";
$f1Min=min($f1Arr);
$f2Min=min($f2Arr);
if($f1Min<$f2Min){
    echo "f*=".round($f1Min,5).", x*=".array_keys($f1Arr,$f1Min)[0];
}else{
    echo "f*=".round($f2Min,5).", x*=".array_keys($f2Arr,$f2Min)[0];
}

