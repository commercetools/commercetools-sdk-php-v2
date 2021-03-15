<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetLineItemDiscountedPriceAction>
 * @method SetLineItemDiscountedPriceAction current()
 * @method SetLineItemDiscountedPriceAction at($offset)
 */
class SetLineItemDiscountedPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemDiscountedPriceAction $value
     * @psalm-param SetLineItemDiscountedPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemDiscountedPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemDiscountedPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemDiscountedPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemDiscountedPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemDiscountedPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
