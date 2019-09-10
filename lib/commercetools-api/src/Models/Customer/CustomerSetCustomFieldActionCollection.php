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
 * @extends MapperSequence<CustomerSetCustomFieldAction>
 *
 * @method CustomerSetCustomFieldAction current()
 * @method CustomerSetCustomFieldAction at($offset)
 */
class CustomerSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetCustomFieldAction $value
     * @psalm-param CustomerSetCustomFieldAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
