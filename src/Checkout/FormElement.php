<?php
namespace ESET\Checkout;

/**
 * The base Component class declares an interface for all concrete components,
 * both simple and complex.
 *
 */
abstract class FormElement
{
    /**
     * We can anticipate that all field will have name.
     */
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Each concrete field must provide its rendering implementation, but
     * we can safely assume that all of them are returning strings.
     */
    abstract public function render(): string;
}