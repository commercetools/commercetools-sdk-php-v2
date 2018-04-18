<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerTokenCollectionModel extends JsonCollection implements CustomerTokenCollection {

    /**
     * @param CustomerToken $value
     * @return CustomerTokenCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerToken) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerToken
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerToken) {
            $data = $this->mapData(CustomerToken::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
