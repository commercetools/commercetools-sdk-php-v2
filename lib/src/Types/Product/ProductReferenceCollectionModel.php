<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductReferenceCollectionModel extends ReferenceCollectionModel implements ProductReferenceCollection
{

    /**
     * @param ProductReference $value
     * @return ProductReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof ProductReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductReference) {
            $data = $this->mapData(ProductReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
