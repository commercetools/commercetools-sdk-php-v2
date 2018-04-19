<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomLineItemCollectionModel extends JsonCollection implements CustomLineItemCollection
{

    /**
     * @param CustomLineItem $value
     * @return CustomLineItemCollection
     */
    public function add($value) {
        if (!$value instanceof CustomLineItem) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomLineItem
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomLineItem) {
            $data = $this->mapData(CustomLineItem::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
