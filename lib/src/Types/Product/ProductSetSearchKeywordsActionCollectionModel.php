<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetSearchKeywordsActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetSearchKeywordsActionCollection {

    /**
     * @param ProductSetSearchKeywordsAction $value
     * @return ProductSetSearchKeywordsActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetSearchKeywordsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetSearchKeywordsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetSearchKeywordsAction) {
            $data = $this->mapData(ProductSetSearchKeywordsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
