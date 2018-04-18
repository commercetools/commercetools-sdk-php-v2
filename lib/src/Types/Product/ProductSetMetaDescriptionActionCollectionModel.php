<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetMetaDescriptionActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetMetaDescriptionActionCollection {

    /**
     * @param ProductSetMetaDescriptionAction $value
     * @return ProductSetMetaDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetMetaDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetMetaDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetMetaDescriptionAction) {
            $data = $this->mapData(ProductSetMetaDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
