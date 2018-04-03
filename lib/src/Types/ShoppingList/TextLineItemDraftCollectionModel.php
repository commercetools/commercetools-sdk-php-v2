<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class TextLineItemDraftCollectionModel extends JsonCollection implements TextLineItemDraftCollection {

    /**
     * @param TextLineItemDraft $value
     * @return TextLineItemDraftCollection
     */
    public function add($value) {
        if (!$value instanceof TextLineItemDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TextLineItemDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TextLineItemDraft) {
            $data = $this->mapData(TextLineItemDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
