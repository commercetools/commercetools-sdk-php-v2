<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerChangePasswordCollectionModel extends JsonCollection implements CustomerChangePasswordCollection {

    /**
     * @param CustomerChangePassword $value
     * @return CustomerChangePasswordCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerChangePassword) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerChangePassword
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerChangePassword) {
            $data = $this->mapData(CustomerChangePassword::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
