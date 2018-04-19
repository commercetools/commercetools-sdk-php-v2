<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\CartDiscount\CartDiscountValueModel;

use Commercetools\Types\Common\MoneyCollection;
use Commercetools\Types\Common\Money;

class CartDiscountValueAbsoluteModel extends CartDiscountValueModel implements CartDiscountValueAbsolute
{
    const DISCRIMINATOR_VALUE = 'absolute';

    /**
     * @var MoneyCollection
     */
    protected $money;

    /**
     * @return MoneyCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            $value = $this->raw(CartDiscountValueAbsolute::FIELD_MONEY);
            if (is_null($value)) {
                return $this->mapData(MoneyCollection::class, null);
            }
            $value = $this->mapData(MoneyCollection::class, $value);
            $this->money = $value;
        }
        return $this->money;
    }

    /**
     * @param MoneyCollection $money
     * @return $this
     */
    public function setMoney(MoneyCollection $money)
    {
        $this->money = $money;

        return $this;
    }

}
