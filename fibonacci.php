<?php  
///fiboancci series   
$n = 10;  
echo "<h1>Fibonacci series using recursive function</h1>";  
echo "<br>";  

for ($i = 0; $i < $n; $i++){  
	echo fibo($i);  
	echo "<br>";  
}  

function fibo($n){  
    if($n == 0){  
    return 0;  
    }else if( $n == 1){  
	return 1;  
	}  else {  
	return (fibo($n-1) + fibo($n-2));  
	}   
}  
