<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetCustomTypeActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetCustomTypeActionCollection {

    /**
     * @param PaymentSetCustomTypeAction $value
     * @return PaymentSetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetCustomTypeAction) {
            $data = $this->mapData(PaymentSetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
