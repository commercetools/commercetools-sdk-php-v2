<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\Common\Money;

class CartSetLineItemPriceActionModel extends CartUpdateActionModel implements CartSetLineItemPriceAction {
    const DISCRIMINATOR_VALUE = 'setLineItemPrice';

    /**
     * @var Money
     */
    protected $externalPrice;
    /**
     * @var string
     */
    protected $lineItemId;

    /**
     * @return Money
     */
    public function getExternalPrice()
    {
        if (is_null($this->externalPrice)) {
            $value = $this->raw(CartSetLineItemPriceAction::FIELD_EXTERNAL_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->externalPrice = $value;
        }
        return $this->externalPrice;
    }
    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(CartSetLineItemPriceAction::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
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
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId)
    {
        $this->lineItemId = (string)$lineItemId;

        return $this;
    }

}
