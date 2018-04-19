<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeUpdateCollectionModel extends UpdateCollectionModel implements DiscountCodeUpdateCollection
{

    /**
     * @param DiscountCodeUpdate $value
     * @return DiscountCodeUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeUpdate) {
            $data = $this->mapData(DiscountCodeUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
