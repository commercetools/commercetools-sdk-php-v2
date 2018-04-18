<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetTitleActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetTitleActionCollection {

    /**
     * @param CustomerSetTitleAction $value
     * @return CustomerSetTitleActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetTitleAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetTitleAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetTitleAction) {
            $data = $this->mapData(CustomerSetTitleAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
