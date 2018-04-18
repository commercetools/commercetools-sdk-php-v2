<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerEmailChangedMessageCollectionModel extends MessageCollectionModel implements CustomerEmailChangedMessageCollection {

    /**
     * @param CustomerEmailChangedMessage $value
     * @return CustomerEmailChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerEmailChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerEmailChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerEmailChangedMessage) {
            $data = $this->mapData(CustomerEmailChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
