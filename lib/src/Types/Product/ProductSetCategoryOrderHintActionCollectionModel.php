<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetCategoryOrderHintActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetCategoryOrderHintActionCollection
{

    /**
     * @param ProductSetCategoryOrderHintAction $value
     * @return ProductSetCategoryOrderHintActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetCategoryOrderHintAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetCategoryOrderHintAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetCategoryOrderHintAction) {
            $data = $this->mapData(ProductSetCategoryOrderHintAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
