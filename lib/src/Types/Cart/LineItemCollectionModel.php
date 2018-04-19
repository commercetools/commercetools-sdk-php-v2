<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class LineItemCollectionModel extends JsonCollection implements LineItemCollection
{

    /**
     * @param LineItem $value
     * @return LineItemCollection
     */
    public function add($value) {
        if (!$value instanceof LineItem) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return LineItem
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof LineItem) {
            $data = $this->mapData(LineItem::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
