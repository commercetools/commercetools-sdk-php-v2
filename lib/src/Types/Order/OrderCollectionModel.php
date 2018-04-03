<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class OrderCollectionModel extends JsonCollection implements OrderCollection {

    /**
     * @param Order $value
     * @return OrderCollection
     */
    public function add($value) {
        if (!$value instanceof Order) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Order
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Order) {
            $data = $this->mapData(Order::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @param string $id
     * @return Order
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
