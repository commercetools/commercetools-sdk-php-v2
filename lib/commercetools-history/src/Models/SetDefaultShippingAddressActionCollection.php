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
 * @extends MapperSequence<SetDefaultShippingAddressAction>
 * @method SetDefaultShippingAddressAction current()
 * @method SetDefaultShippingAddressAction at($offset)
 */
class SetDefaultShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDefaultShippingAddressAction $value
     * @psalm-param SetDefaultShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDefaultShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDefaultShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDefaultShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDefaultShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDefaultShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
