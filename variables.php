<?php 
$x34="aruna";
$y=23;
$z=64;
$w=$y+$z;
echo "my value:$y";
echo "my value:$w";
echo  "name:$x34";
?>

// variable scopes:
//local 
//global
//static
//reference


//<?php 
//function local(){
//$x=23;
//echo "local variable:$x";
//}
//local();
$x=456;
echo "outside fn:$x";
//?>

//global function;
//<?php
//$z=3;     //globalfunction
//function local()
//{
  //      $x=342;
    //global $z;
 //   echo "local variable: $z";
//}
//local();

//?>


//<?php
//$z=3;     //globalfunction
//function local()
//{
      //  $x=342;
    //$y=$GLOBALS['z'];
  //  echo "local variable: $y";
//}
//local();

//?> 

//<?php
//function local(){
  //  $y=14;
    //$y++;
    //echo "local variable:" .$y."</br>";
//}
//local();
//local();

//?>


//<?php
//function local(){
    // static$y=14;
    //$y++;
  //  echo "local variable:" .$y."</br>";
//}
//local();
//local();

//?>


//reference variables:
<?php
$x="abc";
$$x=200;     //"abc"=200
echo $x."</br>";
echo $$x."</br>";
echo $abc."</br>";

?>


