<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetKeyActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetKeyActionCollection
{

    /**
     * @param ProductSetKeyAction $value
     * @return ProductSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetKeyAction) {
            $data = $this->mapData(ProductSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
