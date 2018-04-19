<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentReferenceCollectionModel extends ReferenceCollectionModel implements PaymentReferenceCollection
{

    /**
     * @param PaymentReference $value
     * @return PaymentReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentReference) {
            $data = $this->mapData(PaymentReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
