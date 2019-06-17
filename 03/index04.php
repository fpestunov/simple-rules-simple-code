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
            return $this->isOfType($accountType, $account);
        });
    }

    private function isOfType($accountType, $account)
    {
        return $account->type() === $accountType && $account->isActive();
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

    public function type()
    {
        return $this->type;
    }

    public function isActive()
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
