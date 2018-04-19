<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetExternalIdActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetExternalIdActionCollection
{

    /**
     * @param CustomerSetExternalIdAction $value
     * @return CustomerSetExternalIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetExternalIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetExternalIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetExternalIdAction) {
            $data = $this->mapData(CustomerSetExternalIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
