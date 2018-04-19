<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderImportLineItemStateActionModel extends OrderUpdateActionModel implements OrderImportLineItemStateAction
{
    const DISCRIMINATOR_VALUE = 'importLineItemState';

    /**
     * @var string
     */
    protected $lineItemId;
    /**
     * @var ItemStateCollection
     */
    protected $state;

    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(OrderImportLineItemStateAction::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
    }
    /**
     * @return ItemStateCollection
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(OrderImportLineItemStateAction::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(ItemStateCollection::class, null);
            }
            $value = $this->mapData(ItemStateCollection::class, $value);
            $this->state = $value;
        }
        return $this->state;
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
     * @param ItemStateCollection $state
     * @return $this
     */
    public function setState(ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }

}
