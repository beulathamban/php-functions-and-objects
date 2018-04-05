<?php
class Customer{
	public $name; // can be accessed anywhere in the script
	public $age; // can be accessed anywhere in the script
	public $balance=5000;
	public static $deposit;
	public function output(){
		echo "this is inside the class <br>";
		echo "The bank balance is $this->balance";
	}
	public function check(){
		if ($this->balance>2000) {
			$this->output();
			echo "display after checking<br>";
		}
	}
}
$customerA=new Customer(); //creating a new instance of the class
$customerB=new Customer();// 
$customerA->name="Sheila";
$customerA->age=79;
$customerB->name="Tony";
$customerB->age=45;
$customerA->output(); // calling method of the class
$customerA->check();
echo "<br> The name of customer A is $customerA->name <br>";
echo "Customer B is $customerB->age years old <br>";
print_r($customerA);
echo "<br>";
print_r($customerB);
Customer::$deposit=1000;
echo "<br>";
echo Customer::$deposit; //without instance, independently used.
?>