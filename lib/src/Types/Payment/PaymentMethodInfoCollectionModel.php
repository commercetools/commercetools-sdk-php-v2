<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class PaymentMethodInfoCollectionModel extends JsonCollection implements PaymentMethodInfoCollection
{

    /**
     * @param PaymentMethodInfo $value
     * @return PaymentMethodInfoCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentMethodInfo) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentMethodInfo
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentMethodInfo) {
            $data = $this->mapData(PaymentMethodInfo::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
