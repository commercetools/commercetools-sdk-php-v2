<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;

class CustomLineItemDraftCollectionModel extends JsonCollection implements CustomLineItemDraftCollection {

    /**
     * @param CustomLineItemDraft $value
     * @return CustomLineItemDraftCollection
     */
    public function add($value) {
        if (!$value instanceof CustomLineItemDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomLineItemDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomLineItemDraft) {
            $data = $this->mapData(CustomLineItemDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
