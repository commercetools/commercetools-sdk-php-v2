<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetCustomFieldActionModel extends CartUpdateActionModel implements CartSetCustomFieldAction {
    const DISCRIMINATOR_VALUE = 'setCustomField';

    /**
     * @var string
     */
    protected $name;
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(CartSetCustomFieldAction::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(CartSetCustomFieldAction::FIELD_VALUE);
            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

}
