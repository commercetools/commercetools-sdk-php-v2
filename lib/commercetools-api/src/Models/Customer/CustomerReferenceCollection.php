<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<CustomerReference>
 * @method CustomerReference current()
 * @method CustomerReference end()
 * @method CustomerReference at($offset)
 */
class CustomerReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert CustomerReference $value
     * @psalm-param CustomerReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerReference $data */
                $data = CustomerReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
