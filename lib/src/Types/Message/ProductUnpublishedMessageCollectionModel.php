<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductUnpublishedMessageCollectionModel extends MessageCollectionModel implements ProductUnpublishedMessageCollection {

    /**
     * @param ProductUnpublishedMessage $value
     * @return ProductUnpublishedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductUnpublishedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductUnpublishedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductUnpublishedMessage) {
            $data = $this->mapData(ProductUnpublishedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
