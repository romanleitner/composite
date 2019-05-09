<?php
namespace ESET\Checkout;


class Fieldset extends FieldComposite
{
    public function render(): string
    {
        $fieds = parent::render();

        return '<fieldset name="'.$this->getName().'">'.$fieds.'</fieldset>';
    }
}