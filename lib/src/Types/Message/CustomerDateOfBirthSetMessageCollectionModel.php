<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerDateOfBirthSetMessageCollectionModel extends MessageCollectionModel implements CustomerDateOfBirthSetMessageCollection
{

    /**
     * @param CustomerDateOfBirthSetMessage $value
     * @return CustomerDateOfBirthSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerDateOfBirthSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerDateOfBirthSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerDateOfBirthSetMessage) {
            $data = $this->mapData(CustomerDateOfBirthSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
