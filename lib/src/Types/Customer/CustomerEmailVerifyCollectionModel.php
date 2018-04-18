<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerEmailVerifyCollectionModel extends JsonCollection implements CustomerEmailVerifyCollection {

    /**
     * @param CustomerEmailVerify $value
     * @return CustomerEmailVerifyCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerEmailVerify) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerEmailVerify
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerEmailVerify) {
            $data = $this->mapData(CustomerEmailVerify::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
