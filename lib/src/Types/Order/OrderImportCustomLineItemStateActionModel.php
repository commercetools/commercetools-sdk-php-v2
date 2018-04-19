<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderImportCustomLineItemStateActionModel extends OrderUpdateActionModel implements OrderImportCustomLineItemStateAction
{
    const DISCRIMINATOR_VALUE = 'importCustomLineItemState';

    /**
     * @var string
     */
    protected $customLineItemId;
    /**
     * @var ItemStateCollection
     */
    protected $state;

    /**
     * @return string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            $value = $this->raw(OrderImportCustomLineItemStateAction::FIELD_CUSTOM_LINE_ITEM_ID);
            $value = (string)$value;
            $this->customLineItemId = $value;
        }
        return $this->customLineItemId;
    }
    /**
     * @return ItemStateCollection
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(OrderImportCustomLineItemStateAction::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(ItemStateCollection::class, null);
            }
            $value = $this->mapData(ItemStateCollection::class, $value);
            $this->state = $value;
        }
        return $this->state;
    }

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId)
    {
        $this->customLineItemId = (string)$customLineItemId;

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
