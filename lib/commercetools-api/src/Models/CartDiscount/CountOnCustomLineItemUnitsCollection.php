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
 * @extends PatternComponentCollection<CountOnCustomLineItemUnits>
 * @method CountOnCustomLineItemUnits current()
 * @method CountOnCustomLineItemUnits end()
 * @method CountOnCustomLineItemUnits at($offset)
 */
class CountOnCustomLineItemUnitsCollection extends PatternComponentCollection
{
    /**
     * @psalm-assert CountOnCustomLineItemUnits $value
     * @psalm-param CountOnCustomLineItemUnits|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CountOnCustomLineItemUnitsCollection
     */
    public function add($value)
    {
        if (!$value instanceof CountOnCustomLineItemUnits) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CountOnCustomLineItemUnits
     */
    protected function mapper()
    {
        return function (?int $index): ?CountOnCustomLineItemUnits {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CountOnCustomLineItemUnits $data */
                $data = CountOnCustomLineItemUnitsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
