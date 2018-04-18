<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShippingRateInputDraftCollectionModel extends JsonCollection implements ShippingRateInputDraftCollection {

    /**
     * @param ShippingRateInputDraft $value
     * @return ShippingRateInputDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingRateInputDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingRateInputDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingRateInputDraft) {
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInputDraft::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
