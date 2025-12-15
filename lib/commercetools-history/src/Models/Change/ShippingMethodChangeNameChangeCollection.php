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
 * @extends ChangeCollection<ShippingMethodChangeNameChange>
 * @method ShippingMethodChangeNameChange current()
 * @method ShippingMethodChangeNameChange end()
 * @method ShippingMethodChangeNameChange at($offset)
 */
class ShippingMethodChangeNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodChangeNameChange $value
     * @psalm-param ShippingMethodChangeNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodChangeNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodChangeNameChange $data */
                $data = ShippingMethodChangeNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
