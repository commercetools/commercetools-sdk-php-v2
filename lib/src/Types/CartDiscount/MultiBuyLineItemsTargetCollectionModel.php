<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class MultiBuyLineItemsTargetCollectionModel extends CartDiscountTargetCollectionModel implements MultiBuyLineItemsTargetCollection {

    /**
     * @param MultiBuyLineItemsTarget $value
     * @return MultiBuyLineItemsTargetCollection
     */
    public function add($value) {
        if (!$value instanceof MultiBuyLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MultiBuyLineItemsTarget
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MultiBuyLineItemsTarget) {
            $data = $this->mapData(MultiBuyLineItemsTarget::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
