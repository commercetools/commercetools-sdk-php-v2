<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;

class ReturnItemCollectionModel extends JsonCollection implements ReturnItemCollection {

    /**
     * @param ReturnItem $value
     * @return ReturnItemCollection
     */
    public function add($value) {
        if (!$value instanceof ReturnItem) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReturnItem
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReturnItem) {
            $data = $this->mapData(ReturnItem::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
