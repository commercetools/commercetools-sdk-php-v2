<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetCompanyNameActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetCompanyNameActionCollection
{

    /**
     * @param CustomerSetCompanyNameAction $value
     * @return CustomerSetCompanyNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetCompanyNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetCompanyNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetCompanyNameAction) {
            $data = $this->mapData(CustomerSetCompanyNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
