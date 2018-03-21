<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionModel;

use Commercetools\Types\Common\Money;

class PaymentSetAmountPaidActionModel extends PaymentUpdateActionModel implements PaymentSetAmountPaidAction {
    const DISCRIMINATOR_VALUE = 'setAmountPaid';

    /**
     * @var Money
     */
    protected $amount;

    /**
     * @return Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            $value = $this->raw(PaymentSetAmountPaidAction::FIELD_AMOUNT);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->amount = $value;
        }
        return $this->amount;
    }

    /**
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

}
