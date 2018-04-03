<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class MessageCollectionModel extends JsonCollection implements MessageCollection {

    /**
     * @param Message $value
     * @return MessageCollection
     */
    public function add($value) {
        if (!$value instanceof Message) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Message
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Message) {
            $resolvedClass = $this->resolveDiscriminator(Message::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
