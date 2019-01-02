# Abstract Factory Pattern

When creditScore is greater than 620 it returns Pashabank factory, otherwise 
it is Kapitalbank factory.

    $creditScore = 610;
    $creditCardFactory = CreditCardFactory::getCreditCardFactory ($creditScore);
    print_r ($creditCardFactory);
Result:

    abs\KapitalbankFactory Object
    (
    )

When $creditScore = 630 or any number greater than 620 it return 
Pashabank Factory;

    abs\PashabankFactory Object
    (
    )

Let's continue building our card:

    $card = $creditCardFactory->getCreditCard("BLACK");

Seriously, up to this moment we do not know the issuing bank but we know it is
going to be a black card:

    print_r ($card);

Result:

    abs\PashabankBlack Object
    (
        [cardNumberLength:protected] => 
        [cscNumber:protected] => 
    )

Now, we can set the rest of the parameters with:

    $card->setCscNumber (277);
    $card->setCardNumberLength (16);
    $card->setCreditCardNumber (1234567891011121);

If we print_r($card):

    abs\PashabankPlatinum Object
    (
        [cardNumberLength:protected] => 16
        [cscNumber:protected] => 277
        [creditCardNumber:protected] => 1.2345678910111E+15
    )

We are done with creating our credit card.


But there are other issues that we can consider in this example. If we closely
audit the code we can see that some of the code parts are repeating, we can use
template design pattern to refactor these codes as well.