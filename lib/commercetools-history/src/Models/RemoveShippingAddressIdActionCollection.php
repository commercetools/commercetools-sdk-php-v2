<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveShippingAddressIdAction>
 * @method RemoveShippingAddressIdAction current()
 * @method RemoveShippingAddressIdAction at($offset)
 */
class RemoveShippingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveShippingAddressIdAction $value
     * @psalm-param RemoveShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
