<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerCompanyNameSetMessageCollectionModel extends MessageCollectionModel implements CustomerCompanyNameSetMessageCollection {

    /**
     * @param CustomerCompanyNameSetMessage $value
     * @return CustomerCompanyNameSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerCompanyNameSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerCompanyNameSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerCompanyNameSetMessage) {
            $data = $this->mapData(CustomerCompanyNameSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
