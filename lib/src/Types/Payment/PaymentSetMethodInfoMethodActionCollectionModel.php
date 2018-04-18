<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetMethodInfoMethodActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetMethodInfoMethodActionCollection {

    /**
     * @param PaymentSetMethodInfoMethodAction $value
     * @return PaymentSetMethodInfoMethodActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetMethodInfoMethodAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetMethodInfoMethodAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetMethodInfoMethodAction) {
            $data = $this->mapData(PaymentSetMethodInfoMethodAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
