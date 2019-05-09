<?php
require_once('vendor/autoload.php');

$product = new \ESET\Shopping\Product('Ceruzka', \Money\Money::EUR(1250));

$fieldset = new \ESET\Checkout\Fieldset('Personal information');
$fieldset->add(new \ESET\Checkout\InputElement('first_name'));
$fieldset->add(new \ESET\Checkout\SelectElement('country'));
var_dump($fieldset->render());