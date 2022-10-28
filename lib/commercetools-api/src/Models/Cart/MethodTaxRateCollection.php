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
 * @extends MapperSequence<MethodTaxRate>
 * @method MethodTaxRate current()
 * @method MethodTaxRate end()
 * @method MethodTaxRate at($offset)
 */
class MethodTaxRateCollection extends MapperSequence
{
    /**
     * @psalm-assert MethodTaxRate $value
     * @psalm-param MethodTaxRate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MethodTaxRateCollection
     */
    public function add($value)
    {
        if (!$value instanceof MethodTaxRate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MethodTaxRate
     */
    protected function mapper()
    {
        return function (?int $index): ?MethodTaxRate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MethodTaxRate $data */
                $data = MethodTaxRateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
