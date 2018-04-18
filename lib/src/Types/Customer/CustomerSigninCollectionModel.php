<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerSigninCollectionModel extends JsonCollection implements CustomerSigninCollection {

    /**
     * @param CustomerSignin $value
     * @return CustomerSigninCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSignin) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSignin
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSignin) {
            $data = $this->mapData(CustomerSignin::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
