<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetCustomFieldActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetCustomFieldActionCollection {

    /**
     * @param PaymentSetCustomFieldAction $value
     * @return PaymentSetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetCustomFieldAction) {
            $data = $this->mapData(PaymentSetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
