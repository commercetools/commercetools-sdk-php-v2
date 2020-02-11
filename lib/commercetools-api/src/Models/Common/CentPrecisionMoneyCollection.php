<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CentPrecisionMoney>
 * @method CentPrecisionMoney current()
 * @method CentPrecisionMoney at($offset)
 */
class CentPrecisionMoneyCollection extends MapperSequence
{
    /**
     * @psalm-assert CentPrecisionMoney $value
     * @psalm-param CentPrecisionMoney|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CentPrecisionMoneyCollection
     */
    public function add($value)
    {
        if (!$value instanceof CentPrecisionMoney) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CentPrecisionMoney
     */
    protected function mapper()
    {
        return function (int $index): ?CentPrecisionMoney {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CentPrecisionMoneyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
