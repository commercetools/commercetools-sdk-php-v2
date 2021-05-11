<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetShippingAddressChange>
 * @method SetShippingAddressChange current()
 * @method SetShippingAddressChange at($offset)
 */
class SetShippingAddressChangeCollection extends ChangeCollection
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
                /** @var SetShippingAddressChange $data */
                $data = SetShippingAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
