<?php

// используем полиморфизм
function signUp(Subscription $subscription)
{
    $subscription->create();
}

// Фабрика
function getSubscriptionType($type)
{
    if ($subscription === 'monthly')
    {
        return new ForeverSubscription;
    }

    return new MonthlySubscription;
}

$subscription = getSubscriptionType($type);

signUp($subscription);
