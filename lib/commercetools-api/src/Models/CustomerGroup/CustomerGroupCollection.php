<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerGroup>
 * @method CustomerGroup current()
 * @method CustomerGroup at($offset)
 */
class CustomerGroupCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroup $value
     * @psalm-param CustomerGroup|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroup) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroup
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroup {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
