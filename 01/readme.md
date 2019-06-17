```
class Trnsltr {

}

class Translator {
    
}

class UserRepo {

}

class UserRepository {
    
}
```

```
foreach ($x in $people)
{
    ...
    echo $x->name; // 3 month later: what is it?
}

foreach ($person in $people)
{
    ...
    echo $person->name;
}

```

```
class UserRepository {

    // $billingIdentifier, everybody know Id abbreviation
    public function fetch($billingId)
    {

    }

    public function fetchByUserBillingId($billingId)  // its User class
    public function fetchByBillingId($id) // methods should not exceed 2 words
    {

    }
}

$userRepository->fetch($id); // not epxplitcitly
```

```
class Order {
    public function prepAndShipAndNotifyUser()
    {

    }

    process() // dont describe what is this
    shipOrder(); // $order->shipOrder();
    ship();
}
```
