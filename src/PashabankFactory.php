<?php


namespace abs;


class PashabankFactory extends CreditCardFactory {

    public function getCreditCard($cardType)
    {
        switch ($cardType){
            case "GOLD":
                return new PashabankGold();
                break;
            case "PLATINUM":
                return new PashabankPlatinum();
                break;
            case "BLACK":
                return new PashabankBlack();
                break;
            default:
                return null;
        }

    }

}