<?php
error_reporting(-1);
ini_set("display_errors", 1);

require("valve.php");

$tova_konto = new Valve("123-4567", "Tova", "f");

$tova_konto->deposit(13, "belöning");
$tova_konto->deposit(20, "betalning");

$tova_konto->withdraw(1, "caffe latte");
$tova_konto->withdraw(1, "fika");

$tova2 = new Valve("234-567", "Tova", "f");

$tova2->deposit(13, "belöning");

$andrea = new Valve("567-123", "Andrea", "f");

$andrea->deposit(14, "belöning");

$andrea2 = new Valve("789-345", "Andrea", "f");

$andrea2->deposit(23, "belöning");

$accounts = [
    $tova_konto,
    $tova2,
    $andrea,
    $andrea2
];

foreach($accounts as $account)
{
    $account->getInfo();
    
        foreach($account->getTransactions() as $transaction)
        {
            echo "<p>{$transaction["amount"]}kr - {$transaction["description"]} on {$transaction["date"]}</p>";
        }

    echo "<hr>";
}

echo "</pre>";

?>