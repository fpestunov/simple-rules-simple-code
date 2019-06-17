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
        $filtered = [];

        // 0
        foreach ($this->accounts as $account)
        {
            // 1
            // some times later is hard to understand what are we doing here, need comment
            // if the account is of the type that was requested
            // but its too mess, we can 'extract method'
            if ($account->type() === $accountType && $account->isActive())
            {
                // 2
                $filtered[] = $account;
            }
        }

        return $filtered;
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
