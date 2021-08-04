<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodChangeValue>
 * @method ShippingMethodChangeValue current()
 * @method ShippingMethodChangeValue at($offset)
 */
class ShippingMethodChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodChangeValue $value
     * @psalm-param ShippingMethodChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodChangeValue $data */
                $data = ShippingMethodChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
