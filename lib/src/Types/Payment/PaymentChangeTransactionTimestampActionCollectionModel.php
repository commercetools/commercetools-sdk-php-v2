<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentChangeTransactionTimestampActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentChangeTransactionTimestampActionCollection {

    /**
     * @param PaymentChangeTransactionTimestampAction $value
     * @return PaymentChangeTransactionTimestampActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentChangeTransactionTimestampAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentChangeTransactionTimestampAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentChangeTransactionTimestampAction) {
            $data = $this->mapData(PaymentChangeTransactionTimestampAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
