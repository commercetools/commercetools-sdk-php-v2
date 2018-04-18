<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeChangeGroupsActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeChangeGroupsActionCollection {

    /**
     * @param DiscountCodeChangeGroupsAction $value
     * @return DiscountCodeChangeGroupsActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeChangeGroupsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeChangeGroupsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeChangeGroupsAction) {
            $data = $this->mapData(DiscountCodeChangeGroupsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
