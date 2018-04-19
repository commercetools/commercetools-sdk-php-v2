<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductVariantChannelAvailabilityCollectionModel extends JsonCollection implements ProductVariantChannelAvailabilityCollection
{

    /**
     * @param ProductVariantChannelAvailability $value
     * @return ProductVariantChannelAvailabilityCollection
     */
    public function add($value) {
        if (!$value instanceof ProductVariantChannelAvailability) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductVariantChannelAvailability
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductVariantChannelAvailability) {
            $data = $this->mapData(ProductVariantChannelAvailability::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
