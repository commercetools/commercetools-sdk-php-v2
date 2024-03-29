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
 * @extends MapperSequence<CustomerGroupUpdate>
 * @method CustomerGroupUpdate current()
 * @method CustomerGroupUpdate end()
 * @method CustomerGroupUpdate at($offset)
 */
class CustomerGroupUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupUpdate $value
     * @psalm-param CustomerGroupUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupUpdate $data */
                $data = CustomerGroupUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
