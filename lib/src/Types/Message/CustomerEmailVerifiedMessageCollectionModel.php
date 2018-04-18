<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerEmailVerifiedMessageCollectionModel extends MessageCollectionModel implements CustomerEmailVerifiedMessageCollection {

    /**
     * @param CustomerEmailVerifiedMessage $value
     * @return CustomerEmailVerifiedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerEmailVerifiedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerEmailVerifiedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerEmailVerifiedMessage) {
            $data = $this->mapData(CustomerEmailVerifiedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
