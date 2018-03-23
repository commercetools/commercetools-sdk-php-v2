<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

class ShoppingListSetTextLineItemCustomFieldActionModel extends ShoppingListUpdateActionModel implements ShoppingListSetTextLineItemCustomFieldAction {
    const DISCRIMINATOR_VALUE = 'setTextLineItemCustomField';

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $textLineItemId;
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
            $value = $this->raw(ShoppingListSetTextLineItemCustomFieldAction::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return string
     */
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            $value = $this->raw(ShoppingListSetTextLineItemCustomFieldAction::FIELD_TEXT_LINE_ITEM_ID);
            $value = (string)$value;
            $this->textLineItemId = $value;
        }
        return $this->textLineItemId;
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(ShoppingListSetTextLineItemCustomFieldAction::FIELD_VALUE);
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
     * @param string $textLineItemId
     * @return $this
     */
    public function setTextLineItemId(string $textLineItemId)
    {
        $this->textLineItemId = (string)$textLineItemId;

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
