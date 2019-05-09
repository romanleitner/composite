<?php
namespace ESET\Shopping;

use Money\Money;

class Product
{
    private $name;
    private $price;

    public function __construct(
        string $name,
        Money $price
    )
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}