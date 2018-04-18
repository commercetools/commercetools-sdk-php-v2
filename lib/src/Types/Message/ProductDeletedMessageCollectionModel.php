<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDeletedMessageCollectionModel extends MessageCollectionModel implements ProductDeletedMessageCollection {

    /**
     * @param ProductDeletedMessage $value
     * @return ProductDeletedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDeletedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDeletedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDeletedMessage) {
            $data = $this->mapData(ProductDeletedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
