<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionModel;

use Commercetools\Types\Type\TypeReference;

class OrderSetLineItemCustomTypeActionModel extends OrderUpdateActionModel implements OrderSetLineItemCustomTypeAction {
    const DISCRIMINATOR_VALUE = 'setLineItemCustomType';

    /**
     * @var string
     */
    protected $fields;
    /**
     * @var string
     */
    protected $lineItemId;
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
            $value = $this->raw(OrderSetLineItemCustomTypeAction::FIELD_FIELDS);
            $value = (string)$value;
            $this->fields = $value;
        }
        return $this->fields;
    }
    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(OrderSetLineItemCustomTypeAction::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
    }
    /**
     * @return TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(OrderSetLineItemCustomTypeAction::FIELD_TYPE);
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
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId)
    {
        $this->lineItemId = (string)$lineItemId;

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
