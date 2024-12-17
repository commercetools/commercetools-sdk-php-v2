<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\PatternComponentCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends PatternComponentCollection<CountOnLineItemUnits>
 * @method CountOnLineItemUnits current()
 * @method CountOnLineItemUnits end()
 * @method CountOnLineItemUnits at($offset)
 */
class CountOnLineItemUnitsCollection extends PatternComponentCollection
{
    /**
     * @psalm-assert CountOnLineItemUnits $value
     * @psalm-param CountOnLineItemUnits|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CountOnLineItemUnitsCollection
     */
    public function add($value)
    {
        if (!$value instanceof CountOnLineItemUnits) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CountOnLineItemUnits
     */
    protected function mapper()
    {
        return function (?int $index): ?CountOnLineItemUnits {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CountOnLineItemUnits $data */
                $data = CountOnLineItemUnitsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
