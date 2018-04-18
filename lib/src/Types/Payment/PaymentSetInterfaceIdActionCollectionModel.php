<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetInterfaceIdActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetInterfaceIdActionCollection {

    /**
     * @param PaymentSetInterfaceIdAction $value
     * @return PaymentSetInterfaceIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetInterfaceIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetInterfaceIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetInterfaceIdAction) {
            $data = $this->mapData(PaymentSetInterfaceIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
