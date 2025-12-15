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
 * @extends ChangeCollection<ShippingMethodSetLocalizedDescriptionChange>
 * @method ShippingMethodSetLocalizedDescriptionChange current()
 * @method ShippingMethodSetLocalizedDescriptionChange end()
 * @method ShippingMethodSetLocalizedDescriptionChange at($offset)
 */
class ShippingMethodSetLocalizedDescriptionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodSetLocalizedDescriptionChange $value
     * @psalm-param ShippingMethodSetLocalizedDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetLocalizedDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetLocalizedDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetLocalizedDescriptionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetLocalizedDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetLocalizedDescriptionChange $data */
                $data = ShippingMethodSetLocalizedDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
