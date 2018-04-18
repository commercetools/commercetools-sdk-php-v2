<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryCreatedMessageCollectionModel extends MessageCollectionModel implements CategoryCreatedMessageCollection {

    /**
     * @param CategoryCreatedMessage $value
     * @return CategoryCreatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryCreatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryCreatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryCreatedMessage) {
            $data = $this->mapData(CategoryCreatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
