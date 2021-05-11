<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends TypedMoneyCollection<HighPrecisionMoney>
 * @method HighPrecisionMoney current()
 * @method HighPrecisionMoney at($offset)
 */
class HighPrecisionMoneyCollection extends TypedMoneyCollection
{
    /**
     * @psalm-assert HighPrecisionMoney $value
     * @psalm-param HighPrecisionMoney|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return HighPrecisionMoneyCollection
     */
    public function add($value)
    {
        if (!$value instanceof HighPrecisionMoney) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?HighPrecisionMoney
     */
    protected function mapper()
    {
        return function (int $index): ?HighPrecisionMoney {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var HighPrecisionMoney $data */
                $data = HighPrecisionMoneyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
