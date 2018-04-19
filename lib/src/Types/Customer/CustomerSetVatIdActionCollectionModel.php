<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetVatIdActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetVatIdActionCollection
{

    /**
     * @param CustomerSetVatIdAction $value
     * @return CustomerSetVatIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetVatIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetVatIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetVatIdAction) {
            $data = $this->mapData(CustomerSetVatIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
