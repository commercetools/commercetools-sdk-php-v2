<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShippingRateDraftCollectionModel extends JsonCollection implements ShippingRateDraftCollection {

    /**
     * @param ShippingRateDraft $value
     * @return ShippingRateDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingRateDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingRateDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingRateDraft) {
            $data = $this->mapData(ShippingRateDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
