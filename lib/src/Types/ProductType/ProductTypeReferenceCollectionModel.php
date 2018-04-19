<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeReferenceCollectionModel extends ReferenceCollectionModel implements ProductTypeReferenceCollection
{

    /**
     * @param ProductTypeReference $value
     * @return ProductTypeReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeReference) {
            $data = $this->mapData(ProductTypeReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
