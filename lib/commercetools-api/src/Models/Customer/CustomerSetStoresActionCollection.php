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
 * @extends MapperSequence<CustomerSetStoresAction>
 * @method CustomerSetStoresAction current()
 * @method CustomerSetStoresAction at($offset)
 */
class CustomerSetStoresActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetStoresAction $value
     * @psalm-param CustomerSetStoresAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetStoresActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetStoresAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetStoresAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetStoresAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetStoresActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
