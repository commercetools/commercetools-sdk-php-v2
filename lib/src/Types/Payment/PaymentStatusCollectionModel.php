<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class PaymentStatusCollectionModel extends JsonCollection implements PaymentStatusCollection {

    /**
     * @param PaymentStatus $value
     * @return PaymentStatusCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentStatus) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentStatus
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentStatus) {
            $data = $this->mapData(PaymentStatus::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
