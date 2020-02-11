<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeSetValidUntilAction>
 * @method DiscountCodeSetValidUntilAction current()
 * @method DiscountCodeSetValidUntilAction at($offset)
 */
class DiscountCodeSetValidUntilActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeSetValidUntilAction $value
     * @psalm-param DiscountCodeSetValidUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetValidUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetValidUntilAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeSetValidUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeSetValidUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
