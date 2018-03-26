<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;

class CustomerUpdateActionCollectionModel extends JsonCollection implements CustomerUpdateActionCollection {

    /**
     * @param CustomerUpdateAction $value
     * @return CustomerUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(CustomerUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
