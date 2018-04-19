<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetAmountRefundedActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetAmountRefundedActionCollection
{

    /**
     * @param PaymentSetAmountRefundedAction $value
     * @return PaymentSetAmountRefundedActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetAmountRefundedAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetAmountRefundedAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetAmountRefundedAction) {
            $data = $this->mapData(PaymentSetAmountRefundedAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
