<?php

class person
{
   protected $firstname;
   protected $lastname;
   protected $accounts;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getFullName()
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function getAccounts()
    {
        return $this->accounts;
    }

    public function getTotalTransactions()
    {
        return $this->getAccounts();
    }
}

?>