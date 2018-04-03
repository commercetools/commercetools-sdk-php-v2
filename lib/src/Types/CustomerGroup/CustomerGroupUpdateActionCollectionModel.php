<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerGroupUpdateActionCollectionModel extends JsonCollection implements CustomerGroupUpdateActionCollection {

    /**
     * @param CustomerGroupUpdateAction $value
     * @return CustomerGroupUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroupUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroupUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroupUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(CustomerGroupUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
