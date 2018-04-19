<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetAmountPaidActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetAmountPaidActionCollection
{

    /**
     * @param PaymentSetAmountPaidAction $value
     * @return PaymentSetAmountPaidActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetAmountPaidAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetAmountPaidAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetAmountPaidAction) {
            $data = $this->mapData(PaymentSetAmountPaidAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
