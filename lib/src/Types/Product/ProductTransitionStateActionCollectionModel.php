<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTransitionStateActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductTransitionStateActionCollection
{

    /**
     * @param ProductTransitionStateAction $value
     * @return ProductTransitionStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTransitionStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTransitionStateAction) {
            $data = $this->mapData(ProductTransitionStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
