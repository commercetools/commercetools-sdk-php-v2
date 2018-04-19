<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerGroupSetMessageCollectionModel extends MessageCollectionModel implements CustomerGroupSetMessageCollection
{

    /**
     * @param CustomerGroupSetMessage $value
     * @return CustomerGroupSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroupSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroupSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroupSetMessage) {
            $data = $this->mapData(CustomerGroupSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
