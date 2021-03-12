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
 * @extends MapperSequence<SetDiscountedPriceAction>
 * @method SetDiscountedPriceAction current()
 * @method SetDiscountedPriceAction at($offset)
 */
class SetDiscountedPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDiscountedPriceAction $value
     * @psalm-param SetDiscountedPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDiscountedPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDiscountedPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDiscountedPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDiscountedPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDiscountedPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
