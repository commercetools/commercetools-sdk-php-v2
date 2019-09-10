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
 * @extends MapperSequence<DiscountCodeSetDescriptionAction>
 *
 * @method DiscountCodeSetDescriptionAction current()
 * @method DiscountCodeSetDescriptionAction at($offset)
 */
class DiscountCodeSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeSetDescriptionAction $value
     * @psalm-param DiscountCodeSetDescriptionAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
