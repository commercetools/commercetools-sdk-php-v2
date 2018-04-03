<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class PaymentUpdateActionCollectionModel extends JsonCollection implements PaymentUpdateActionCollection {

    /**
     * @param PaymentUpdateAction $value
     * @return PaymentUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(PaymentUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
