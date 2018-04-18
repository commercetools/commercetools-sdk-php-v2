<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetSalutationActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetSalutationActionCollection {

    /**
     * @param CustomerSetSalutationAction $value
     * @return CustomerSetSalutationActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetSalutationAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetSalutationAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetSalutationAction) {
            $data = $this->mapData(CustomerSetSalutationAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
