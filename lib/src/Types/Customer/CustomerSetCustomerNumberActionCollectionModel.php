<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetCustomerNumberActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetCustomerNumberActionCollection
{

    /**
     * @param CustomerSetCustomerNumberAction $value
     * @return CustomerSetCustomerNumberActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetCustomerNumberAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetCustomerNumberAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetCustomerNumberAction) {
            $data = $this->mapData(CustomerSetCustomerNumberAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
