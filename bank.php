<?php
class Account{
	private $total_balance=0;
	public function makeDeposit($amount){
					$this->total_balance+=$amount;
					}
	public function makeWithdrawal($amount){
					if  ($amount<$this->total_balance){
						$this->total_balance-=$amount;
					} else {
						die ("Insufficient fund <br>");
					}
				}
	public function getTotalBalance(){
					return $this->total_balance;
					}
			}	
$a=new Account;
$a->makeDeposit(500);
$a->makeWithdrawal(100);
echo $a->getTotalBalance() . "<br>";
$a->makeWithdrawal (1000);




?>