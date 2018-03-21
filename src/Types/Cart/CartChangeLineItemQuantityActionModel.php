<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\Common\Money;

class CartChangeLineItemQuantityActionModel extends CartUpdateActionModel implements CartChangeLineItemQuantityAction {
    const DISCRIMINATOR_VALUE = 'changeLineItemQuantity';

    /**
     * @var string
     */
    protected $lineItemId;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var Money
     */
    protected $externalPrice;
    /**
     * @var ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;

    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(CartChangeLineItemQuantityAction::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(CartChangeLineItemQuantityAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return Money
     */
    public function getExternalPrice()
    {
        if (is_null($this->externalPrice)) {
            $value = $this->raw(CartChangeLineItemQuantityAction::FIELD_EXTERNAL_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->externalPrice = $value;
        }
        return $this->externalPrice;
    }
    /**
     * @return ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        if (is_null($this->externalTotalPrice)) {
            $value = $this->raw(CartChangeLineItemQuantityAction::FIELD_EXTERNAL_TOTAL_PRICE);
            if (is_null($value)) {
                return $this->mapData(ExternalLineItemTotalPrice::class, null);
            }
            $value = $this->mapData(ExternalLineItemTotalPrice::class, $value);

            $this->externalTotalPrice = $value;
        }
        return $this->externalTotalPrice;
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
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param Money $externalPrice
     * @return $this
     */
    public function setExternalPrice(Money $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }
    /**
     * @param ExternalLineItemTotalPrice $externalTotalPrice
     * @return $this
     */
    public function setExternalTotalPrice(ExternalLineItemTotalPrice $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

}
