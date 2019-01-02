<?php

namespace abs;

abstract class CreditCardFactory
{
    public static function getCreditCardFactory($creditScore)
    {
        if ( $creditScore > 620 )
        {
            return new PashabankFactory();
        } else {
            return new KapitalBankFactory();
        }
    }

    public abstract function getCreditCard($cardType);


}