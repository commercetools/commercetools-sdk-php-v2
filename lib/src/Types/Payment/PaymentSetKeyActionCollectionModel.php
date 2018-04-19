<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetKeyActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetKeyActionCollection
{

    /**
     * @param PaymentSetKeyAction $value
     * @return PaymentSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetKeyAction) {
            $data = $this->mapData(PaymentSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
