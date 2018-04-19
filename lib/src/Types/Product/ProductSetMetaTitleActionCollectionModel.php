<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetMetaTitleActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetMetaTitleActionCollection
{

    /**
     * @param ProductSetMetaTitleAction $value
     * @return ProductSetMetaTitleActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetMetaTitleAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetMetaTitleAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetMetaTitleAction) {
            $data = $this->mapData(ProductSetMetaTitleAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
