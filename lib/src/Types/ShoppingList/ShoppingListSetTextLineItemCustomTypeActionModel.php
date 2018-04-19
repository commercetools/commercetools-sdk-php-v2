<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

use Commercetools\Types\Type\TypeReference;

class ShoppingListSetTextLineItemCustomTypeActionModel extends ShoppingListUpdateActionModel implements ShoppingListSetTextLineItemCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setTextLineItemCustomType';

    /**
     * @var string
     */
    protected $fields;
    /**
     * @var string
     */
    protected $textLineItemId;
    /**
     * @var TypeReference
     */
    protected $type;

    /**
     * @return string
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            $value = $this->raw(ShoppingListSetTextLineItemCustomTypeAction::FIELD_FIELDS);
            $value = (string)$value;
            $this->fields = $value;
        }
        return $this->fields;
    }
    /**
     * @return string
     */
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            $value = $this->raw(ShoppingListSetTextLineItemCustomTypeAction::FIELD_TEXT_LINE_ITEM_ID);
            $value = (string)$value;
            $this->textLineItemId = $value;
        }
        return $this->textLineItemId;
    }
    /**
     * @return TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(ShoppingListSetTextLineItemCustomTypeAction::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(TypeReference::class, null);
            }
            $value = $this->mapData(TypeReference::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields)
    {
        $this->fields = (string)$fields;

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
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type)
    {
        $this->type = $type;

        return $this;
    }

}
