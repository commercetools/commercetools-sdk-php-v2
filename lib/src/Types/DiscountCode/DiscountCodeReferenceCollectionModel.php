<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeReferenceCollectionModel extends ReferenceCollectionModel implements DiscountCodeReferenceCollection
{

    /**
     * @param DiscountCodeReference $value
     * @return DiscountCodeReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeReference) {
            $data = $this->mapData(DiscountCodeReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
