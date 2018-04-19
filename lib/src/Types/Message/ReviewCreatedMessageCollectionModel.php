<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewCreatedMessageCollectionModel extends MessageCollectionModel implements ReviewCreatedMessageCollection
{

    /**
     * @param ReviewCreatedMessage $value
     * @return ReviewCreatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewCreatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewCreatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewCreatedMessage) {
            $data = $this->mapData(ReviewCreatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
