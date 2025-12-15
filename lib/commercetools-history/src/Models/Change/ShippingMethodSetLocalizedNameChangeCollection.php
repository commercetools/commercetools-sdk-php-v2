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
 * @extends ChangeCollection<ShippingMethodSetLocalizedNameChange>
 * @method ShippingMethodSetLocalizedNameChange current()
 * @method ShippingMethodSetLocalizedNameChange end()
 * @method ShippingMethodSetLocalizedNameChange at($offset)
 */
class ShippingMethodSetLocalizedNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodSetLocalizedNameChange $value
     * @psalm-param ShippingMethodSetLocalizedNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetLocalizedNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetLocalizedNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetLocalizedNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetLocalizedNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetLocalizedNameChange $data */
                $data = ShippingMethodSetLocalizedNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
