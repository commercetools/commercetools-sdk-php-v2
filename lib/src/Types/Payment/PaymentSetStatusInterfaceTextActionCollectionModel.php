<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetStatusInterfaceTextActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetStatusInterfaceTextActionCollection {

    /**
     * @param PaymentSetStatusInterfaceTextAction $value
     * @return PaymentSetStatusInterfaceTextActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetStatusInterfaceTextAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetStatusInterfaceTextAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetStatusInterfaceTextAction) {
            $data = $this->mapData(PaymentSetStatusInterfaceTextAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
