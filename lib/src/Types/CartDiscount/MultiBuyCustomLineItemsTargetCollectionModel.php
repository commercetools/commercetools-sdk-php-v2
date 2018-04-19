<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class MultiBuyCustomLineItemsTargetCollectionModel extends CartDiscountTargetCollectionModel implements MultiBuyCustomLineItemsTargetCollection
{

    /**
     * @param MultiBuyCustomLineItemsTarget $value
     * @return MultiBuyCustomLineItemsTargetCollection
     */
    public function add($value) {
        if (!$value instanceof MultiBuyCustomLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MultiBuyCustomLineItemsTarget
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MultiBuyCustomLineItemsTarget) {
            $data = $this->mapData(MultiBuyCustomLineItemsTarget::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
