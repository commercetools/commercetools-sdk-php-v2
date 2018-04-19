<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductPublishedMessageCollectionModel extends MessageCollectionModel implements ProductPublishedMessageCollection
{

    /**
     * @param ProductPublishedMessage $value
     * @return ProductPublishedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductPublishedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductPublishedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductPublishedMessage) {
            $data = $this->mapData(ProductPublishedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
