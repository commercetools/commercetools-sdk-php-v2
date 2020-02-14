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
 * @extends MapperSequence<CustomerRemoveStoreAction>
 * @method CustomerRemoveStoreAction current()
 * @method CustomerRemoveStoreAction at($offset)
 */
class CustomerRemoveStoreActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerRemoveStoreAction $value
     * @psalm-param CustomerRemoveStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerRemoveStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerRemoveStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerRemoveStoreAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerRemoveStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerRemoveStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
