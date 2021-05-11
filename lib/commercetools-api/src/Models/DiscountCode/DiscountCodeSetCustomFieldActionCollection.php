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
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeSetCustomFieldAction>
 * @method DiscountCodeSetCustomFieldAction current()
 * @method DiscountCodeSetCustomFieldAction at($offset)
 */
class DiscountCodeSetCustomFieldActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeSetCustomFieldAction $value
     * @psalm-param DiscountCodeSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeSetCustomFieldAction $data */
                $data = DiscountCodeSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
