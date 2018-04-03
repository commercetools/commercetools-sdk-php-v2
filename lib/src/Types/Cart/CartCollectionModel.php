<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CartCollectionModel extends JsonCollection implements CartCollection {

    /**
     * @param Cart $value
     * @return CartCollection
     */
    public function add($value) {
        if (!$value instanceof Cart) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Cart
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Cart) {
            $data = $this->mapData(Cart::class, $data);
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
     * @return Cart
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
