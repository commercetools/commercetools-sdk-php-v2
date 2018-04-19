<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductMoveImageToPositionActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductMoveImageToPositionActionCollection
{

    /**
     * @param ProductMoveImageToPositionAction $value
     * @return ProductMoveImageToPositionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductMoveImageToPositionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductMoveImageToPositionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductMoveImageToPositionAction) {
            $data = $this->mapData(ProductMoveImageToPositionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
