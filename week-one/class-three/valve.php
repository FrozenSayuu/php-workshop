<?php

require("person.php");

class Valve extends person
{
    protected $accountNumber;
    protected $balance;
    protected $owner;
    public $transaction = [];
    protected $date;

    public function __construct(string $accountNumber, string $firstname, string $lastname, float $balance = 0, $date = null)
    {
        $this->accounts = $accountNumber;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->balance = $balance;
        $this->date = $date = date("m.d.y");
    }

    public function deposit(float $addsum, string $description)
    {
        $this->deposit = $addsum;

        $this->balance += $addsum;

        array_push($this->transaction, [
            'amount' => $addsum,
            'description' => $description,
            'date' => $this->date
        ]);

        return $addsum."kr {$this->date}<br>";
    }

    public function withdraw(float $remove, string $description)
    {
        $this->withdraw = $remove;

        $this->balance -= $remove;

        array_push($this->transaction, [
            'amount' => -$remove,
            'description' => $description,
            'date' => $this->date
        ]);

        return "-".$remove."kr {$this->date}<br>";
    }

    public function getCurrentBalance()
    {
        echo "<h2>Your Balance</h2>";
        echo "{$this->balance}kr <br>";
    }

    public function getAccountNumber()
    {
        echo "Your account number is {$this->accounts}";
    }

    public function getOwner()
    {
        return $this->getFullName();
    }

    public function getInfo()
    {
        echo "<pre>";

        if($this->getFullName() == ($this->firstname && $this->lastname))
        {
            echo $this->getAccountNumber();
            echo $this->getCurrentBalance();
            echo "<h2>Transaction Log</h2>";
        }

        else if($this->getFullName() !== ($this->firstname && $this->lastname))
        {
            echo "<h2>{$this->getOwner()}</h2>";
            echo $this->getAccountNumber();
            echo $this->getCurrentBalance();
            echo "<h2>Transaction Log</h2>";
        }

    }

    public function getTransactions()
    {
        return $this->transaction;
    }

    public function getTotalTransaction()
    {
        echo $this->getTotalTransactions();
    }

    }
?>