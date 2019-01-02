<?php


namespace abs;


abstract class CreditCard
{
    protected $cardNumberLength;
    protected   $cscNumber;
    protected $creditCardNumber;

    public function getCardNumberLength()
    {
        return $this->cardNumberLength;
    }

    public function setCardNumberLength(int $cardNumberLength)
    {
        $this->cardNumberLength = $cardNumberLength;
    }

    public function getCscNumber()
    {
        return $this->cscNumber;
    }

    public function setCscNumber($cscNumber): void
    {
        $this->cscNumber = $cscNumber;
    }

    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

    public function setCreditCardNumber($creditCardNumber): void
    {
        $this->creditCardNumber = $creditCardNumber;
    }

}