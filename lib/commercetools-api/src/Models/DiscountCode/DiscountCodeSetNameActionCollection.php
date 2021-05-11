<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\DiscountCode\DiscountCodeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeSetNameAction>
 * @method DiscountCodeSetNameAction current()
 * @method DiscountCodeSetNameAction at($offset)
 */
class DiscountCodeSetNameActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeSetNameAction $value
     * @psalm-param DiscountCodeSetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeSetNameAction $data */
                $data = DiscountCodeSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
