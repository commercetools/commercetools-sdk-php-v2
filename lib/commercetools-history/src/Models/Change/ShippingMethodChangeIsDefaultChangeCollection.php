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
 * @extends ChangeCollection<ShippingMethodChangeIsDefaultChange>
 * @method ShippingMethodChangeIsDefaultChange current()
 * @method ShippingMethodChangeIsDefaultChange end()
 * @method ShippingMethodChangeIsDefaultChange at($offset)
 */
class ShippingMethodChangeIsDefaultChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodChangeIsDefaultChange $value
     * @psalm-param ShippingMethodChangeIsDefaultChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeIsDefaultChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeIsDefaultChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeIsDefaultChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodChangeIsDefaultChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodChangeIsDefaultChange $data */
                $data = ShippingMethodChangeIsDefaultChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
