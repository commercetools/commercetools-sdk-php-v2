<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PriceFunction>
 * @method PriceFunction current()
 * @method PriceFunction end()
 * @method PriceFunction at($offset)
 */
class PriceFunctionCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceFunction $value
     * @psalm-param PriceFunction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceFunctionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceFunction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceFunction
     */
    protected function mapper()
    {
        return function (?int $index): ?PriceFunction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PriceFunction $data */
                $data = PriceFunctionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
