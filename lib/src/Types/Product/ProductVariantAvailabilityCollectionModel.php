<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductVariantAvailabilityCollectionModel extends JsonCollection implements ProductVariantAvailabilityCollection
{

    /**
     * @param ProductVariantAvailability $value
     * @return ProductVariantAvailabilityCollection
     */
    public function add($value) {
        if (!$value instanceof ProductVariantAvailability) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductVariantAvailability
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductVariantAvailability) {
            $data = $this->mapData(ProductVariantAvailability::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
