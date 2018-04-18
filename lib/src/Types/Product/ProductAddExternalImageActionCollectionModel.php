<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductAddExternalImageActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductAddExternalImageActionCollection {

    /**
     * @param ProductAddExternalImageAction $value
     * @return ProductAddExternalImageActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductAddExternalImageAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductAddExternalImageAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductAddExternalImageAction) {
            $data = $this->mapData(ProductAddExternalImageAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
