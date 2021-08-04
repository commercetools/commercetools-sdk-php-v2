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
 * @extends KeyReferenceCollection<CustomerKeyReference>
 * @method CustomerKeyReference current()
 * @method CustomerKeyReference end()
 * @method CustomerKeyReference at($offset)
 */
class CustomerKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert CustomerKeyReference $value
     * @psalm-param CustomerKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerKeyReference $data */
                $data = CustomerKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
