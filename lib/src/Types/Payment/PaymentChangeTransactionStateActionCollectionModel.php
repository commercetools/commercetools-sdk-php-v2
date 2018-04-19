<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentChangeTransactionStateActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentChangeTransactionStateActionCollection
{

    /**
     * @param PaymentChangeTransactionStateAction $value
     * @return PaymentChangeTransactionStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentChangeTransactionStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentChangeTransactionStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentChangeTransactionStateAction) {
            $data = $this->mapData(PaymentChangeTransactionStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
