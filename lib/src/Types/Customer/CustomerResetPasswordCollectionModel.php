<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerResetPasswordCollectionModel extends JsonCollection implements CustomerResetPasswordCollection {

    /**
     * @param CustomerResetPassword $value
     * @return CustomerResetPasswordCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerResetPassword) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerResetPassword
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerResetPassword) {
            $data = $this->mapData(CustomerResetPassword::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
