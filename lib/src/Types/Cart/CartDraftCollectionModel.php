<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CartDraftCollectionModel extends JsonCollection implements CartDraftCollection
{

    /**
     * @param CartDraft $value
     * @return CartDraftCollection
     */
    public function add($value) {
        if (!$value instanceof CartDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDraft) {
            $data = $this->mapData(CartDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
