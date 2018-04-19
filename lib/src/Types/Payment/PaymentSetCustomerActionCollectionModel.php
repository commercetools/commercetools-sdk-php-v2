<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetCustomerActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetCustomerActionCollection
{

    /**
     * @param PaymentSetCustomerAction $value
     * @return PaymentSetCustomerActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetCustomerAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetCustomerAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetCustomerAction) {
            $data = $this->mapData(PaymentSetCustomerAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
