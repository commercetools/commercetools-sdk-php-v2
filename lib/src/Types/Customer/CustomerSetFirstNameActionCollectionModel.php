<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetFirstNameActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetFirstNameActionCollection
{

    /**
     * @param CustomerSetFirstNameAction $value
     * @return CustomerSetFirstNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetFirstNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetFirstNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetFirstNameAction) {
            $data = $this->mapData(CustomerSetFirstNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
