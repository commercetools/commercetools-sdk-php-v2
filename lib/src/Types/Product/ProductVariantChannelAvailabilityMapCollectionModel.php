<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductVariantChannelAvailabilityMapCollectionModel extends JsonCollection implements ProductVariantChannelAvailabilityMapCollection {

    /**
     * @param ProductVariantChannelAvailabilityMap $value
     * @return ProductVariantChannelAvailabilityMapCollection
     */
    public function add($value) {
        if (!$value instanceof ProductVariantChannelAvailabilityMap) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductVariantChannelAvailabilityMap
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductVariantChannelAvailabilityMap) {
            $data = $this->mapData(ProductVariantChannelAvailabilityMap::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
