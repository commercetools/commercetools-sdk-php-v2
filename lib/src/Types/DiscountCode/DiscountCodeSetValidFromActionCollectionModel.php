<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeSetValidFromActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeSetValidFromActionCollection {

    /**
     * @param DiscountCodeSetValidFromAction $value
     * @return DiscountCodeSetValidFromActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeSetValidFromAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeSetValidFromAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeSetValidFromAction) {
            $data = $this->mapData(DiscountCodeSetValidFromAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
