<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetCustomFieldActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetCustomFieldActionCollection {

    /**
     * @param CustomerSetCustomFieldAction $value
     * @return CustomerSetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetCustomFieldAction) {
            $data = $this->mapData(CustomerSetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
