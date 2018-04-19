<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductAddToCategoryActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductAddToCategoryActionCollection
{

    /**
     * @param ProductAddToCategoryAction $value
     * @return ProductAddToCategoryActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductAddToCategoryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductAddToCategoryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductAddToCategoryAction) {
            $data = $this->mapData(ProductAddToCategoryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
