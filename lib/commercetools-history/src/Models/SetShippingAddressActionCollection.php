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
 * @extends MapperSequence<SetShippingAddressAction>
 * @method SetShippingAddressAction current()
 * @method SetShippingAddressAction at($offset)
 */
class SetShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetShippingAddressAction $value
     * @psalm-param SetShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
