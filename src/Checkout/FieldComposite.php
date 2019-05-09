<?php
namespace ESET\Checkout;

/**
 * The base Composite class implements the infrastructure for managing child
 * objects, reused by all Concrete Composites.
 */
abstract class FieldComposite extends FormElement
{
    /**
     * @var FormElement[]
     */
    protected $fields = [];

    public function add(FormElement $field): void{
        $name = $field->getName();
        $this->fields[] = $field;
    }

    public function render(): string
    {
        $form = '';
        $nrFormItems = \count($this->fields);
        for ($i=0; $i<$nrFormItems; $i++){
            $form .= $this->fields[$i]->render();
        }

        return $form;
    }
}