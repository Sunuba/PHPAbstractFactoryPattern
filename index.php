<?php require_once ('vendor/autoload.php');

use abs\CreditCardFactory;

$creditScore = 630;
$creditCardFactory = CreditCardFactory::getCreditCardFactory ($creditScore);
$card = $creditCardFactory->getCreditCard("PLATINUM");
$card->setCscNumber (277);
$card->setCardNumberLength (16);
$card->setCreditCardNumber (1234567891011121);
print_r ($card);
