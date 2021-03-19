<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetDefaultShippingAddressChange>
 * @method SetDefaultShippingAddressChange current()
 * @method SetDefaultShippingAddressChange at($offset)
 */
class SetDefaultShippingAddressChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDefaultShippingAddressChange $value
     * @psalm-param SetDefaultShippingAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDefaultShippingAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDefaultShippingAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDefaultShippingAddressChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetDefaultShippingAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDefaultShippingAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
