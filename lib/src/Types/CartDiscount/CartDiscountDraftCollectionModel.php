<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CartDiscountDraftCollectionModel extends JsonCollection implements CartDiscountDraftCollection {

    /**
     * @param CartDiscountDraft $value
     * @return CartDiscountDraftCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountDraft) {
            $data = $this->mapData(CartDiscountDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
