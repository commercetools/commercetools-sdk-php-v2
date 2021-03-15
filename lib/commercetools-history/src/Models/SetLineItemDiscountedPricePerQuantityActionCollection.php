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
 * @extends MapperSequence<SetLineItemDiscountedPricePerQuantityAction>
 * @method SetLineItemDiscountedPricePerQuantityAction current()
 * @method SetLineItemDiscountedPricePerQuantityAction at($offset)
 */
class SetLineItemDiscountedPricePerQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemDiscountedPricePerQuantityAction $value
     * @psalm-param SetLineItemDiscountedPricePerQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemDiscountedPricePerQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemDiscountedPricePerQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemDiscountedPricePerQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemDiscountedPricePerQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemDiscountedPricePerQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
