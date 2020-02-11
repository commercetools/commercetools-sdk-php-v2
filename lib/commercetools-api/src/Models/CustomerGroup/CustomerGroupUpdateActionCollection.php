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
 * @extends MapperSequence<CustomerGroupUpdateAction>
 * @method CustomerGroupUpdateAction current()
 * @method CustomerGroupUpdateAction at($offset)
 */
class CustomerGroupUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupUpdateAction $value
     * @psalm-param CustomerGroupUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
