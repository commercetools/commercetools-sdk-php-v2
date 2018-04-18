<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetDateOfBirthActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetDateOfBirthActionCollection {

    /**
     * @param CustomerSetDateOfBirthAction $value
     * @return CustomerSetDateOfBirthActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetDateOfBirthAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetDateOfBirthAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetDateOfBirthAction) {
            $data = $this->mapData(CustomerSetDateOfBirthAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
