<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetMethodInfoNameActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetMethodInfoNameActionCollection
{

    /**
     * @param PaymentSetMethodInfoNameAction $value
     * @return PaymentSetMethodInfoNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetMethodInfoNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetMethodInfoNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetMethodInfoNameAction) {
            $data = $this->mapData(PaymentSetMethodInfoNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
