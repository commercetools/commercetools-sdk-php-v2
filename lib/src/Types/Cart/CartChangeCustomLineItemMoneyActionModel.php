<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\Common\Money;

class CartChangeCustomLineItemMoneyActionModel extends CartUpdateActionModel implements CartChangeCustomLineItemMoneyAction {
    const DISCRIMINATOR_VALUE = 'changeCustomLineItemMoney';

    /**
     * @var string
     */
    protected $customLineItemId;
    /**
     * @var Money
     */
    protected $money;

    /**
     * @return string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            $value = $this->raw(CartChangeCustomLineItemMoneyAction::FIELD_CUSTOM_LINE_ITEM_ID);
            $value = (string)$value;
            $this->customLineItemId = $value;
        }
        return $this->customLineItemId;
    }
    /**
     * @return Money
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            $value = $this->raw(CartChangeCustomLineItemMoneyAction::FIELD_MONEY);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->money = $value;
        }
        return $this->money;
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
     * @param Money $money
     * @return $this
     */
    public function setMoney(Money $money)
    {
        $this->money = $money;

        return $this;
    }

}
