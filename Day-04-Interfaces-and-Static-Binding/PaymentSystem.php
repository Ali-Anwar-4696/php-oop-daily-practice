<?php

interface PaymentMethod {
    public function pay($amount);
}

class JazzCash implements PaymentMethod {
    public function pay($amount) {
        echo "Paid Rs.$amount using JazzCash.";
    }
}

class EasyPaisa implements PaymentMethod {
    public function pay($amount) {
        echo "Paid Rs.$amount using EasyPaisa.";
    }
}

class BankTransfer implements PaymentMethod {
    public function pay($amount) {
        echo "Paid Rs.$amount via Bank Transfer.";
    }
}

$payment1 = new JazzCash();
$payment1->pay(5000);

echo "<br>";

$payment2 = new EasyPaisa();
$payment2->pay(3000);

?>
