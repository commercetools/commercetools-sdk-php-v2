<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeSetValidUntilActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeSetValidUntilActionCollection {

    /**
     * @param DiscountCodeSetValidUntilAction $value
     * @return DiscountCodeSetValidUntilActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeSetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeSetValidUntilAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeSetValidUntilAction) {
            $data = $this->mapData(DiscountCodeSetValidUntilAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
