<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

/**
 * @extends KeyReferenceCollection<CustomerGroupKeyReference>
 * @method CustomerGroupKeyReference current()
 * @method CustomerGroupKeyReference at($offset)
 */
class CustomerGroupKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert CustomerGroupKeyReference $value
     * @psalm-param CustomerGroupKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupKeyReference $data */
                $data = CustomerGroupKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
