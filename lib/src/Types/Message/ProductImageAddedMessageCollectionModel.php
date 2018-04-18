<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductImageAddedMessageCollectionModel extends MessageCollectionModel implements ProductImageAddedMessageCollection {

    /**
     * @param ProductImageAddedMessage $value
     * @return ProductImageAddedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductImageAddedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductImageAddedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductImageAddedMessage) {
            $data = $this->mapData(ProductImageAddedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
