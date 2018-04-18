<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetCustomerGroupActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetCustomerGroupActionCollection {

    /**
     * @param CustomerSetCustomerGroupAction $value
     * @return CustomerSetCustomerGroupActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetCustomerGroupAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetCustomerGroupAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetCustomerGroupAction) {
            $data = $this->mapData(CustomerSetCustomerGroupAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
