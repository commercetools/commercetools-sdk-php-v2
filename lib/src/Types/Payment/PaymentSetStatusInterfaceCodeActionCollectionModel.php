<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetStatusInterfaceCodeActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetStatusInterfaceCodeActionCollection {

    /**
     * @param PaymentSetStatusInterfaceCodeAction $value
     * @return PaymentSetStatusInterfaceCodeActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetStatusInterfaceCodeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetStatusInterfaceCodeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetStatusInterfaceCodeAction) {
            $data = $this->mapData(PaymentSetStatusInterfaceCodeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
