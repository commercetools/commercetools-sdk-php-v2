<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class AddressCollectionModel extends JsonCollection implements AddressCollection {

    /**
     * @param Address $value
     * @return AddressCollection
     */
    public function add($value) {
        if (!$value instanceof Address) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Address
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Address) {
            $data = $this->mapData(Address::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
