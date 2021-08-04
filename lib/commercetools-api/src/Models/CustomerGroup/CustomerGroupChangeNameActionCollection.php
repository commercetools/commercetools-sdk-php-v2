<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CustomerGroupUpdateActionCollection<CustomerGroupChangeNameAction>
 * @method CustomerGroupChangeNameAction current()
 * @method CustomerGroupChangeNameAction end()
 * @method CustomerGroupChangeNameAction at($offset)
 */
class CustomerGroupChangeNameActionCollection extends CustomerGroupUpdateActionCollection
{
    /**
     * @psalm-assert CustomerGroupChangeNameAction $value
     * @psalm-param CustomerGroupChangeNameAction|stdClass $value
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
        return function (?int $index): ?CustomerGroupChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupChangeNameAction $data */
                $data = CustomerGroupChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
