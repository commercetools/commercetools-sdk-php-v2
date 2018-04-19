<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetTaxCategoryActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetTaxCategoryActionCollection
{

    /**
     * @param ProductSetTaxCategoryAction $value
     * @return ProductSetTaxCategoryActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetTaxCategoryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetTaxCategoryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetTaxCategoryAction) {
            $data = $this->mapData(ProductSetTaxCategoryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
