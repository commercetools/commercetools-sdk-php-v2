<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentTransitionStateActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentTransitionStateActionCollection
{

    /**
     * @param PaymentTransitionStateAction $value
     * @return PaymentTransitionStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentTransitionStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentTransitionStateAction) {
            $data = $this->mapData(PaymentTransitionStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
