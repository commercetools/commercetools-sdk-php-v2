<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetMetaKeywordsActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetMetaKeywordsActionCollection
{

    /**
     * @param ProductSetMetaKeywordsAction $value
     * @return ProductSetMetaKeywordsActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetMetaKeywordsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetMetaKeywordsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetMetaKeywordsAction) {
            $data = $this->mapData(ProductSetMetaKeywordsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
