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
 * @extends ChangeCollection<ShippingMethodSetCustomFieldChange>
 * @method ShippingMethodSetCustomFieldChange current()
 * @method ShippingMethodSetCustomFieldChange end()
 * @method ShippingMethodSetCustomFieldChange at($offset)
 */
class ShippingMethodSetCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodSetCustomFieldChange $value
     * @psalm-param ShippingMethodSetCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetCustomFieldChange $data */
                $data = ShippingMethodSetCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
