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
 * @extends ChangeCollection<ShippingMethodSetKeyChange>
 * @method ShippingMethodSetKeyChange current()
 * @method ShippingMethodSetKeyChange end()
 * @method ShippingMethodSetKeyChange at($offset)
 */
class ShippingMethodSetKeyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodSetKeyChange $value
     * @psalm-param ShippingMethodSetKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetKeyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetKeyChange $data */
                $data = ShippingMethodSetKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
