<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonCollection;

class TextLineItemCollectionModel extends JsonCollection implements TextLineItemCollection {

    /**
     * @param TextLineItem $value
     * @return TextLineItemCollection
     */
    public function add($value) {
        if (!$value instanceof TextLineItem) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TextLineItem
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TextLineItem) {
            $data = $this->mapData(TextLineItem::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
