<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeInfo>
 * @method DiscountCodeInfo current()
 * @method DiscountCodeInfo at($offset)
 */
class DiscountCodeInfoCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeInfo $value
     * @psalm-param DiscountCodeInfo|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeInfoCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeInfo) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeInfo
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeInfo {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeInfo $data */
                $data = DiscountCodeInfoModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
