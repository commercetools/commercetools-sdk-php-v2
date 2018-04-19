<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetLastNameActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetLastNameActionCollection
{

    /**
     * @param CustomerSetLastNameAction $value
     * @return CustomerSetLastNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetLastNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetLastNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetLastNameAction) {
            $data = $this->mapData(CustomerSetLastNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
