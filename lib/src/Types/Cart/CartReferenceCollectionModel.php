<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartReferenceCollectionModel extends ReferenceCollectionModel implements CartReferenceCollection {

    /**
     * @param CartReference $value
     * @return CartReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof CartReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartReference) {
            $data = $this->mapData(CartReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
