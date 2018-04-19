<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShippingInfoCollectionModel extends JsonCollection implements ShippingInfoCollection
{

    /**
     * @param ShippingInfo $value
     * @return ShippingInfoCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingInfo) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingInfo
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingInfo) {
            $data = $this->mapData(ShippingInfo::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
