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
 * @extends MapperSequence<AddShippingAddressIdAction>
 * @method AddShippingAddressIdAction current()
 * @method AddShippingAddressIdAction at($offset)
 */
class AddShippingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddShippingAddressIdAction $value
     * @psalm-param AddShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
