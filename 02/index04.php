<?php

function signUp($subscription)
{
    if ($subscription === 'monthly')
    {
        $this->createMonthlySubscription();
    }
    elseif ($subscription === 'forever')
    {
        $this->createForeverSubscription();
    }
}
