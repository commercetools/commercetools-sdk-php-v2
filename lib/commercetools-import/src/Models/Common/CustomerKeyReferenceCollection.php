<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerKeyReference>
 *
 * @method CustomerKeyReference current()
 * @method CustomerKeyReference at($offset)
 */
class CustomerKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerKeyReference $value
     * @psalm-param CustomerKeyReference|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?CustomerKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
