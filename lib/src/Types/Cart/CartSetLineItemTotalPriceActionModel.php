<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetLineItemTotalPriceActionModel extends CartUpdateActionModel implements CartSetLineItemTotalPriceAction {
    const DISCRIMINATOR_VALUE = 'setLineItemTotalPrice';

    /**
     * @var ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;
    /**
     * @var string
     */
    protected $lineItemId;

    /**
     * @return ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        if (is_null($this->externalTotalPrice)) {
            $value = $this->raw(CartSetLineItemTotalPriceAction::FIELD_EXTERNAL_TOTAL_PRICE);
            if (is_null($value)) {
                return $this->mapData(ExternalLineItemTotalPrice::class, null);
            }
            $value = $this->mapData(ExternalLineItemTotalPrice::class, $value);

            $this->externalTotalPrice = $value;
        }
        return $this->externalTotalPrice;
    }
    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(CartSetLineItemTotalPriceAction::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
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
