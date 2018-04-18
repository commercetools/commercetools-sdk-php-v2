<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetMethodInfoInterfaceActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetMethodInfoInterfaceActionCollection {

    /**
     * @param PaymentSetMethodInfoInterfaceAction $value
     * @return PaymentSetMethodInfoInterfaceActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetMethodInfoInterfaceAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetMethodInfoInterfaceAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetMethodInfoInterfaceAction) {
            $data = $this->mapData(PaymentSetMethodInfoInterfaceAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
