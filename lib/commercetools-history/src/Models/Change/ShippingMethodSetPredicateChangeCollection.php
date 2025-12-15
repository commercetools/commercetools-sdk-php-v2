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
 * @extends ChangeCollection<ShippingMethodSetPredicateChange>
 * @method ShippingMethodSetPredicateChange current()
 * @method ShippingMethodSetPredicateChange end()
 * @method ShippingMethodSetPredicateChange at($offset)
 */
class ShippingMethodSetPredicateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodSetPredicateChange $value
     * @psalm-param ShippingMethodSetPredicateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetPredicateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetPredicateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetPredicateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetPredicateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetPredicateChange $data */
                $data = ShippingMethodSetPredicateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
