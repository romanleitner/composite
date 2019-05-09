<?php
namespace ESET\Checkout;


class InputElement extends FormElement
{

    public function render(): string
    {
        return '<input type="text" name="'.$this->getName().'" />';
    }
}