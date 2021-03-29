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
 * @extends MapperSequence<SetShippingAddressChange>
 * @method SetShippingAddressChange current()
 * @method SetShippingAddressChange at($offset)
 */
class SetShippingAddressChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetShippingAddressChange $value
     * @psalm-param SetShippingAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingAddressChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetShippingAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetShippingAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
