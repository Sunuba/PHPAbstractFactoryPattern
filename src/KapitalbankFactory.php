<?php


namespace abs;


class KapitalbankFactory extends CreditCardFactory
{

    public function getCreditCard($cardType)
    {
        switch ($cardType){
            case "GOLD":
                return new KapitalbankGold();
                break;
            case "PLATINUM":
                return new KapitalbankPlatinum();
                break;
            case "BLACK":
                return new KapitalbankBlack();
                break;
            default:
                return null;
        }
    }


}