<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerSetSalutationAction>
 * @method CustomerSetSalutationAction current()
 * @method CustomerSetSalutationAction at($offset)
 */
class CustomerSetSalutationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetSalutationAction $value
     * @psalm-param CustomerSetSalutationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetSalutationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetSalutationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetSalutationAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetSalutationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetSalutationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
