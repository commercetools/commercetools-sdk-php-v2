<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeUpdateActionCollectionModel extends UpdateActionCollectionModel implements DiscountCodeUpdateActionCollection {

    /**
     * @param DiscountCodeUpdateAction $value
     * @return DiscountCodeUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(DiscountCodeUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
