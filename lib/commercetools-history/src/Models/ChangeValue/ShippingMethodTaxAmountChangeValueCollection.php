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
 * @extends MapperSequence<ShippingMethodTaxAmountChangeValue>
 * @method ShippingMethodTaxAmountChangeValue current()
 * @method ShippingMethodTaxAmountChangeValue end()
 * @method ShippingMethodTaxAmountChangeValue at($offset)
 */
class ShippingMethodTaxAmountChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodTaxAmountChangeValue $value
     * @psalm-param ShippingMethodTaxAmountChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodTaxAmountChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodTaxAmountChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodTaxAmountChangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodTaxAmountChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodTaxAmountChangeValue $data */
                $data = ShippingMethodTaxAmountChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
