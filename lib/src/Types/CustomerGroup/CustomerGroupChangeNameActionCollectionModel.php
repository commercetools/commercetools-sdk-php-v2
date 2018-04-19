<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\CustomerGroup\CustomerGroupUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerGroupChangeNameActionCollectionModel extends CustomerGroupUpdateActionCollectionModel implements CustomerGroupChangeNameActionCollection
{

    /**
     * @param CustomerGroupChangeNameAction $value
     * @return CustomerGroupChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroupChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroupChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroupChangeNameAction) {
            $data = $this->mapData(CustomerGroupChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
