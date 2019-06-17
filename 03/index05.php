<?php

// фильтровать банковские счета по определенному критерию

class BankAccounts {

    protected $accounts; // массив счетов

    function __construct($accounts)
    {
        $this->accounts = $accounts;
    }

    public function filterBy($accountType)
    {
        return array_filter($this->accounts, function($account) use ($accountType) 
        {
            // 1
            return $account->isOfType($accountType);
        });
    }
}

class Account {

    protected $type;

    private function __construct($type)
    {
        $this->type = $type;
    }

    // instantiate or open account?
    public static function open($type)
    {
        return new static($type);
    }

    public function isOfType($accountType)
    {
        return $this->type() === $accountType && $this->isActive();
    }

    // now we dont need public interface
    private function type()
    {
        return $this->type;
    }

    // now we dont need public interface
    private function isActive()
    {
        return true;
    }
}

$accounts = [
    Account::open('checking'),
    Account::open('savings'),
    Account::open('checking'),
    Account::open('savings')
];

$accounts = new BankAccounts($accounts);

$savings = $accounts->filterBy('savings');
$checking = $accounts->filterBy('checking');

var_dump($savings);
