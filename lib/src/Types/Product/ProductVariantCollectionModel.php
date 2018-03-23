<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;

class ProductVariantCollectionModel extends JsonCollection implements ProductVariantCollection {

    /**
     * @param ProductVariant $value
     * @return ProductVariantCollection
     */
    public function add($value) {
        if (!$value instanceof ProductVariant) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductVariant
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductVariant) {
            $data = $this->mapData(ProductVariant::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
