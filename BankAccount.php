<?php

class BankDetails{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber,$initialBalance = 0) {
        $this -> accountNumber = $accountNumber;
        $this -> balance = $initialBalance;
    }

    public function deposit($amount) {
        if($amount > 0) {
            $this -> balance += $amount;
            echo "The current balance is :".$this -> balance;
        }

        else {
            echo "Invalid deposit amount\n";
        }
    }

    public function withdraw($amount) {
        if($amount > 0 && $this -> balance >= $amount) {
            $this -> balance -= $amount;
            echo "The current balance is :".$this -> balance;
        }

        else {
            echo "Insufficient funds or invalid withdrawal amount\n";
        }
    }
    
    public function getBalance() {
        return $this -> balance;
    }

    public function getAccountNumber() {
        return $this -> accountNumber;
    }
}

//Creating the first object for class (BankDetails)
$customer = new BankDetails("123445",20000);

//Accessing the deposit methods from class by using its objects
$customer->deposit(5000);

//Accessing the withdraw methods from class by using its objects
$customer->withdraw(3000);

//At last displaying the current a/c balance after deposit and withdraw from Account
echo "Your current A/C Balance is : ". $customer->getBalance()."\n"; 





?>