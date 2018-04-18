<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductCreatedMessageCollectionModel extends MessageCollectionModel implements ProductCreatedMessageCollection {

    /**
     * @param ProductCreatedMessage $value
     * @return ProductCreatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductCreatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductCreatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductCreatedMessage) {
            $data = $this->mapData(ProductCreatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
