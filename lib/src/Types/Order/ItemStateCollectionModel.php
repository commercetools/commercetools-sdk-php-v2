<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ItemStateCollectionModel extends JsonCollection implements ItemStateCollection {

    /**
     * @param ItemState $value
     * @return ItemStateCollection
     */
    public function add($value) {
        if (!$value instanceof ItemState) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ItemState
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ItemState) {
            $data = $this->mapData(ItemState::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
