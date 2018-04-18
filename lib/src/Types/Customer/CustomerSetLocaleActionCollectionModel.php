<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetLocaleActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetLocaleActionCollection {

    /**
     * @param CustomerSetLocaleAction $value
     * @return CustomerSetLocaleActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetLocaleAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetLocaleAction) {
            $data = $this->mapData(CustomerSetLocaleAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
