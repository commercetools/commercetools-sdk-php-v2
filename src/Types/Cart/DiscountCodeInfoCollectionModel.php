<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;

class DiscountCodeInfoCollectionModel extends JsonCollection implements DiscountCodeInfoCollection {

    /**
     * @param DiscountCodeInfo $value
     * @return DiscountCodeInfoCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeInfo) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeInfo
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeInfo) {
            $data = $this->mapData(DiscountCodeInfo::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
