<?php
namespace ESET\Checkout;


class SelectElement extends FormElement
{
    private $options = [];


    public function render(): string
    {
        return '<select name="'.$this->getName().'"></select>';
    }
}