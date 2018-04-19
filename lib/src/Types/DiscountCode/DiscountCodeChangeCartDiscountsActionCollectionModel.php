<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeChangeCartDiscountsActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeChangeCartDiscountsActionCollection
{

    /**
     * @param DiscountCodeChangeCartDiscountsAction $value
     * @return DiscountCodeChangeCartDiscountsActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeChangeCartDiscountsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeChangeCartDiscountsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeChangeCartDiscountsAction) {
            $data = $this->mapData(DiscountCodeChangeCartDiscountsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
