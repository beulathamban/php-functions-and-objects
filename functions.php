<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
hello("");
br();
br();
hello("Yoobee");
br();
hellostyle("Helvetica", 2);
br();
hellostyle("Times", 3);
br();
hellostyle("Courier", 1.5);
br();

function hello($name){
	echo "Hello $name"; //local variable
}
function br(){
	echo "<br>";
}
function hellostyle($font, $size){
echo "<p style=\"font-family:$font; font-size:{$size}em;\">  Hello Yoobee </p> ";	
}
/*function makeBold($text){
	return "<b> $text </b>";
	}
	$normalText = "This is normal text.";
$boldText = makeBold("This is bold text.");
echo "<p> $normalText </p> ";
echo "<p> $boldText </p> ";
*/
$x=5;
function number(){
	global $x;
	echo $x; //global variable
	++$x;
}
function usingnumber(){
	echo $GLOBALS["x"]; //Superglobalvariables 
}
number();
br();
echo $x; //incremented inside the function
br();
usingnumber();
function sum($a, $b){
	return $a+$b;
}
$total=sum(5,6);
br();
echo "Total=$total";
//recursive function
$n=5;
//$nfact=5*4*3*2*1;
//br();
//echo $nfact;
//$nfact=1;
//for ($i=1;$i<=$n;$i++){
//	$nfact=$nfact*$i;
//}
br();
//echo $nfact;
echo fact($n);
function fact($p) {
	if ($p< 2) {
		return 1;
     } else {
       	return ($p*(fact($p-1)));
     }
	
}
?>