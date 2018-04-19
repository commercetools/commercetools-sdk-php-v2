<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeSetCartPredicateActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeSetCartPredicateActionCollection
{

    /**
     * @param DiscountCodeSetCartPredicateAction $value
     * @return DiscountCodeSetCartPredicateActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeSetCartPredicateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeSetCartPredicateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeSetCartPredicateAction) {
            $data = $this->mapData(DiscountCodeSetCartPredicateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
