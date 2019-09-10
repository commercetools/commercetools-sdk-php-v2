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
 * @extends MapperSequence<CustomerGroupChangeNameAction>
 *
 * @method CustomerGroupChangeNameAction current()
 * @method CustomerGroupChangeNameAction at($offset)
 */
class CustomerGroupChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupChangeNameAction $value
     * @psalm-param CustomerGroupChangeNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
