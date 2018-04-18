<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentUpdateCollectionModel extends UpdateCollectionModel implements PaymentUpdateCollection {

    /**
     * @param PaymentUpdate $value
     * @return PaymentUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentUpdate) {
            $data = $this->mapData(PaymentUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
