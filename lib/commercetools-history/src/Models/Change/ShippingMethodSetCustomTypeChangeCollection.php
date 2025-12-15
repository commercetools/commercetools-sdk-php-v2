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
 * @extends ChangeCollection<ShippingMethodSetCustomTypeChange>
 * @method ShippingMethodSetCustomTypeChange current()
 * @method ShippingMethodSetCustomTypeChange end()
 * @method ShippingMethodSetCustomTypeChange at($offset)
 */
class ShippingMethodSetCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodSetCustomTypeChange $value
     * @psalm-param ShippingMethodSetCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetCustomTypeChange $data */
                $data = ShippingMethodSetCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
