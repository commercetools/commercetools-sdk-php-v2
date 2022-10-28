<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MethodTaxedPrice>
 * @method MethodTaxedPrice current()
 * @method MethodTaxedPrice end()
 * @method MethodTaxedPrice at($offset)
 */
class MethodTaxedPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert MethodTaxedPrice $value
     * @psalm-param MethodTaxedPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MethodTaxedPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof MethodTaxedPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MethodTaxedPrice
     */
    protected function mapper()
    {
        return function (?int $index): ?MethodTaxedPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MethodTaxedPrice $data */
                $data = MethodTaxedPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
